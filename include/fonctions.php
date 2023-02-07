<?php
//function calcul($prixHT, $tva)
//{
//  $prixHT = 34;
//$tva = 10;
//$prixTTC = $prixHT + ($prixHT * $tva) / 100;
//return $prixTTC;
//}
//echo calcul(34,10);
?>
<?php
function calcul($anneeDeNaissance, $anneeEnCours)
{
    $anneeDeNaissance = 1986;
    $anneeEnCours = date("Y");
    $age = $anneeEnCours - $anneeDeNaissance;

    return $age;
}
echo calcul(1986, "Y");
?>

<?php
//function calcul($a, $b = 5) $b- constante
//{
// $c = $a + $b;
//return $c;

//}
//echo calcul(23);

// define('xxx', 10);
// echo 'La valeur de xxx est de '.xxx;