<?php
include_once('../config/connection.php');

session_start();
    if($_SESSION['logado'] != true){
        header('Location: index.php');
        die();
    }

    if(isset($_GET['sair'])){
        session_destroy();
        header('Location: index.php');
        die();
    }

$stmt = $conectar->prepare("SELECT * FROM posts ORDER BY id DESC");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

include_once('header.php');

?>