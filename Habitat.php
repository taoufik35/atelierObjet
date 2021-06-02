<?php 
// Classe abstraite qui ne peut être instanciée je ne peut pas avoir juste un objet habitat
 class Habitat {
    const COLORS = ["green", "blue", "white"];
    
    // Ici on déclare un attribut avec une visibilité publique et un type int
    public int $size;
    protected string $color;

    // Méthode magique appelée automatiquement à l'instanciation de l'objet
    // Les paramètres sont ceux passés à l'instance de l'objet
    public function __construct(int $size, string $color) {
     $this->size= $size;
     $this->setColor($color);
    }
 // Setter qui permet de modifier la propriété protégée color et d'effectuer des vérification
 public function setColor(string $color) {
    if(in_array($color, self::COLORS)){
        $this->color = $color;
    }
    
    else {
        throw new Exception("Warning unknown color, green, blue or white only");
    }
}

public function getColor() {
    return $this->color;
}

}


?>