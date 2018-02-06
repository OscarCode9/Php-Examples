<?php /*
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

$r = 0;
$br = '<br>';
while ($r <= 100) {
    if ($r % 5 == 0) {
        echo $r;
        echo $br;
    }
    $r++;
}

$ite = 1;
while ($ite <= 10):
    echo $ite;
    $ite++;
endwhile;

$myEdad =8;
$myDinero = 1;
do {
    if($myEdad <10){
        echo $myDinero.'$';
        echo $br;
    }
    $myDinero++;
}while($myDinero < 100);

$myArray = array('Azul', 'Verde', 'Blanco', 'Amarillo');
for ($i=0; $i < count($myArray); $i++) {
    echo $myArray[$i];
    echo $br;
}

for ($i=0; $i <100 ; $i++) { 
    if($i === 5){
			echo 'Lo encontramos';
			break;
    }
}

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


