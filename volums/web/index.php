<!DOCTYPE html>
<html>
<body>

<h1>Exercicis PHP</h1>

<b>Ejercicio 1</b>
<br><br>
<?php
$x = 2;
$y = 3;
$res = $x + $y;
print "La suma de " . $x . " + " . $y . " es: " . $res;
?>
<br><br>
<b>Ejercicio 2</b>
<br><br>
<?php
print "El radio del círculo es 2<br>";
define ("pi", 3.14);
$r = 2;
$result = $r ** 2 * pi;
print "El resultado es " . $result;
?>
<br><br>
<b>Ejercicio 3</b>
<br><br>
<?php
print "Hace 25º<br>";
$num=25;
$fahr=$num*9/5+35;
print "25º C son $fahr º Fahrenheit";
?>
<br><br>
<b>Ejercicio 4</b>
<br><br>
<?php
$str1 = "Hola mundo";
$str2 = "qué tal";
$strRes = $str1 . $str2;
print strlen($strRes);
?>
<br><br>
<b>Ejercicio 5</b>
<br><br>
<?php
$num1 = 3;
$num2 = 4;
if ($num1 > $num2){
    print "$num1 es mayor a $num2<br>";
} else {
    print "$num2 es mayor a $num1<br>";
}
if ($num1 > $num2){
    print "$num2 es menor a $num1<br>";
} else {
    print "$num1 es menor a $num2<br>";
}
?>
<br><br>
<b>Ejercicio 6</b>
<br><br>
<?php
$entr = 10;
if ($entr < 5){
    $res = $entr * 5;
    print "Total a pagar $res";
} elseif ($entr >= 5 && $entr <= 9){
    $res = $entr * 4;
    print "Total a pagar $res";
} else {
    $res = $entr * 3;
    print "Total a pagar $res";
}
?>
<br><br>
<b>Ejercicio 7</b>
<br><br>
<?php
$edad = 17;
if ($edad < 18){
    print "La persona es menor de edad";
} else {
    print "La persona es adulta";
}
?>
<br><br>
<b>Ejercicio 8</b>
<br><br>
<?php
$num = 51;
if ($num <= 50) {
    for ($i = 0; $i <= 50 ; $i++) {
        if ($i == $num){
            print "El número es $i";
        }
    }
} else {
    for ($i = 51; $i <= 101 ; $i++) {
        if ($i == $num){
            print "El número es $i";
        }
    }
}
?>
<br><br>
<b>Ejercicio 9</b>
<br><br>
<?php
for ($i = 100; $i >= 1 ; $i--) {
    print "$i <br>";
}
?>
<br><br>
<b>Ejercicio 10</b>
<br><br>
<table border=1>
    <tr>
        <?php
        for ($i = 1; $i < 21 ; $i++) {
            if ($i % 2 == 1) {
                print "<td>$i</td>";
            }
        }
        ?>
    </tr>
</table>
<br><br>
<b>Ejercicio 11</b>
<br><br>
<ul>
<?php
$var1 = 3;
$var2 = 25;
for ($i = $var1; $i <= $var2; $i++){
    if ($i % 3 == 0){
        print "<li>$i</li>";
    }
}
?>
</ul>
<br><br>
<b>Ejercicio 12</b>
<br><br>
<table border=1>
    <?php
    $num = 11;
        for ($i = 1; $i <= 10; $i ++){
            $res = $num*$i;
            print "<tr>
                        <td>$num</td>
                        <td>x</td>
                        <td>$i</td>
                        <td>$res</td>
                   </tr>";
        }
    ?>
</table>
<br><br>
<b>Ejercicio 13</b>
<br><br>
<?php
    for ($i = 1; $i <= 10; $i ++){
        print " <table border=1 width=100px height=50px>
                    <tr>
                        <th colspan=4>Tabla del $i</th>
                    </tr>";

        for ($j = 1; $j <= 10; $j++){
            $res = $i*$j;
            print " <tr>
                        <td>$i</td>
                        <td>x</td>
                        <td>$j</td>
                        <td>$res</td>
                    <tr>";
        }
        print "</table><br>";
    }
?>
<br><br>
<b>Ejercicio 14</b>
<br><br>
<?php
$n = 7;
if ($n == 2){
    print "$n es primo";
} elseif ($n == 1){
    print "$n no es primo";
} else {
    for ($i = 2; $i < $n; $i++){
        if ($n % $i == 0){
            print "$n no es primo";
            break;
        } else {
            print "$n es primo";
            break;
        }
    }
}
?>
<br><br>
<b>Ejercicio 15</b>
<br><br>
<ol type="A">
<?php
$n = 30;
for ($i = 2; $i <= $n; $i++){
    $esPrimo = true;
    for ($j = 2; $j < $i; $j++){
        if ($i % $j === 0){
            $esPrimo = false;
            break;
        }
    }
    if ($esPrimo){
        print "<li>$i</li>";
    }
}
?>
</ol>
</body>
</html>