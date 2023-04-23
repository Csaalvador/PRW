<?php
$notas = explode(" ", fgets(STDIN));
$media = floor(($notas[0] * 2 + $notas[1] * 3) + ($notas[2] * 4) + $notas[3] * 1) / 10;
echo "Media: " . number_format($media, 1, '.', '') . "\n";

if ($media >= 7.0) {
    echo "Aluno aprovado.\n

";
} else if ($media < 5.0) {
    echo "Aluno reprovado.\n";
} else {
    echo "Aluno em exame.\n

";
    $notaExame = (float) fgets(STDIN);
    echo "Nota do exame: " . number_format($notaExame, 1, '.', '') . "\n

";
    $mediaFinal = ($media + $notaExame) / 2;
    if ($mediaFinal >= 5.0) {
        echo "Aluno aprovado.\n

";
    } else {
        echo "Aluno reprovado.\n

";
    }
    echo "Media final: " . number_format($mediaFinal, 1, '.', '') . "\n

";
}
?>


