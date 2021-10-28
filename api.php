<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json");
    $_DATA = (file_get_contents("php://input")) ? json_decode(file_get_contents("php://input"), true) : ["JS_numero1"];
    $JS_numero1 = (integer) 0;
    $JS_numero2 = (integer) 0;
    extract($_DATA, EXTR_PREFIX_ALL, "JS");
    

    $IGUALDAD = (string) ($JS_numero1 == $JS_numero2) ? "TRUE" : "FALSE";
    $IDENTICO = (string) ($JS_numero1 === $JS_numero2) ? "TRUE" : "FALSE";
    $DIFERENTE = (string) ($JS_numero1 != $JS_numero2) ? "TRUE" : "FALSE";
    $NO_IDENTICO = (string) ($JS_numero1 !== $JS_numero2) ? "TRUE" : "FALSE";
    $_DIFERENTE = (string) ($JS_numero1 <> $JS_numero2) ? "TRUE" : "FALSE";
    $MAYOR = (string) ($JS_numero1 > $JS_numero2) ? "TRUE" : "FALSE";
    $MAYOR_IGUAL = (string) ($JS_numero1 >= $JS_numero2) ? "TRUE" : "FALSE";
    $MENOR = (string) ($JS_numero1 < $JS_numero2) ? "TRUE" : "FALSE";
    $MENOR_IGUAL = (string) ($JS_numero1 <= $JS_numero2) ? "TRUE" : "FALSE";


    echo <<<JSON
[
    {
        "Operador": "IGUALDAD '==' ",
        "Numero1" : $JS_numero1,
        "Numero2" : $JS_numero2,
        "Resultado": "$JS_numero1 == $JS_numero2: $IGUALDAD"
    },
    {
        "Operador": "IDENTICO '===' ",
        "Numero1" : $JS_numero1,
        "Numero2" : $JS_numero2,
        "Resultado": "$JS_numero1 - ${!${''} = gettype($JS_numero1)} === $JS_numero2 - ${!${''} = gettype($JS_numero2)}: $IDENTICO"
    },
    {
        "Operador": "DIFERENTE '!=' ",
        "Numero1" : $JS_numero1,
        "Numero2" : $JS_numero2,
        "Resultado": "$JS_numero1 != $JS_numero2: $DIFERENTE"
    },
    {
        "Operador": "NO IDENTICO '!==' ",
        "Numero1" : $JS_numero1,
        "Numero2" : $JS_numero2,
        "Resultado": "$JS_numero1 - ${!${''} = gettype($JS_numero1)} !== $JS_numero2 - ${!${''} = gettype($JS_numero2)}: $NO_IDENTICO"
    },
    {
        "Operador": "DIFERENTE '<>' ",
        "Numero1" : $JS_numero1,
        "Numero2" : $JS_numero2,
        "Resultado": "$JS_numero1 <> $JS_numero2: $_DIFERENTE"
    },
    {
        "Operador": "MAYOR '>' ",
        "Numero1" : $JS_numero1,
        "Numero2" : $JS_numero2,
        "Resultado": "$JS_numero1 > $JS_numero2: $MAYOR"
    },
    {
        "Operador": "MAYOR IGUAL '>=' ",
        "Numero1" : $JS_numero1,
        "Numero2" : $JS_numero2,
        "Resultado": "$JS_numero1 >= $JS_numero2: $MAYOR_IGUAL"
    },
    {
        "Operador": "MENOR '<' ",
        "Numero1" : $JS_numero1,
        "Numero2" : $JS_numero2,
        "Resultado": "$JS_numero1 < $JS_numero2: $MENOR"
    },
    {
        "Operador": "MENOR IGUAL '<=' ",
        "Numero1" : $JS_numero1,
        "Numero2" : $JS_numero2,
        "Resultado": "$JS_numero1 <= $JS_numero2: $MENOR_IGUAL"
    },
    {
        "SERVIDOR": "${!${''} = $_SERVER['HTTP_HOST']}"
    }
]
JSON;





?>