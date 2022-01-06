<?php 

/*
3 - Escreva um programa
Escreva um programa que preencha um array com 20 números inteiros sorteados entre 1 e 10. 
Depois informe qual ou quais número(s) não se repetiram.

Exemplo

Array sorteado = [2,5,8,2,8,5,3,9,6,3,4,6,3,1,2,1,2,3,7,1]
Os números que não se repetem são o 4 e 7. 

**/

$array = array();
$aux_array = array();

for($i=1;$i<=20;$i++) {
	$sorteado = rand(1,10);
	$array[] = $sorteado;
	if(isset($aux_array[$sorteado])) {
		$aux_array[$sorteado] = 'n';
	} else {
		$aux_array[$sorteado] = $sorteado;
	}
}

echo "Array sorteado: " . (implode(",", $array)) . "<br />";


foreach($aux_array as $i => $v) {
	if($v=='n') { unset($aux_array[$i]); }
}

echo "Os números que não se repetem são: " . (implode(",", $aux_array)) . "<br />";