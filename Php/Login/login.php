<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <form action="login.php" method="post" >        
            <input type="text" name="nom"  placeholder="Entrer votre nom:" required> 
            <input type="email" name="email" placeholder="Entrer votre email:" >        
            <input type="submit" value="S'inscrire!">        
    </form>
    <?php
    if (isset($_POST['nom'])){
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        echo "Bienvenue $nom";
        echo "<br> Un mail de confirmation a été envoyé à l'adressse $email";
    }
    ?>
</body>

</html>