<?php

session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db = "sistema_simples";

?> 




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
</head>
<body>
    <h1>Tela de Login - PHP</h1>

    <form method="POST">

    <label>Usuarios</label>
    <input type="text" name="usuario"> <br>
    <label>Senha</label>
    <input type="password" name="senha"> <br>

    <button type="submit"> Entrar </button> 
  
</form>
</body>
</html>