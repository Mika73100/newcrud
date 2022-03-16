<?php 

require_once 'connexion.php';

$prepare = $pdo->prepare("SELECT * FROM users WHERE id=:id");

$prepare->bindparam(':id',$_GET['id']);
$prepare->execute();
$resultat = $prepare->fetch();

echo $resultat['username'].'<br>';
echo $resultat['password'].'<br>';
echo $resultat['email'].'<br>';
echo $resultat['phone'];
?>