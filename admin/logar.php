<?php
    include_once('../config/connection.php');
        session_start();
            $login = $_POST['login'];
            $senha = $_POST['senha'];
            $stmt = $conectar->prepare("SELECT * FROM users WHERE login = :LOGIN AND senha = :SENHA");
            $stmt->bindParam(":LOGIN", $login);
            $stmt->bindParam(":SENHA", $senha);
            $stmt->execute();

                if($stmt->rowCount() == 1){
                $info = $stmt->fetch();
                //var_dump($info);
                $_SESSION['logado'] = true;
                $_SESSION['id'] = $info['id'];
                $_SESSION['nome'] = $info['nome'];
                $_SESSION['login'] = $info['login'];
                $_SESSION['senha'] = $info['senha'];
                    
                header("Location: view2.php");
                }else{
                echo 'Usuário não cadastrado.';
                }
    
                
?>