<?php

include "services/pokemon.service.php";
include "utils/constants.php";

function execute() {

    $response = getAllPokemon();
    require "views/error.php";

}

?>