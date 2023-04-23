<?php

//COMO FUNCIONA UMA FUNCTION

function ola(){
    echo "Olá Mundo!";
}

ola();

//COMO FUNCIONA UMA FUNCTION COM PARAMETRO

function ola2($texto){
    echo "Olá $texto!";
}

ola2("Mundo");

//COMO FUNCIONA UMA FUNCTION COM PARAMETRO E RETORNO

function ola3($texto){
    return "Olá $texto!";
}

echo ola3("Mundo");

//COMO FUNCIONA UMA FUNCTION COM PARAMETRO E RETORNO E COM VALOR PADRÃO

function ola4($texto = "Mundo"){
    return "Olá $texto!";
}

echo ola4();

//COMO FUNCIONA UMA FUNCTION COM PARAMETRO E RETORNO E COM VALOR PADRÃO E COM PARAMETRO OPCIONAL

function ola5($texto = "Mundo", $periodo = "Bom dia!"){
    return "Olá $texto! $periodo";
}

echo ola5();

//COMO FUNCIONA UMA FUNCTION COM PARAMETRO E RETORNO E COM VALOR PADRÃO E COM PARAMETRO OPCIONAL E COM PARAMETRO OPCIONAL COM VALOR PADRÃO

function ola6($texto = "Mundo", $periodo = "Bom dia!"){
    return "Olá $texto! $periodo";
}

echo ola6("Glaucio", "Boa noite!");
