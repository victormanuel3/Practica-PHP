<?php
//1. Genere un número aleatorio entre el 1 y el 6 para simular la tirada de un dado. 
echo "1. Genere un número aleatorio entre el 1 y el 6 para simular la tirada de un dado.<br><br>";

$aleatorio = rand(1, 6);
echo "El valor del dado es: $aleatorio<br>";

//2. Muestra en números y letras el valor obtenido y valor que tendrá el dado en la cara opuesta. (1:5, 2:6, 3:4) 
echo "<br>2. Muestra en números y letras el valor obtenido y valor que tendrá el dado en la cara opuesta. (1:5, 2:6, 3:4)<br><br>";

switch ($aleatorio) {
    case 1: echo "Uno <br> Su cara opuesta es 5";
        break;
    case 2: echo "Dos <br> Su cara opuesta es 6";
        break;
    case 3: echo "Tres <br> Su cara opuesta es 4";
        break;
    case 4: echo "Cuatro <br> Su cara opuesta es 3";
        break;
    case 5: echo "Cinco <br> Su cara opuesta es 1";
        break;
    case 6: echo "Seis <br> Su cara opuesta es 2";
        break;
}
