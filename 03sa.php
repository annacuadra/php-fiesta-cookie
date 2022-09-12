<?php
    $bourgeoisie = array(
        array("id" => 1 , "species" => 'Bulbasaur' , "type1" => 'Grass' , "type2" => 'Poison' , "ability" => 'Overgrow', "hp" => 45, "attack" => 49, "defense" => 49),
        array("id" => 2 , "species" => 'Ivysaur ' , "type1" => 'Grass' , "type2" => 'Poison' , "ability" => 'Overgrow', "hp" => 60, "attack" => 62, "defense" => 63),
        array("id" => 3 , "species" => 'Venasaur' , "type1" => 'Grass' , "type2" => 'Poison' , "ability" => 'Overgrow', "hp" => 80, "attack" => 82, "defense" => 83),
        array("id" => 4 , "species" => 'Charmander' , "type1" => 'Fire' , "type2" => 'N/A' , "ability" => 'Blaze   ', "hp" => 39, "attack" => 52, "defense" => 43),
        array("id" => 5 , "species" => 'Charmeleon' , "type1" => 'Fire' , "type2" => 'N/A' , "ability" => 'Blaze   ', "hp" => 58, "attack" => 64, "defense" => 58),
        array("id" => 6 , "species" => 'Charizard' , "type1" => 'Fire', "type2" => 'Flying' , "ability" => 'Blaze   ' , "hp" => 78, "attack" => 84, "defense" => 78),
        array("id" => 7 , "species" => 'Squirtle' , "type1" => 'Water' , "type2" => 'N/A' , "ability" => 'Torrent ', "hp" => 44, "attack" => 48, "defense" => 65),
        array("id" => 8 , "species" => 'Wartortle' , "type1" => 'Water' , "type2" => 'N/A' , "ability" => 'Torrent ', "hp" => 59, "attack" => 63, "defense" => 80),
        array("id" => 9 , "species" => 'Blastoise' , "type1" => 'Water' , "type2" => 'N/A' , "ability" => 'Torrent ', "hp" => 79, "attack" => 83, "defense" => 100),
        array("id" => 10 , "species" => 'Caterpie' , "type1" => 'Bug' , "type2" => 'N/A' , "ability" => 'Shield Dust', "hp" => 50, "attack" => 20, "defense" => 55)
    );

    function pokemon_defense($bourgeoisie, $limit_number){
        for ($a=0; $a < count($bourgeoisie); $a++){
            if ($bourgeoisie[$a]['defense'] >= $limit_number){
                echo "<br>", $bourgeoisie[$a]['species'];
            }    
        }
    }
    pokemon_defense($bourgeoisie, 65);
?>