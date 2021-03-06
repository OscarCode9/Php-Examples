<?php
declare(strict_types=1);
 /*
$unBool = TRUE;
$unString = "FOO";
$unStringDos = 'foo';
$unInt = 12;

$ini = "Hola";
$fin = "a todos";
$todo = $ini.$fin;

$floatVar = 1.6;
$string = "Hola";
$arrayColors = array('Azul', 'Morado', 'Negro');
echo $arrayColors[0];

function localVar (){
$local = "Variable local";
return $local;
}

$myString  = localVar();
echo  $myString;
const myConstante  = 'Soy una constante';

echo myConstante ;
for ($i = 1; $i <= 10; $i++) {
echo $i;
}
const ArrayConst = array('Rojo', 'Verde', 'Azul');

for ( $i = 0; $i <count(ArrayConst) ; $i++) {
echo ArrayConst[$i];
}

define( 'Colors', array('Azul', 'Amara'));

echo PHP_INT_MIN;
$numDos = 5;
if ($numDos == 5){
echo 'Este valor es igual a 5';
}*/

//Ciclos

//Ciclo while
$r = 0;
$br = '<br>';
while ($r <= 100) {
    if ($r % 5 == 0) {
        echo $r;
        echo $br;
    }
    $r++;
}

//Otra forma de escribir el ciclo while
$ite = 1;
while ($ite <= 10):
    echo $ite;
    $ite++;
endwhile;

//Ciclo do-while
$myEdad =8;
$myDinero = 1;
do {
    if($myEdad <10){
        echo $myDinero.'$';
        echo $br;
    }
    $myDinero++;
}while($myDinero < 100);

//For y arreglos
$myArray = array('Azul', 'Verde', 'Blanco', 'Amarillo');
for ($i=0; $i < count($myArray); $i++) {
    echo $myArray[$i];
    echo $br;
}

//Romper el ciclo con break
for ($i=0; $i <100 ; $i++) { 
    if($i === 5){
			echo 'Lo encontramos';
			break;
    }
}

//Iterar un erreglo con ciclo for
$people = array(
	array('name' => 'Oscar', 'salt' => 9000),
	array('name' => 'Luis', 'salt' => 4000)
);
for ($i=0; $i < count($people); $i++) { 
	$people[$i]['salt'] = mt_rand(000000, 999999);
}
for ($i=0; $i < count($people); $i++) { 
	echo $people[$i]['salt'];
}
// Funcion recursiva 

function myRecursividad($a){
    if($a<20){
        myRecursividad($a+1);
    }
}
myRecursividad(1);

//Función con argumento tipo Array
function sumarAll ($myArray){
    $sumaArray =0;
    $isArray = is_array($myArray) ? true : false;
    if($isArray){
        for ($i=0; $i <count($myArray) ; $i++) { 
            $sumaArray += $myArray[$i];
        }
        return $sumaArray;
    }else{
        return 0;
    }
}

$myNumbers = array(1,2,3,4,5,6,7,8,9);
$sumAll = sumarAll($myNumbers);
echo $br;
echo $sumAll;

// Función con argumentos predeterminado 

function multiPlicarTodo($a = 5, $b=5){
    $suma = $a * $b;
    return $suma;
}
$sumAll = multiPlicarTodo();
$sumAll = multiPlicarTodo(3,3);
echo $br;
echo $sumAll;

//Tipar funcion 

function sumAllType ($a, $b): float {
    $todo = $a + $b;
    return $todo;
}

var_dump(sumAllType(1,2.7));
function sum($a, $b): int {
    return $a + $b;
}

var_dump(sum(1, 2));
var_dump(sum(1, 5));

class Persona {
    public $Name = 'Oscar';

    public function getName(){
        return $this -> Name;
    }
    public function setName($Name = null){
        $this -> Name = $Name;
    }
    static public function getAll (){
        return 'Medo estatico, no se hace una instancia';
    }
}

echo Persona::getAll();
$name = new Persona();
$name->setName('Raul');

echo $name->getName();

class MyClassTwo {
  public $var = 'myCiberAcademy';
  function __construct(){
    $var = 'dad';
  }
  function DisplayVar($param1, $param2){
    $var = $param2;
    echo $var;
  }
}
class MyClass {
    const constante = 'VALOR CONSTANTE';
    public $var1 = 'Hola'.'mundo';
    public $var3 = 1 + 2;
    public $privateVar =  5+10;
    public $boole = FALSE;
    function __construct(){
      echo 'Que onda'.$this->var3;
      $this->boole  = TRUE;
    }

    public function showConst()
    {
        echo "\n";
        echo self::constante."\n";
        echo $this -> var3;
        echo $this -> privateVar;
        if($this->boole){
          echo 'Que onda'.$this->var1;
        }
        $x = 10;
        $y = 9; 

        $x == $y ? $c = "Es igual " : $c = 'No es igual';
        echo 'Mostrar variable c: '.$c;
    }
}

$newClasswe = new MyClass();
$newClasswe->showConst();
$bar = new MyClass();
#sentencia switch
$ramValor = rand(1, 3);

switch ($ramValor) {
    case 1:
        $ramValor = $ramValor * 10;
        break;
    case 2:
        $ramValor = $ramValor * 20;
        break;
    case 3:
        $ramValor = $ramValor * 40;
        break;
    default:
        $ramValor = rand(40, 60);
        break;
}
echo 'Mi ramValor en un switch: '.$ramValor;



