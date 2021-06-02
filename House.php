<?php
require "Habitat.php";

final class House extends Habitat {

    public static int $taxe = 3;

 // Méthode magique appelée automatiquement à l'instanciation de l'objet
    // Les paramètres sont ceux passés à l'instance de l'objet
    public function __construct(int $size, string $color) {
        parent::__construct($size,$color);
    }
   
    public function welcome() {
        echo "<p>Bienvenue dans votre maison : </p>";
    }
    public static function describe(): string {
        return "This class represents a house, with a size and a colors. authorized color are :". implode(", ", self :: COLORS);
    }

    public static function setTaxe(int $taxe) {
        self :: $taxe = $taxe;
    }

    public function setInstanceTaxe(int $taxe) {
        self :: $taxe = $taxe;
    }

    public static function getTaxe() {
        return self::$taxe;
    }
    public  function getInstanceTaxe() {
        return self::$taxe;
    }

    
    
    
}

?>