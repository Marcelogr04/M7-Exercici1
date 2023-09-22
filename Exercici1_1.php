<!DOCTYPE html>
<html>
    <head>
        <title>Exercicis taula</title>
        <style>
            table {
                border-collapse: collapse;
                background-size: cover;
            }
            th, td {
                width: 50px;
                height: 50px;
                text-align: center;
                border: 1px solid black;
                background-color: rgba(192, 192, 192, 0.7);
            }
        </style>
    </head>
    <body>
        <table>
            <?php
//Exercici 1
echo "<tr>";
$N = 7;
for($i=1; $i<=$N; $i++) {
    echo "\t\t<td>$i</td>\n";}
echo " </tr>";

//Exercici 2
echo " <tr>";
$N = 10;
$M = "K";
for($i=0, $j="A"; $i<=$N; $i++, $j++) {
    echo "\t\t<td>$j</td>\n";
}
echo " </tr>";
echo " <tr>";
for($i=0, $j="A"; $i<=$N; $i++, $j++) {
    echo "\t\t<td>$i</td>\n";
}
echo " </tr>";
?>
        </table>
    </body>  
</html>


<table border="1" style="border-width: 0px;">
<?php
//echo " <tr>";
//$N = 7;
//for($i=1; $i<=$N; $i++) {
//    echo "\t\t<td>$i</td>\n";}
//echo " </tr>";
echo " <tr>";
$N = 10;
$M = "K";
for($i=0, $j="A"; $i<=$N; $i++, $j++) {
    echo "\t\t<td>$j</td>\n";
}
echo " </tr>";
echo " <tr>";
for($i=0, $j="A"; $i<=$N; $i++, $j++) {
    echo "\t\t<td>$i</td>\n";
}
echo " </tr>";



echo " <tr>";
for($i=0, $j="A"; $i<=$N; $i++) {
    echo "\t\t<tr><td>$i</td></tr>\n";
}

echo " </tr>";

//echo "Hola, omple amb el teu nom<br>";
//echo '<input type="text" name="nom" />';
?>
</table>
