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
            <input type="text" name="nomtapper"  placeholder="Entrer votre nom" required> 
            <input type="password" name="mdptapper" placeholder="Entrer votre mot de passe" >        
            <input type="submit" value="S'inscrire!">        
    </form>
    <?php
    $mdpatrouver = "123";
    $nomatrouver = "test";

    if (isset($_POST['nomtapper']) & isset($_POST['mdptapper'])){
        $nomtapper = $_POST['nomtapper'];
        $mdptapper = $_POST['mdptapper'];
    
        //Connexion à la base de donnée
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ifr_sitemobile";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "SELECT `username`, `password` FROM `ifr_sitemobile`.`utilisateur` WHERE  `username`='$nomtapper' AND `password`='$mdptapper';";
        $result = $conn->query($sql);


        
        if($result->num_rows > 0){
            echo 'Authentification ok';
        }
        else{
            echo 'Authentification pas ok';
        }        
    }
    ?>
</body>

</html>