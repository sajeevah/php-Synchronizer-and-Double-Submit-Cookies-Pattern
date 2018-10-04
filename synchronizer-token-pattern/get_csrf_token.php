<?php
session_start();
require_once 'Token.php';

// 3) Endpoint that accepts HTTP POST requests and respond with the CSRF token. 
// The endpoint receives the session cookie and based on the session identifier, 
// return the CSRF token value.
$sessionID = $_COOKIE['sessionID'];

$csrfToken = Token::getTokenBySession($sessionID);

echo json_encode(array("token" => $csrfToken));
