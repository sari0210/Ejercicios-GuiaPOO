<?php
/**Ejercicio 1:
Plantear una clase Calculadora que contenga 4 métodos (sumar, resta, multiplicación, división), 
estos métodos recibirán 2 parámetros.
 */



 class Calculadora{
    public $numero1;
    public $numero2;

    
    //suma
   function sumar ($numero1, $numero2){
    $resultado = $numero1 + $numero2;

    echo "La suma es igual a:".$resultado."<br>";

   }
   //resta
   function restar ($numero1, $numero2){
    $resultado = $numero1 - $numero2;

    echo "La resta es igual a:".$resultado."<br>";

   }
    //multiplicacion
    function multiplicacion ($numero1, $numero2){
        $resultado = $numero1 * $numero2;

        echo "La multiplicacion es igual a:".$resultado."<br>";
    
       }
        //division
   function division ($numero1, $numero2){
    $resultado = $numero1 / $numero2;

    echo "La division es igual a:".$resultado."<br>";

   }

}

$objeto = new Calculadora();
echo $objeto->sumar(10,20);
echo "<br>";
echo $objeto->restar(20,14);
echo "<br>";
echo $objeto->multiplicacion(4,20);
echo "<br>";
echo $objeto->division(400,20);

?>