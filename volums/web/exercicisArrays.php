<!DOCTYPE html>
<html>
<body>

<h1>Exercicis arrays PHP bidimensionales</h1>

<b>Ejercicio 1</b>
<br><br>
<?php
$arrayAleatori = array();
$arrLong = 10;
for ($i = 0; $i < $arrLong; $i++){
    $numAleatori = rand(1,20);
    $arrayAleatori[$i] = $numAleatori;
}
$arrLong = count($arrayAleatori);
for ($i = 0; $i < $arrLong; $i++){
    print $arrayAleatori[$i];
    print "<br>";
}
?>
<br><br>
<b>Ejercicio 2</b>
<br><br>
<?php
$maxValor = max($arrayAleatori);
$minValor = min($arrayAleatori);
print("El valor mínimo es $minValor y el máximo es $maxValor");
?>
<br><br>
<b>Ejercicio 3</b>
<br><br>
<?php
$longArr = count($arrayAleatori);
print("El array tiene $longArr elementos");
?>
<br><br>
<b>Ejercicio 4</b>
<br><br>
<?php
$sumaArray = array_sum($arrayAleatori);
$mediaArray = $sumaArray/$longArr;
print("La suma de los elementos es $sumaArray y la media $mediaArray");
?>
<br><br>
<b>Ejercicio 5</b>
<br><br>
<?php
print(implode(",",$arrayAleatori));
?>
<br><br>
<b>Ejercicio 6</b>
<br><br>
<?php
$arrNombres = array("Alfredo","Manuel","Lolito","Ambrosio","Zapatero","Manel","Toni","Joan","Bartolomeu");
sort($arrNombres);
$arrLong = count($arrNombres);
print("Lista ascendente: <br><br>");
for ($i = 0; $i < $arrLong; $i++){
    print $arrNombres[$i];
    print "<br>";
}
print ("<br>");
print("Lista descendente: <br><br>");
rsort($arrNombres);
for ($i = 0; $i < $arrLong; $i++){
    print $arrNombres[$i];
    print "<br>";
}
?>
<br><br>
<b>Ejercicio 7</b>
<br><br>
<table border=1>
<?php
sort($arrNombres);
for ($i = 0; $i < $arrLong; $i++){
    print "<tr>
                <td>$arrNombres[$i]</td>
           </tr>";
}
?>
</table>
<br><br>
<b>Ejercicio 8</b>
<br><br>
<?php
$elementoDonat = 3;
if (in_array($elementoDonat, $arrayAleatori)){
    print "$elementoDonat está en el array";
} else {
    print "$elementoDonat no se encuentra en el array";
}
?>
<br><br>
<b>Ejercicio 9</b>
<br><br>
<?php
$arrayRepetida = array(1,3,5,3,5,2,6,7,8,6,7);
print "<br>Array con números repetidos:<br>";
$arrLong = count($arrayRepetida);
for ($i = 0; $i < $arrLong; $i++){
    print $arrayRepetida[$i];
    print "<br>";
}
$arraySinRepetir = array_unique($arrayRepetida);
print "<br>Array sin repetir:<br>";
$arrLong = count($arrayRepetida);
for ($i = 0; $i < $arrLong; $i++){
    print $arraySinRepetir[$i];
    print "<br>";
}
?>
<br><br>
<b>Ejercicio 10</b>
<br><br>
<?php
$arrayNumsVaris = array(1,-3,0,5,6,-2,0,-1,8);
$numsPositivos = 0;
$numsZeros = 0;
$numsNegativos = 0;
$arrLong = count($arrayNumsVaris);
for ($i = 0; $i < $arrLong; $i++){
    if ($arrayNumsVaris[$i] > 0){
        $numsPositivos++;
    } elseif ($arrayNumsVaris[$i] == 0){
        $numsZeros++;
    }else {
        $numsNegativos++;
    }
}
print "Array: <br>";
for ($i = 0; $i < $arrLong; $i++){
    print $arrayNumsVaris[$i];
    print "<br>";
}
print "Hay $numsPositivos números positivos<br>";
print "Hay $numsNegativos números negativos<br>";
print "Hay $numsZeros ceros<br>";
?>
</body>
</html>