<?php
//echo es una función para imprimir en pantalla una estructura
/*
Esto es un comentario
de más de una linea
comentarios
*/
echo "Mi nombre es Elsa Cordova";
/*variables: Forma de almacenar un dato en la memoria de la computadora
  hay datos variables y datos constantes*/

//EJEMPLO DE CONSTANTE:
const NOMBRE = "Javier";
/*cada vez que haga referencia a esta constante su valor siempre
sera javier*/

//EJEMPLO DE VARIABLE:
$mainAddress = "Calle Baltazar";

// TIPOS DE DATOS

// Booleans:
/* tienen dos tipos de valores true o false, no van enre comillas
   dobles*/
            
$variableBooleana = FALSE;
$isTrue = TRUE;
echo gettype($isTrue);
echo gettype($variableBooleana); /*la funcion gettype permite saber
el tipo de variable*/

// String (o cadenas de texto):
$nombreCompleto = "Elsa Córdova Pacheco";
echo gettype($nombreCompleto);

$apellidoMaterno = 'Pacheco';
echo gettype($apellidoMaterno);

// Numeric: no se declaran con comillas dobles
// Integer:
$numeroEntero = 10;
// Double:
$numeroDecimalConUnDigito = 10.5;
$numeroDecimalConDosDigito = 10.54;
$numeroDecimalConTresDigito = 10.543;

// Arrays:
/* Es una estructura de datos en la cual se puede almacenr
   mas de un valor*/

$frutas = ['manzana','pera','plátano','uva'];
/* si quieres acceder a los elementos de un array hay que
referenciar el indice del elemento que siempre empiezan de 0*/
echo $frutas[0];//este indica manzana
echo $frutas[3];//para imprimir el 4to elemento

$manzana = $frutas[3]; // en este caso pasaria a ser un string, ya no un array

$comidas = [  /*de esta forma se puede especificar el indice q le corrsponda
              dentro de una array */
  0 =>'Papa a la huancaina',
  "1" => 'Lomo saltado',
  1.5 => "Sopa seca",
  false => "Cau cau",
// mas abajo se muestra formas de imprimir un array
];

// NULO:
$variableNula = NULL;

//OPERADORES ARITMETICOS:
$primerNumero = 3;
$segundoNumero = 5;

$suma = $primerNumero + $segundoNumero;
$resta = $primerNumero - $segundoNumero;
$producto = $primerNumero * $segundoNumero;
$cociente = $primerNumero / $segundoNumero;
$modulo = $primerNumero % $segundoNumero; //modulo es el residuo dela division de 3 entre 5
$potencia = $primerNumero ** $segundoNumero;// 3 a la 5ta

//OPERADORES DE ASIGNACION:
$tercerNumero = 6;
echo $tercerNumero;
$tercerNumero +=5;/*esto significa que va a incremetar en 5 el valor de la variable
                  $tercerNumero*/
echo $tercerNumero;
$tercerNumero -=1;//decremento
echo $tercerNumero;


$saludo = "Hola " . "Buenas noches";
$saludo.= ", Buenas noches";
echo $saludo;


                 

?>
<html>
    <body>
    <h1>Estoy en la clase de programacion php</h1>

    <p><?php echo gettype($apellidoMaterno); ?></p>
    <p><?php echo gettype($numeroEntero); ?></p>
    <p><?php echo gettype($numeroDecimalConUnDigito); ?></p>
    <p><?php echo gettype($frutas); ?></p>
    <p><?php echo gettype($manzana); ?></p>
    <p><?php echo gettype($comidas); ?></p>
    <?php var_dump($frutas); ?>
    <?php print_r($frutas); ?>
    <p><?php echo gettype($variableNula); ?></p>
    <p><?php echo $suma; ?></p>
    <p><?php echo $resta; ?></p>
    <p><?php echo $producto; ?></p>
    <p><?php echo $cociente; ?></p>
    <p><?php echo $modulo; ?></p>
    <p><?php echo $potencia; ?></p>
    </body>
</html>
