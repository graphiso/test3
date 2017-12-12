<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <a href="./livrecup.php">Déconnection</a>
        <style>
        body{
            background-image: url("deco.JPEG");
        }
        </style>
    </head>
    <body>
        <form action="">
        <h1>Calculatrice.php</h1>
            <table>
                <tr>
                    <td>nombre1</td>
                    <td><input type ="number" name="nbr1"></td>
                </tr>
                <tr>
                    <td>nombre2</td>
                    <td><input type="number" name="nbr2"></td>
                </tr>
                <tr>
                    <td>opérateur</td>
                </tr>
                <td>
                    <select name"choix">
                        <option value="">selectionner un operateur</option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                        <option value="%">%</option>
                    </select>
                </td>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" name="" value="calculatrice">
                </tr>
                        </table>
                     </form>
                     <?php
                     if (isset ($_POST['calculer'])){
                         extract($_POST);
                         if ($choix =='+'){
                             $res = $nbr1 + $nbr2;
                            echo "$nbr1+$nbr2=$res";
                        }
                        elseif ($choix=='-') {
                             $res = $nbr1 - $nbr2;
                            echo "$nbr1-$nbr2=$res";
                        }
                        elseif ($choix=='*') {
                             $res = $nbr1 * $nbr2;
                            echo "$nbr1*$nbr2=$res";
                        }
                        elseif ($choix=='/') {
                             $res = $nbr1 / $nbr2;
                            echo "$nbr1/$nbr2=$res";
                        }
                        elseif ($choix=='%') {
                             $res = $nbr1 % $nbr2;
                            echo "$nbr1%$nbr2=$res";
                        }
                    }
        ?>
        <p>
        <h1><b>DEMANDE</b></h1>
</p>
        <br>
            NOM:<input type='text' value=""><br>
            PRENOM:<input type='text' value=""><br>
            age:<input type='number' value="">Ans<br>
            email<input type='email' value=""><br>
            <p>
           SEXE:<input type="radio" value="M">MASCULIN <input type="radio" value "F">FEMININ</p><br>
          Sport Preferer:<br><p><input type="checkbox" value="f">FOOTBALL<input type="checkbox" value="b">BASKET <input type="checkbox" value="n">Natation <input type="checkbox" value="a">Autres</p> <br/>
            Commentaire:<br>
            <TEXTAREA name="comments" rows=10 cols=60></textarea><br>
            </table>
            <tr>
                <br/>
                <td><input type=submit value=valider  name="valider"></td>
                <td><input type=reset value=annuler </td>
            </tr>
        </form>

        <?php
                if (isset($_POST['valider'])) {
                        extract($_POST);
                        if (is_numeric($age)) {
                        }
                        else {
                            echo "Age n'est pas numérique";
                        }

                }
        ?>


    </body>
</html>
