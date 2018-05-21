<?php
/**
 * Emporio Commerce - Ejercicio 1
 * Autor: Sergio De Pietro
 * Fecha: 19/05/2018
 */


/*
function isBalanced(string) {
  const openers = [ '(', '[', '{' ];
  const closers = [ ')', ']', '}' ];
  let stack = [];

  const arr = string.split('');

  for(const char of arr) {
    if(openers.indexOf(char) >= 0) stack.push(char);

    if(closers.indexOf(char) >= 0) {
      const last = stack.pop();
      if(closers.indexOf(char) !== openers.indexOf(last)) return false;
    }
  }

  return stack.length === 0;
}




 */


function checkParenthesis($string)
{
    $openers = ["("];
    $closers = [")"];
    $stack = [];
    $arrayChecker = str_split($string);
    foreach ($arrayChecker as $char) {
        if (in_array($char, $openers) && array_search($char, $openers) >= 0) {
            array_push($stack, $char);
        }
        if (in_array($char, $closers) && array_search($char, $closers) >= 0) {
            $last = array_pop($stack);
            if (array_search($char, $closers) !== array_search($last, $openers)) {
                return false;
            }
        }
    }
    return count($stack) === 0;
}

$arrayTest = [
    "texto (de prueba) para probar",
    "texto (de prueba para probar",
    "Este (texto (de prueba) (sirve) para probar (si)) anda",
    "Este (texto (de prueba (sirve) para (probar (si) anda)",
];


foreach ($arrayTest as $test) {
    echo $test . " ";
    echo checkParenthesis($test) ? "CORRECTO" : "INCORRECTO";
    echo "<br>";
}

