<?php
$numSenha = "12345671";

$seed = rand();

$numSenha_com_seed =  $numSenha . $seed;

$hash = hash('sha256', $numSenha_com_seed);

echo $seed . "<br>";
echo $numSenha_com_seed . "<br>";
echo $hash;

