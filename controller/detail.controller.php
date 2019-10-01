<?php

include "services/pokemon.service.php";
include "utils/constants.php";

function execute()
{



    if (isset($_GET['id'])) {
        $id = $_REQUEST['id'];

        $response = getPokemonByIdOrName($id);
        $name = strtoupper($response['name']);
        $height =$response['height'];
        $weight =$response['weight'];
        $i = 1;
        $data = array();
        $moves = array();
        foreach($response['abilities']as $ability ) {
            
          
            $data[] =  strtoupper($ability['ability']['name']);
            if ($i++ == 2) break;
           
          }
          $j = 1;
          foreach($response['moves']as $move ) {
            
          
            $moves[] = strtoupper( $move['move']['name']);
            if ($j++ == 8) break;
           
          }
        
        
    
   
    }
    require "views/details.php";
       
    
}
    

