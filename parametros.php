<?php

function imprimirMensagem($linguagem)
{
    return "Vamos programar em {$linguagem}!";
}

echo imprimirMensagem("PHP"), "<br>";
echo imprimirMensagem("C#"), "<br>";
echo imprimirMensagem("Java"), "<br>";

function soma ($numero1, $numero2)
{
    return $numero1 + $numero2;
}

echo soma(3, 7), "<br>";
echo soma(4, 8), "<br>";
