<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>phpprojet1</title>
    <style media="screen">
    td{
      width: 100px;
      height: 100px;
      border: 4px solid gray;
    }
    body{
    background-image:url(tofs.JPG);
    }
    .rouge{
      background-color: red;
    }
    .bleu{
      background-color: blue;
    }
    .vert{
      background-color: green;
    }
    </style>

</head>
<body>
    <form method="POST"><br/>
    <br/>
    <br/>
    <br/>
    <table>
        <tr>Nombre de lignes:</tr>
        <select name="ligne"><br/>
            <option value="">+++++++++++++++++choisir le nombre de lignes++++++++++++</option>
            <option value="2">++++++++++++++++[2 lignes]+++++++++++++++</option>
            <option value="3">++++++++++++++++[3 lignes]+++++++++++++</option>
            <option value="4">+++++++++++++++[4 lignes]++++++++++++++</option>
            <option value="5">+++++++++++++++[5 lignes]++++++++++++++</option>
            <option value="6">+++++++++++++++[6 lignes]++++++++++++++</option>
            <option value="7">++++++++++++++++[7 lignes]++++++++++++</option>
            <option value="8">++++++++++++++++[8 lignes]++++++++++++</option>
            <option value="9">++++++++++++++++[9 lignes]+++++++++++++++</option>
            <option value="11">+++++++++++++++[10 lignes]++++++++++++++++</option>
        </select>
        <input type="submit" name="generer" value="generer">
           </table>
           </form>

<?php

if (isset($_POST['generer'])) {
        extract($_POST);
$ligne=$_POST['ligne'];
       if ($ligne=="") {
           echo"Veuillez faire un choix";
       }
elseif($i=$ligne and $j=$ligne)
{

    echo '<table border="solid" width="500px" height="250px">';
$i="";

for($i = 0; $i < $ligne; $i++) {
    echo '<tr>';
        $j=$ligne;

    for($j = 0; $j < $ligne; $j++) {
          if ($i==$j && $j==$ligne-1-$i) 
          {
            $bg="vert";
                 echo "<td class=$bg></td>";
                }
 elseif ($i==$j) {
            $bg="rouge";
            echo "<td class=$bg></td>";
        }
elseif ($j==$ligne-1-$i) {
            $bg="bleu";
            echo "<td class=$bg ></td>";
          }
          else {
        echo '<td></td>';
    }
}
    echo '</tr>';
}
echo'</table>';

}}
     ?>
</body>
</html>
