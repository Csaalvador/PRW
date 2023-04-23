<?php

fscanf(STDIN, "Dia %d", $diaInicio);
fscanf(STDIN, "%d : %d : %d", $horaInicio, $minutoInicio, $segundoInicio);
fscanf(STDIN, "Dia %d", $diaFim);
fscanf(STDIN, "%d : %d : %d", $horaFim, $minutoFim, $segundoFim);

$tempoInicio = $segundoInicio + $minutoInicio * 60 + $horaInicio * 60 * 60 + $diaInicio * 24 * 60 * 60;
$tempoFim = $segundoFim + $minutoFim * 60 + $horaFim * 60 * 60 + $diaFim * 24 * 60 * 60;

$diferenca = $tempoFim - $tempoInicio;

$dias = intval($diferenca / (24 * 60 * 60));
$diferenca = $diferenca % (24 * 60 * 60);
$horas = intval($diferenca / (60 * 60));
$diferenca = $diferenca % (60 * 60);
$minutos = intval($diferenca / 60);
$segundos = $diferenca % 60;

printf("%d dia(s)\n", $dias);
printf("%d hora(s)\n", $horas);
printf("%d minuto(s)\n", $minutos);
printf("%d segundo(s)\n", $segundos);

?>
