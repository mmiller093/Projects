<?php

function dna2rna($in) {
	$dnaToRna = ["T" => "A", "A" => "U", "G" => "C", "C" => "G"];

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

	return $aminoAcids[$in];
}

$input = "TACGTACCAGTATAGACCATAGATAGATAGGGATAGTAAATTTACATGCGAGCTAGATATATAGGTAGTGATAGATTAGGGCTAATCTACATATGCGCCGAGCGCTAGCGATAGAGAGTAGTAGCGATGTAGATTTACATAGCGGGCCGTCTCACATACGCATATTACGACGATTGGATTTACCGCGATACGGTCAGAGTAGGCGCAGGAATCTACTTATATTTATAGCGCCACGGATGTGGTAGACAGATAACT";


$dnaBases = str_split($input);
$rnaBases = array_map("dna2rna", $dnaBases);

$rnaTriplets = [];

// combine our array of single letters into clumps of 4
for ($i=0; $i < count($rnaBases); $i+=3) { 
	$rnaTriplets[] = $rnaBases[$i].$rnaBases[$i+1].$rnaBases[$i+2];
}

// get the codon for each triplet of bases
$codons = array_map("getCodon", $rnaTriplets);

// array which will hold all of the proteins
$rnaStrands = [""];
$proteins = [[]];
// the protein we're on
$currentProtein = 0;

for ($i=0; $i < count($codons); $i++) { 
	// add the codon to the current protein
	$proteins[$currentProtein][] = $codons[$i];
	$rnaStrands[$currentProtein] .= $rnaTriplets[$i];
	// if the codon is a stop codon, advance to the next protein
	if ($codons[$i] == "STOP") {
		$currentProtein++;
		$rnaStrands[$currentProtein] = "";
		$proteins[$currentProtein] = [];
	}
}
// remove any empty 
$proteins = array_filter($proteins);
$rnaStrands = array_filter($rnaStrands);

for ($i=0; $i < count($proteins); $i++) { 
	echo implode("-", $proteins[$i])."\n";
	$counts = array_count_values(str_split($rnaStrands[$i]));
	ksort($counts);
	$total = array_sum($counts);
	foreach ($counts as $base => $count) {
		echo $base."  ".number_format(100*$count/$total,2)."%\n";
	}
}

echo "\n----Protein Frequencies----\n";
$counts = array_count_values($codons);
ksort($counts);
$total = array_sum($counts);
foreach ($counts as $codon => $count) {
	echo $codon."  ".number_format(100*$count/$total,2)."%\n";
}

echo "\n\nTotal Proteins: ".count($proteins);

