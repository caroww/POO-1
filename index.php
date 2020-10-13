<?php
require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle();
$cars = new Car ('blue',5,'diesel');
//$cars = new Car ();

var_dump($cars);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';




echo "<br>";
echo "<br>";


//Moving car
echo $cars->forward();
echo '<br> Vitesse de la voiture : ' . $cars->getCurrentSpeed() . ' km/h' . '<br>';
echo $cars->brake();
echo '<br> Vitesse de la voiture : ' . $cars->getCurrentSpeed() . ' km/h' . '<br>';
echo $cars->start();
echo '<br> Tu roules à ' . $cars->getCurrentSpeed() . ' km/h' . '<br>';
echo $cars->start();
