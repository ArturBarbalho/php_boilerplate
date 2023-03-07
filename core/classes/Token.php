<?php
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
require('../config.php');
class Token{
    public function generate($email){
        $payload = [
            "exp" => time() + 7200,
            "iat" => time(),
            "email" => $email
        ];
        $encode = JWT::encode($payload, JWT_KEY, 'HS256');
        return $encode;
    }
    public function autenticate($jwt){
        $decoded = JWT::decode($jwt, new Key(JWT_KEY, 'HS256'));
        return $decoded;
    }
}