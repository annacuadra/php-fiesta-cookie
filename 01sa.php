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

    print "<table>";
    print "<table border = 1><tr><th>id</th><th>species</th><th>type1</th><th>type2</th><th>ability</th><th>hp</th><th>attack</th><th>defense</th></tr>";
    foreach ($bourgeoisie as $a){
        print "<tr><th>". $a['id'] . "</th><th>" . $a['species'] . "</th><th>" . $a['type1'] . "</th><th>" . $a['type2'] . "</th><th>" . $a['ability'] . "</th><th>" . $a['hp'] . "</th><th>" . $a['attack'] . "</th><th>" . $a['defense'] . "</th></tr>";
    }
    print "</table><br>";

    echo "The number of elements in the array is ", count($bourgeoisie), ".";
    
    $favorite = $bourgeoisie[5]["species"];
    echo "<br>My favorite specie is ", $favorite, ".<br>";

    echo "<br>All species in the list:";
    foreach ($bourgeoisie as $a){
        echo "<br>", $a['species'];
    }
?>
