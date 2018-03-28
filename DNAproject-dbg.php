<?php

define("DEBUG_LEVEL",5); // 0 is lowest, 5 is highest

function dbg($ln, $str, $lvl, $minIndent=10) {
	if (DEBUG_LEVEL >= $lvl) {
		echo ":".$ln.str_repeat(" ", 4-strlen((string)$ln)+min($lvl,$minIndent)).$str."\n";
	}
}

function dna2rna($in) {
	$dnaToRna = ["T" => "A", "A" => "U", "G" => "C", "C" => "G"];

	dbg(6,"Converting ".$in." to RNA (result=".$dnaToRna[$in].")",4);

	return $dnaToRna[$in];
}

function getCodon($in) {
	$aminoAcids = ["UUU"=>"Phe", "UUC"=>"Phe", "UUA"=>"Leu", "UUG"=>"Leu",
		"UCU"=>"Ser", "UCC"=>"Ser", "UCA"=>"Ser", "UCG"=>"Ser",
		"UAU"=>"Tyr", "UAC"=>"Tyr", "UAA"=>"STOP", "UAG"=>"STOP",
		"UGU"=>"Cys", "UGC"=>"Cys", "UGA"=>"STOP", "UGG"=>"Trp",
		"CUU"=>"Leu", "CUC"=>"Leu", "CUA"=>"Leu", "CUG"=>"Leu",
		"CCU"=>"Pro", "CCC"=>"Pro", "CCA"=>"Pro", "CCG"=>"Pro",
		"CAU"=>"His", "CAC"=>"His", "CAA"=>"Gln", "CAG"=>"Gln",
		"CGU"=>"Arg", "CGC"=>"Arg", "CGA"=>"Arg", "CGG"=>"Arg",
		"AUU"=>"Ile", "AUC"=>"Ile", "AUA"=>"Ile", "AUG"=>"Met",
		"ACU"=>"Thr", "ACC"=>"Thr", "ACA"=>"Thr", "ACG"=>"Thr",
		"AAU"=>"Asn", "AAC"=>"Asn", "AAA"=>"Lys", "AAG"=>"Lys",
		"AGU"=>"Ser", "AGC"=>"Ser", "AGA"=>"Arg", "AGG"=>"Arg",
		"GUU"=>"Val", "GUC"=>"Val", "GUA"=>"Val", "GUG"=>"Val",
		"GCU"=>"Ala", "GCC"=>"Ala", "GCA"=>"Ala", "GCG"=>"Ala",
		"GAU"=>"Asp", "GAC"=>"Asp", "GAA"=>"Glu", "GAG"=>"Glu",
		"GGU"=>"Gly", "GGC"=>"Gly", "GGA"=>"Gly", "GGG"=>"Gly"];

	dbg(27,"Converting ".$in." to corresponding codon (result=".$aminoAcids[$in].")",4);

	return $aminoAcids[$in];
}

dbg(0,"Starting script...",1);

$input = "TACGTACCAATTTACATGATC";
dbg(30,'$input = "TACGTACCAATTTACATGATC";',5,0);
dbg(30,"\$input = ".var_export($input, true),2);

$dnaBases = str_split($input);
dbg(33,'$dnaBases = str_split($input);',5,0);
dbg(33,"Split input into individual characters with str_split",2);
dbg(33,'$dnaBases = '.json_encode($dnaBases),3);
dbg(34,'$rnaBases = array_map("dna2rna", $dnaBases);',5,0);
$rnaBases = array_map("dna2rna", $dnaBases);
dbg(34,"Ran dna2rna function on each item in \$dnaBases with array_map",2);
dbg(34,'$rnaBases = '.json_encode($rnaBases),3);

$rnaTriplets = [];
dbg(36,'$rnaTriplets = [];',5,0);
dbg(36,"Created \$rnaTriplets array",2);
dbg(36,'$rnaTriplets = '.json_encode($rnaTriplets),3);

// combine our array of single letters into clumps of 4
dbg(39,'for ($i=0; $i < count($rnaBases); $i+=3) { ',5,0);
dbg(39,"From 0 to end of \$rnaBases in steps of 3",2);
for ($i=0; $i < count($rnaBases); $i+=3) { 
	dbg(40,'$i = '.$i,4);
	dbg(40,'$rnaTriplets[] = $rnaBases[$i].$rnaBases[$i+1].$rnaBases[$i+2];',5,0);
	$rnaTriplets[] = $rnaBases[$i].$rnaBases[$i+1].$rnaBases[$i+2];
	dbg(40,'$rnaTriplets[] = "'.$rnaBases[$i].$rnaBases[$i+1].$rnaBases[$i+2].'"',4);
	dbg(40,'Added $i and the next 2 characters to $rnaTriplets',3);
	dbg(40,'$rnaTriplets = '.json_encode($rnaTriplets),3);
}

// get the codon for each triplet of bases
dbg(44,'$codons = array_map("getCodon", $rnaTriplets);',5,0);
$codons = array_map("getCodon", $rnaTriplets);
dbg(44,"Ran getCodon function on each item in \$rnaTriplets with array_map",2);
dbg(44,'$codons = '.json_encode($codons),3);

// array which will hold all of the proteins
$rnaStrands = [""];
dbg(47,'$rnaStrands = [""];',5,0);
dbg(47,"Created \$rnaStrands array",2);
dbg(47,'$rnaStrands = '.json_encode($rnaStrands),3);
$proteins = [[]];
dbg(48,'$proteins = [[]];',5,0);
dbg(48,"Created \$proteins array",2);
dbg(48,'$proteins = '.json_encode($proteins),3);
// the protein we're on
$currentProtein = 0;
dbg(50,'$currentProtein = 0;',5,0);
dbg(50,"Initialize \$currentProtein to 0",2);
dbg(50,'$currentProtein = '.json_encode($currentProtein),3);


dbg(52,'for ($i=0; $i < count($codons); $i++) { ',5,0);
dbg(52,"From 0 to end of \$codons in steps of 1",2);
for ($i=0; $i < count($codons); $i++) { 
	dbg(53,'$i = '.$i,3,2);
	// add the codon to the current protein
	dbg(54,'$proteins[$currentProtein][] = $codons[$i];',5,0);
	$proteins[$currentProtein][] = $codons[$i];
	dbg(54,'$proteins[$currentProtein][] = "'.$codons[$i].'"',4);
	dbg(54,'Added $codons[$i] to the current protein ($proteins[$currentProtein])',3);
	dbg(54,'$proteins = '.json_encode($proteins),3);
	
	dbg(55,'$rnaStrands[$currentProtein] .= $rnaTriplets[$i];',5,0);
	$rnaStrands[$currentProtein] .= $rnaTriplets[$i];
	dbg(55,'$rnaStrands[$currentProtein] .= "'.$rnaTriplets[$i].'"',4);
	dbg(55,'Added $rnaTriplets[$i] to the current RNA strand ($rnaStrands[$currentProtein])',3);
	dbg(55,'$rnaStrands = '.json_encode($rnaStrands),3);
	// if the codon is a stop codon, advance to the next protein
	dbg(57,'if ($codons[$i] == "STOP") {',5,0);
	if ($codons[$i] == "STOP") {
		dbg(57,'codon is a stop codon',3);
		dbg(58,'$currentProtein++;',5,0);
		dbg(58,'Increment $currentProtein',3);
		$currentProtein++;
		dbg(58,'$currentProtein = '.$currentProtein,3);
		dbg(59,'$rnaStrands[$currentProtein] = "";',5,0);
		dbg(59,'Add new, blank RNA strand for next protein',3);
		$rnaStrands[$currentProtein] = "";
		dbg(59,'$rnaStrands = '.json_encode($rnaStrands),3);
		dbg(60,'$proteins[$currentProtein] = [];',5,0);
		dbg(60,'Add new, empty protein array for next protein',3);
		$proteins[$currentProtein] = [];
		dbg(60,'$proteins = '.json_encode($proteins),3);
	} else {
		dbg(57,'codon is NOT a stop codon',3);
	}
}
// remove any empty 
dbg(64,'$proteins = '.json_encode($proteins),4);
dbg(64,'Filtering empty proteins from array with array_filter',3);
dbg(64,'$proteins = array_filter($proteins);',5,0);
$proteins = array_filter($proteins);
dbg(64,'$proteins = '.json_encode($proteins),4);
dbg(65,'$rnaStrands = '.json_encode($rnaStrands),4);
dbg(65,'Filtering empty RNA strands from array with array_filter',3);
dbg(65,'$rnaStrands = array_filter($rnaStrands);',5,0);
$rnaStrands = array_filter($rnaStrands);
dbg(65,'$rnaStrands = '.json_encode($rnaStrands),4);

dbg(67,'for ($i=0; $i < count($proteins); $i++) { ',5,0);
dbg(67,"From 0 to end of \$proteins in steps of 1",2);
for ($i=0; $i < count($proteins); $i++) { 
	dbg(67,'$i = '.$i,3,2);
	dbg(68,'Outputting $proteins[$i] with implode',3);
	dbg(68,'echo implode("-", $proteins[$i])."\n";',5,0);
	echo implode("-", $proteins[$i])."\n";
	dbg(69,'$counts = array_count_values(str_split($rnaStrands[$i]));',5,0);
	dbg(69,'Counting the number of each base in the RNA strand using str_split and array_count_values',3);
	$counts = array_count_values(str_split($rnaStrands[$i]));
	dbg(69,'$counts = '.json_encode($counts),4);
	dbg(70,'ksort($counts);',5,0);
	dbg(70,'Sort the array by base',3);
	ksort($counts);
	dbg(70,'$counts = '.json_encode($counts),4);
	dbg(71,'$total = array_sum($counts);',5,0);
	dbg(71,'Get number of bases in strand',3);
	$total = array_sum($counts);
	dbg(71,'$total = '.$total,4);
	dbg(72,'foreach ($counts as $base => $count) {',5,0);
	dbg(72,'For each base => count pair in $counts',3);
	foreach ($counts as $base => $count) {
		dbg(72,'echo $base."  ".number_format(100*$count/$total,2)."%\n";',5,0);
		dbg(72,'Calculate and output percentage',3);
		echo $base."  ".number_format(100*$count/$total,2)."%\n";
	}
}

dbg(77,'echo "\n----Protein Frequencies----\n";',5,0);
dbg(77,'Display protein frequencies banner',3);
echo "\n----Protein Frequencies----\n";
dbg(78,'$counts = array_count_values($codons);',5,0);
dbg(78,'Coutn number of each codon',3);
$counts = array_count_values($codons);
dbg(78,'$counts = '.json_encode($counts),4);
ksort($counts);
dbg(79,'ksort($counts);',5,0);
dbg(79,'Sort the array by base',3);
dbg(79,'$counts = '.json_encode($counts),4);
dbg(80,'$total = array_sum($counts);',5,0);
dbg(80,'Get number of bases in strand',3);
dbg(80,'$total = '.$total,4);
$total = array_sum($counts);
dbg(81,'foreach ($counts as $codon => $count) {',5,0);
dbg(81,'For each codon => count pair in $codons',3);
foreach ($counts as $codon => $count) {
	dbg(82,'echo $codon."  ".number_format(100*$count/$total,2)."%\n";',5,0);
	dbg(82,'Calculate and output percentage',3);
	echo $codon."  ".number_format(100*$count/$total,2)."%\n";
}

dbg(85,'echo "\n\nTotal Proteins: ".count($proteins);',5,0);
dbg(85,'Ouptut final count of proteins',3);
echo "\n\nTotal Proteins: ".count($proteins);

