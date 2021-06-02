<?php
require "House.php";
// On instancie des objets de classe House
$house = new House(150, "blue");
$house2 = new House(120, "green");
$habitat = new Habitat(120, "green");
    var_dump($habitat);

echo "<p>" . House::describe() . "</p>";

echo "<p>Taxe rate " . House::getTaxe() . "</p>";

// Ici on fait appel à l'attribut size (attention sans le dollar)
// echo "<p>La maison fait en mètres carrés : " . $house->size . "</p>";
// Ici on fait appel au getter car l'attribut est protégé
echo "<p>La maison est de couleur : " . $house->getColor() . "</p>";
$house->welcome();

echo "<p> Vous allez payer :" . $house->getInstanceTaxe()."</p>";

echo "<p>La maison 2 fait en mètres carrés : " . $house2->size . "</p>";
echo "<p>La maison 2 est de couleur : " . $house2->getColor() . "</p>";
$house2->welcome();
echo "<p> Vous allez payer :" . $house2->getInstanceTaxe()."</p>";

// House::setTaxe(5);
$house->setInstanceTaxe(5);
echo "<p>Taxe rate " . House::getTaxe() . "</p>";

// Ici on fait appel à l'attribut size (attention sans le dollar)
// echo "<p>La maison fait en mètres carrés : " . $house->size . "</p>";
// Ici on fait appel au getter car l'attribut est protégé
echo "<p>La maison est de couleur : " . $house->getColor() . "</p>";
$house->welcome();

echo "<p> Vous allez payer :" . $house->getInstanceTaxe()."</p>";

echo "<p>La maison 2 fait en mètres carrés : " . $house2->size . "</p>";
echo "<p>La maison 2 est de couleur : " . $house2->getColor() . "</p>";
$house2->welcome();
echo "<p> Vous allez payer :" . $house2->getInstanceTaxe()."</p>";

House::setTaxe(5);
echo "<p>Taxe rate " . House::getTaxe() . "</p>";

?>