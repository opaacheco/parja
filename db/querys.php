<?php 

$pdo = connectDB();

function buscarProdutos(){
    Global $pdo;
    $sql = "SELECT id, nome, preco, foto_url FROM produtos";
    $stmt = $pdo->query($sql);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function buscarUsers($email){
    Global $pdo;
    $stmt = $pdo->prepare("SELECT id, email, senha FROM usuarios WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $resultatoUser = $stmt->fetch(PDO::FETCH_ASSOC);
    return $resultatoUser;
}

function inserirUser($name, $email, $hashPass){
    Global $pdo;
    $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha, tipo_usuario) VALUES (:nome, :email, :senha, :tipo_usuario)");
    $tipo_usuario = 'usuario';
    $stmt->bindParam(':nome', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $hashPass);
    $stmt->bindParam(':tipo_usuario', $tipo_usuario);
    $stmt->execute();
}

?>