<?php 

require_once 'affiche.php';

try{

    require_once 'creat.php';

$prepare = $pdo->prepare("UPDATE users SET username=:username,password=:password,email=:email,phone=:phone WHERE id=:id");
$prepare->bindParam(':id', $_POST['id'],PDO::PARAM_INT);
$prepare->bindParam(':username', $username,PDO::PARAM_STR);
$prepare->bindParam(':password', $password,PDO::PARAM_STR);
$prepare->bindParam(':email', $email,PDO::PARAM_STR);
$prepare->bindParam(':phone', $phone,PDO::PARAM_STR);
$prepare->execute();print_r($username);}

catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire de création d'utilisateur</title>
</head>

<body>
    <div class="container">
        <form action="modifier.php" method="post">
            <div class="form-group">
                <label for="name">Nom</label>
                <input type="text" class="form-control" id="name" value="<?= $resultat["username"]?>" name="username" placeholder="Nom">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" value="<?php echo $resultat["email"]?>" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" id="password" value="<?= $resultat["password"]?>" name="password" placeholder="Mot de passe">
            </div>
            <div class="form-group">
                <label for="phone">Téléphone</label>
                <input type="number" class="form-control" id="phone" value="<?= $resultat["phone"]?>" name="phone" placeholder="Phone">
                <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
    </div>
    
</body>
</html>