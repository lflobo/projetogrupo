<?php

include_once 'lib/functions.php';

// iniciar a ligação à BD
$connection = connect_database();

$username = $_POST['username'];
$password = $_POST['password'];

// vamos usar json para o conteúdo
header("Content-type: application/json");

// Verificar se os argumentos foram passados corretamente
if (!$username || !$password) {
    // devolver erro '400 Bad Request'
    throw_http_error(400, "Tem que especificar login/password");
}

// verificar se o utilizador/email já existe
$result = mysqli_query($connection, "SELECT * FROM registo WHERE username='$username' AND password = md5('$password')");
if (!$result) { // o query falhou
    // devolver um erro 500 Internal Server Error - o query falhou
    throw_http_error(500, $connection->error);
}

// Se não existe o utilizador com a password
if (mysqli_num_rows($result) < 1) {
    // devolver erro '401 Unauthorized'
    throw_http_error(401, "Login Inválido");
}

// O login foi bem sucedido, criar a sessão com os dados do query
session_start();
$row = $result->fetch_assoc();

$registo_id = $row['registo'];
create_session_login($registo_id, $username);

$registo = array(
    "id" => $registo_id,
    "nome" => $row['nome'],
    "localizacao" => $row['localizacao'],
    "email" => $row['email'],
    "username" => $username
);
echo json_encode($registo);