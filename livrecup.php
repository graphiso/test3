<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion de l'identifiant</title>
</head>
<form action="livconnexion.php" method="POST">
<style>
Body{
    background-image:url(deco.JPEG);
    background-repeat:no-repeat;
    background-size:cover;
}
#id{
    border:solid 5px;;
    border-color:white;
    display:flex;
    flex-direction:column;

}
td{
    border:solid 3px;
    border-color:white;
}
</style>
<body>
<h1>Bienvenue sur le Site </h1><br>
<br>
<h5>Veuillez vous identifier utilisateur</h5>
<table>
    <tr>
    <td>Identifiant :<input type="text" name="identifiant" value="identifiant"</td><br>
    <td>Mot de Passe<input type="password" name="password" value="password" </td><br>
    </tr>
    <select id="olio"><br>
    <option value="">Profil</option>
    <option value="">user</option>
    <option value="">admin</option>
    </select><br>
    </table>
    <input type="submit" name="connexion" value="connexion">
    </div>
</body>
<bling><h1>Copyright Sonatel Academy 2017 @GRAPHISO</h1></bling>
<footer>
</footer>
</html>
<?php
if (isset($_POST["connexion"])){
    extract($_POST);
    if($identifiant=="user"){
        if($identifiant=="user" && $password=="user"){
            $_SESSION["$olio"]==header("location:site.php");
            $_SESSION["$olio"];
        }elseif ($identifiant=="admin" && $password=="admin") {
            echo" vous n'etes pas éligible";
        }else{
            echo"identifiant ou password incorrect veuillez ressayer";
        }
    }
    elseif ($identifiant=="admin") {
        if($identifiant=="admin" && $password=="admin"){
            $_SESSION["$olio"]==header("location:anale.php");
            $_SESSION["$olio"];
        }elseif($identifiant=="user" && $password=="user"){
            echo"vous n'etes pas éligible";
        }else{
            echo"login ou password incorrect veuillez ressayer";
        }
    }
}
$tab = array();
$tab['$identifiant'] = '';
$tab['$password'] = '';
$monfichier = 'monfichier.txt';
file_put_contents($monfichier, serialize($tab));
$lecture_fichier = file_get_contents($monfichier);
$tab_recup = unserialize($lecture_fichier);
echo isset($tab_recup['$identifiant']) ? $tab_recup['$password'] : '';
