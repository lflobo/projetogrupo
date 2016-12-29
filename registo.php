<?php

include_once 'lib/functions.php';

// iniciar a ligação à BD
$connection = connect_database();

$nome = $_POST['nome'];
$localizacao = $_POST['localizacao'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$password_confirmacao = $_POST['password_confirmacao'];

// vamos usar json para o conteúdo
header("Content-type: application/json");

// Verificar se os argumentos foram passados corretamente
if (!$nome || !$email || !$localizacao || !$username || !$password || !$password_confirmacao) {
    // devolver erro '400 Bad Request'
    throw_http_error(400, "Tem que especificar todos os argumentos");
}

// verificar se o utilizador/email já existe
$result = mysqli_query($connection, "SELECT 1 FROM registo WHERE email='$email' OR username ='$username'");
if (!$result) { // o query falhou
    // devolver um erro 500 Internal Server Error - o query falhou
    throw_http_error(500, $connection->error);
}

if (mysqli_num_rows($result) > 0) {
    // devolver erro '409 conflict'
    throw_http_error(409, "Já existe um utilizador com esse email/username");
}

// verificar que as passwords estão iguais
if (strcmp($password, $password_confirmacao) !== 0) {
    // devolver erro '400 Bad Request'
    throw_http_error(400, "As passwords não estão iguais");
}

// criar o utilizador e devolver o identificador
$result = mysqli_query($connection, "
 INSERT INTO registo(nome, localizacao, email, username, password, password_confirmacao)
 VALUES('$nome', '$localizacao', '$email', '$username', md5('$password'), md5('$password_confirmacao'))
");
if (!$result) {
    throw_http_error(500, $connection->error);
}

// o registo foi bem sucedido !!!

// criar uma sessão (login) e devolver os dados do utilizador criados
session_start();
$registo_id = $connection->insert_id;
create_session_login($registo_id, $username);

// criar um array com os dados do utilizador para devolver ao pedido de POST
$registo = array(
    "id" => $registo_id,
    "nome" => $nome,
    "localizacao" => $localizacao,
    "email" => $email,
    "username" => $username
);
echo json_encode($registo);