<?php

$myArray = ['auto', 'fiets', 'brommer', 'bus', 'vliegtuig', 'trein'];

// a) Voeg een waarde toe aan het array zonder de originele regel aan te passen
$myArray[] = 'boot';

// b) Druk alle waarden van het array af
foreach ($myArray as $value) {
    echo $value . "\n";
}

?>
<br>
<?php

$myArray = ['auto', 'fiets', 'brommer', 'bus', 'vliegtuig', 'trein'];

// Bepaal het aantal elementen in het array
$aantalElementen = count($myArray);

// Druk het aantal elementen af
echo "1. Het array heeft " . $aantalElementen . " elementen.\n";

// Voeg een element toe aan het array
$myArray[] = 'boot'; 

// Bepaal opnieuw het aantal elementen in het array
$aantalElementen = count($myArray);

// Druk het bijgewerkte aantal elementen af
echo "1. Het array heeft " . $aantalElementen . " elementen.\n";

?>
<br>
<?php
$array = array("foo", "bar", "hello", "world");
echo $array[1];
?>
<br>
<?php  
$array = array(1, 2, 3, 4, 5);
echo $array[3];
?>
<br>

<?php
$cars = array("Volvo", "BMA", "Toyota");
echo $cars[2];
echo count($cars);
?>
<br>

<?php
$array = array(5, 4, 3, 2, 1);
echo $array[0];
?>
<br>
<?php
$cijfersPHP = array(4.4, 4.6, 5.6, 6.1, 7.6, 7.21);
$aantalCijfers = count($cijfersPHP);
$gemiddelde = round(array_sum($cijfersPHP) / $aantalCijfers, 1);

echo "Gemiddelde is: ".$gemiddelde;
?>
