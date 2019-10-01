<?php

include "services/pokemon.service.php";
include "utils/constants.php";

function execute() {
    
    $dayOfYear = date('z');
    $response = getPokemonByIdOrName($dayOfYear);
    $image = $response['sprites']['front_default'];
    $name = $response['name'];
    
    require "views/home.php";
}

?>