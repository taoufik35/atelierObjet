<?php

require "personne.php";

$data = [

    "firstname" => "Paul",

    "lastname" => "Dupont",

    "age" => 45

];

$person= new Person($data);

var_dump($person);


?>