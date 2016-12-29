<?php

/**
 * Estabeleçe uma ligação à BD
 * @return mysqli A ligação
 */
function connect_database()
{
    $hostname = 'centos-1';
    $username = 'apm';
    $password = 'apm123';
    $database = 'projeto';

    $connection = new mysqli($hostname, $username, $password, $database);
    if ($connection->connect_errno) {
        die('Aconteceu um erro ao ligar à base de dados (' . $connection->connect_errno . '): ' . $connection->connect_error);
    }

    return $connection;
}

/**
 * Lança um erro http (https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#4xx_Client_Error) e devolver infomação
 * no formato json
 * @param $code HTTP Status Code
 * @param $erro Informação do erro
 */
function throw_http_error($code, $erro)
{
    http_response_code(400);
    header("Content-type: application/json");
    echo json_encode(array(
        "erro" => $erro
    ));
    exit(); // terminar execução

}

/**
 * Inicia a variável de sessão $_SESSION['user'] com o id e username de registo do utilizador
 * @param $registo_id ID de registo
 * @param $username Utilizador
 */
function create_session_login($registo_id, $username)
{
    $_SESSION['user'] = array(
        "id" => $registo_id,
        "username" => $username
    );
}

/**
 * @return bool Devolver TRUE se a sessão é válida
 * @note Verificação simplista, apenas verifica se a variável $_SESSION['user'] é valida
 */
function is_session_login_valid()
{
    $user = $_SESSION['user'];
    if (!is_array($user))
        return false;
    return $user['id'] && $user['username'];
}

function destroy_session() {
    unset($_SESSION['user']);
}