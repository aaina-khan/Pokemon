<?php

include "http-client.service.php";

function getAllPokemon() {
    $allPokemonUrl = POKEMON_API_URL . "?limit=964";
    $response = httpClient('GET', $allPokemonUrl, false);
    $json_response = json_decode($response, true);
    
    return $json_response;
}

function getPokemonByIdOrName($id) {

    $pokemon_url = POKEMON_API_URL . $id;
    $response = httpClient('GET', $pokemon_url, false);
    $json_response = json_decode($response, true);
    
    return $json_response;
}




?>