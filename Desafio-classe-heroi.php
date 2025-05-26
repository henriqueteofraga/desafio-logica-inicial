 <?php
/* ## Objetivo

Crie uma variável para armazenar o nome e a quantidade de experiência (XP) de um herói, depois utilize uma estrutura de decisão para apresentar alguma das mensagens abaixo:

Se XP for menor do que 1.000 = Ferro
Se XP for entre 1.001 e 2.000 = Bronze
Se XP for entre 2.001 e 5.000 = Prata
Se XP for entre 5.001 e 7.000 = Ouro
Se XP for entre 7.001 e 8.000 = Platina
Se XP for entre 8.001 e 9.000 = Ascendente
Se XP for entre 9.001 e 10.000= Imortal
Se XP for maior ou igual a 10.001 = Radiante

## Saída

Ao final deve se exibir uma mensagem:
"O Herói de nome **{nome}** está no nível de **{nivel}**" */


 $nome = readline("Digite o nome do seu Heroi:");
 $xp = readline("Quantos pontos de XP seu Heroi tem?");
 
 echo "Bem vindo $nome, vamos verificar quantos pontos de XP você tem.\n";
 echo "Pelos nosso registro, você tem $xp Pontos de Experiencia.\n";
 if ($xp <1000){
    echo "O Herói de nome $nome está no Nível de Ferro";
 } else if($xp <=2000){
    echo "O Herói de nome $nome está no Nível de Bronze";
 } else if($xp <= 5000){
    echo "O Herói de nome $nome está no Nível de Prata";
 } else if($xp <= 7000){
    echo "O Herói de nome $nome está no Nível de Ouro";
 } else if($xp <= 8000){
    echo "O Herói de nome $nome está no Nível de Platina";
 } else if($xp <= 9000){
    echo "O Herói de nome $nome está no Nível de Ascendente";
 } else if($xp <= 10000){
    echo "O Herói de nome $nome está no Nível de Imortal";
 } else if($xp > 10000){
    echo "O Herói de nome $nome está no Nível de Radiante";
 }

