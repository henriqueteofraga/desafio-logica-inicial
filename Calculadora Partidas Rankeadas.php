<?php
function calculadoraRankeada($vitorias, $derrotas) {
    $saldoVitorias = $vitorias - $derrotas;
    return $saldoVitorias;   
}

$vitorias = readline ("Quantas vitórias você teve?");
$derrotas = readline ("Quantas derrotas você teve?");

$saldoVitorias = calculadoraRankeada($vitorias, $derrotas);

if($saldoVitorias < 10) {  
    $nivel = "Ferro";
} else if($saldoVitorias <= 20){
    $nivel = "Bronze";
} else if ($saldoVitorias <= 50){
    $nivel = "Prata";
} else if($saldoVitorias <= 80){
    $nivel = "Ouro";
} else if($saldoVitorias <= 90){
    $nivel = "Diamante";
} else if($saldoVitorias <= 100){
    $nivel = "Lendário";
} else if($saldoVitorias >100){
    $nivel = "Imortal";
}

echo "O Herói tem saldo de " .$saldoVitorias . " está no nível de ". $nivel;



?>

