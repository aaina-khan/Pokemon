<?php

include "services/pokemon.service.php";
include "utils/constants.php";

function execute() {

    

    $response = getAllPokemon();
    $results = $response['results'];

    function filter($value) {
        if (strpos($value['name'], SEARCH_QUERY) !== false) {
            // var_dump($value);
            return $value;
        }        
    }
    
    if (isset($_GET['query'])) {
        $query = $_REQUEST['query'];
        define('SEARCH_QUERY', $query);
        $filteredResults = array_filter($results, "filter");
    } else {
        $filteredResults = $results;
    }
    require "views/search-results.php";

}

?>