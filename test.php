<?php

include "process.php";

// $partenaire = find_couple("soumaya");

// print("Votre partenaire is :$partenaire<br>");
$v="tanger";
//$output = `swipl -s ville.pl -g "ville($v)."   halt. `;

$output = `swipl -s possible_avoir_enfants.pl -g "possibleavoirenfants(ihab,soumaya)."   `;

var_dump($output);
