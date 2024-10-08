<?php
include("vendor/autoload.php");
use \Firebase\JWT\JWT;
use \Firebase\JWT\Key;

$secretKey = 'your_secret_key'; // Key yang sama dengan yang digunakan untuk encode

function validateJWT($jwt) {
    global $secretKey;
    try {
        $decoded = JWT::decode($jwt, new Key($secretKey, 'HS256'));
        return $decoded->data->username;
    } catch (Exception $e) {
        return null;
    }
}

?>