<?php
/*
$servername = "localhost";
$username = "root"; 
$password = "root";
$dbname = "lolja"; 
*/
$servername = "sql310.infinityfree.com";
$username = "if0_37797726"; 
$password = "6XXxkI87k6HHkv";
$dbname = "if0_37797726_parjadb"; 

function connectDB(){
    Global $servername, $dbname, $username, $password;
    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Erro ao conectar ao banco de dados: " . $e->getMessage());
    }
  
}

?>