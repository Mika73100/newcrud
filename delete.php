<?php

require_once 'connexion.php';

$sql = "DELETE FROM `users` WHERE id = :id";

$prepare = $pdo->prepare($sql);
$prepare->bindparam(':id',$_GET['id']);
$prepare->execute();

?>