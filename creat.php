<?php

require_once 'connexion.php';


try{
    if (@$_POST){
        extract($resultat [@$_POST['id']]);
    }
    else {
        extract(@$_POST);
    }
    $prepare = $pdo->prepare("INSERT INTO users (username,password,email,phone) VALUES (:username, :password, :email, :phone)");

    $prepare->bindParam(':username', $username);
    $prepare->bindParam(':password', $password);
    $prepare->bindParam(':email', $email);
    $prepare->bindParam(':phone', $phone);
    $prepare->execute();

    header('Location:index.php');

}catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
    }
?>
