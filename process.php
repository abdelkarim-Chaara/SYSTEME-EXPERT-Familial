<?php

 
//system('swipl -s test.pl -g "test." -t halt.');

function find_type ($Nom,$Q1,$Q2,$Q3,$Q4,$Q5,$Q6,$Q7,$Q8,$Q9,$Q10,$Q11,$Q12,$Q13,$Q14,$Q15,$Q16,$Q17,$Q18,$Q19,$Q20,$Q21,$Q22,$Q23,$Q24,$Q25,$Q26,$Q27,$Q28,$Q29,$Q30,$Q31,$Q32,$Q33,$Q34,$Q35,$Q36)
 {

$output = `swipl -s type_personnalite.pl -g "calcul_type($Nom,$Q1,$Q2,$Q3,$Q4,$Q5,$Q6,$Q7,$Q8,$Q9,$Q10,$Q11,$Q12,$Q13,$Q14,$Q15,$Q16,$Q17,$Q18,$Q19,$Q20,$Q21,$Q22,$Q23,$Q24,$Q25,$Q26,$Q27,$Q28,$Q29,$Q30,$Q31,$Q32,$Q33,$Q34,$Q35,$Q36)." -t halt.`;
return ($output);

}

function find_couple($Nom) {

$output = `swipl -s type_personnalite.pl -g "trouver_partenaire($Nom)."  -t halt.  `;

return $output;
}

function save_data($psy,$commerce,$blood,$adoption,$credit,$revenue){

$file_kids = fopen("possible_avoir_enfants.pl", "a+") or die("Unable to open file!");
$file_finance = fopen("situation_financiere.pl", "a+") or die("Unable to open file!");
$file_psy = fopen("aptitude_psychologique.pl", "a+") or die("Unable to open file!");

	if(!empty($psy)) {

fprintf($file_psy, "$psy\n" );

	}

		if(!empty($commerce)) {

fprintf($file_finance, "$commerce\n" );

	}

	if(!empty($credit)) {

fprintf($file_finance, "$credit\n" );

	}

	if(!empty($revenue)) {

fprintf($file_finance, "$revenue\n" );

	}

if(!empty($blood)) {

fprintf($file_kids, "$blood\n" );

	}

	if(!empty($adoption)) {

fprintf($file_kids, "$adoption\n" );

	}



	fclose($file_finance);
	fclose($file_psy);
	fclose($file_kids);
}

function checkville($ville){

$output = `swipl -s ville.pl -g "ville($ville)."   halt. `;
return $output;

}

function check_apte($id,$idfemme){

$output = `swipl -s aptitude_psychologique.pl -g "apte($id,$idfemme)." `;

return $output;

}


function check_finance($id,$idfemme){

$output = `swipl -s situation_financiere.pl -g "stable($id,$idfemme)." `;
return $output;

}

function check_possible_phy($id,$idfemme){

$output = `swipl -s possible_avoir_enfants.pl -g "possibleavoirenfants($id,$idfemme)."  `;

return $output;

}

?>