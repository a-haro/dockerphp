<!DOCTYPE html>
<html>

<body>
    <?php
    function carrega_fitxer($jsonString, &$arrayAsociatiu)
    {
        $arrayAsociatiu = json_decode($jsonString, true);
        // Verifica si hay errores durante la decodificación
        if (json_last_error() !== JSON_ERROR_NONE) {
            die('Error  JSON: ' . json_last_error_msg());
        }
    }
    function tablaArray($arrayAsociativo)
    {
        $head = array();
        print "<table border=1>";
        foreach ($arrayAsociativo as $fila) {
            print "<tr>";
            foreach ($fila as $clave => $valor) {
                if (!in_array($clave, $head)) {
                    print "<th>$clave</th>";
                    $head[] = $clave;
                }
            }
            print "</tr>";

            print "<tr>";
            foreach ($head as $clave) {
                print "<td>{$fila[$clave]}</td>";
            }
            print "</tr>";
        }
        print "</table>";
    }
    function recup_noms($array, &$arrayNoms)
    {
        $arrayNoms = array_column($array, "nom");
    }
    function is_name($array, $name)
    {
        foreach ($array as $fila) {
            foreach ($fila as $clave => $valor) {
                if ($name == $valor){
                    return true;
                } else {
                    return false;
                }
        }
    }
    }

    $jsonString = file_get_contents('prova_json.json');
    $arrayAsociatiu = array();
    $noms = array();
    $name = "Toni";
    carrega_fitxer($jsonString, $arrayAsociatiu);
    print_r($arrayAsociatiu);
    tablaArray($arrayAsociatiu);
    is_name($arrayAsociatiu, $name);
    print_r($noms);
    if (is_name ($array, $name)) {
        print "true";
    } else {
        print "false";
    }
    recup_noms($arrayAsociatiu, $noms);
    ?>
</body>

</html>