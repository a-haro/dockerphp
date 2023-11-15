<!DOCTYPE html>
<html>

<body>
    <h1>Exercicis arrays PHP multidimensional</h1>
    <b>Ejercicio 1</b>
    <br><br>
    <?php
    $matriu = array(
        array(2, 5, 3),
        array(4, 6, 7),
        array(5, 7, 8)
    );
    $total = 0;
    $elements = 0;
    for ($i = 0; $i < count($matriu[0]); $i++) {
        $columna_actual = array_column($matriu, $i);
        $suma_actual = array_sum($columna_actual);
        $total += $suma_actual;
        $elements += count($columna_actual);
    }
    print "La suma de los elementos es $total <br>";
    print "Hay $elements elementos";
    ?>
    <br><br>
    <b>Ejercicio 2</b>
    <br><br>
    <?php
    $matriu = array(
        array(2, 5, 3, 1),
        array(4, 6, 7),
        array(5, 7, 8, 3, 1)
    );
    $total = 0;
    $elements = 0;
    for ($i = 0; $i < count($matriu[0]); $i++) {
        $columna_actual = array_column($matriu, $i);
        $suma_actual = array_sum($columna_actual);
        $total += $suma_actual;
        $elements += count($columna_actual);
    }
    print "La suma de los elementos es $total <br>";
    print "Hay $elements elementos";
    ?>
    <br><br>
    <b>Ejercicio 3</b>
    <br><br>
    <?php
    $a = array(
        array(1, 5, 8),
        array(4, 3, 7),
        array(5, 7, 6)
    );

    print max(array_map("max", $a));
    ?>
    <br><br>
    <b>Ejercicio 4</b>
    <br><br>
    <?php
    $count = 0;
    foreach ($a as $fila) {
        if (in_array(2, $fila)) {
            print "Hay un 2";
            $count++;
        }
    }
    if ($count == 0) {
        print "No hay un 2";
    }
    ?>
    <br><br>
    <b>Ejercicio 5</b>
    <br><br>
    <?php
    $a = array(
        array(1, 5, 8),
        array(4, 3, 7),
        array(5, 7, 6)
    );
    $valor_a_buscar = 5;

    foreach ($a as $clave => $subarray) {
        $clave_interna = array_search($valor_a_buscar, $subarray);

        if ($clave_interna != false) {
            echo "El valor $valor_a_buscar está en la fila: $clave de la columna: $clave_interna";
            break;
        }
    }

    if ($clave_interna === false) {
        echo "El valor $valor_a_buscar no está en la matriz bidimensional.";
    }

    ?>
</body>

</html>