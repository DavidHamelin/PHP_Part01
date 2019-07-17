<?php
echo '<h1> Php Partie 01 </h1>';
// Ex 01
$name = 'Bernard';
echo '<h2> <mark>Utilisateur</mark> : ' . $name . '</h2>';
// Ex 02
$lastname = ' Goldman ';
$firstname = ' Jean-Jacques ';
$age = 38 ;
echo '<p> Bonjour ' . $firstname . $lastname . ' ! ! ! </p>';
echo '<p> Variable age : ' . $age . ' </p>';
// Ex 03
$km = 1;
echo '<p> Il vous reste ' . $km . ' km à parcourir. </p>';
$km = 3;
echo '<p> Il vous reste ' . $km . ' km à parcourir. </p>';
$km = 125;
echo '<p> Il vous reste ' . $km . ' km à parcourir. </p>';
// Ex 04
$str = 'Je suis une variable de type "string"';
$int = 666;
$float = 99.99;
$bool = true;
echo '<ol>
<li> Variable de type string : ' . $str . '</li>
<li> Variable de type int : ' . $int . '</li>
<li> Variable de type float : ' . $float . '</li>
<li> Variable de type boolean : ' . $bool . '</li>
</ol>';
// Ex 05 
$number = null;
echo '<p> variable null : ' . $number . '</p>';
$number = 1000;
echo '<p> variable anciennement null
 à laquelle on attribut une valeur : ' . $number . '</p>';
// Ex 06 
echo '<p> Bonjour ' . $name . ', comment vas-tu ? </p> ';
// Ex 07
echo '<p> Bonjour ' . $firstname . $lastname . ', tu as ' . $age . ' ans. </p>';
// Ex 08
$addition = 3+4;
$multiplication = 5 * 20;
$division = 45 / 5;
// Avec double quotes, pas besoin de concaténer avec un point
echo "Addition : $addition, Multiplication : $multiplication, Division : $division";
?>

