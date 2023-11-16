<!DOCTYPE html>
<html>

<body>
    <h1>Exercicis arrays PHP associatives</h1>
    <b>Ejercicio 1</b>
    <br><br>
    <?php
        $stockFruites = ["poma" => 9, 
                        "taronja" => 25, 
                        "llimona" => 5, 
                        "pera" => 8, 
                        "plàtan" => 12, 
                        "pinya" => 3, 
                        "meló" => 4, 
                        "sindria" => 5, 
                        "albercoc" => 7, 
                        "maduixa" => 14
        ];
    ?>
    <br><br>
    <b>Ejercicio 2</b>
    <br><br>
    <?php
        foreach ($stockFruites as $clau => $stock){
            echo $clau.": ".$stock."<br>";
        }
    ?>
    <br><br>
    <b>Ejercicio 3</b>
    <br><br>
    <?php
        $stockFruites["mangos"] = 10;
    ?>
    <br><br>
    <b>Ejercicio 4</b>
    <br><br>
    <?php
        foreach ($stockFruites as &$stock){
            $stock *= 2;
        }
        foreach ($stockFruites as $clau => $stock){
            echo $clau.": ".$stock."<br>";
        }
     ?>
    <br><br>
    <b>Ejercicio 5</b>
    <br><br>
    <?php
        echo "<b>Ascendent:</b> <br>";
        ksort($stockFruites);
        foreach ($stockFruites as $clau => $stock){
            echo $clau.": ".$stock."<br>";
        }
        echo "<br> <b>Descendent:</b> <br>";
        krsort($stockFruites);
        foreach ($stockFruites as $clau => $stock){
            echo $clau.": ".$stock."<br>";
        }
     ?>
    <br><br>
    <b>Ejercicio 6</b>
    <br><br>
    <?php
        echo "<b>Ascendent:</b> <br>";
        asort($stockFruites);
        foreach ($stockFruites as $clau => $stock){
            echo $clau.": ".$stock."<br>";
        }
        echo "<br> <b>Descendent:</b> <br>";
        arsort($stockFruites);
        foreach ($stockFruites as $clau => $stock){
            echo $clau.": ".$stock."<br>";
        }
     ?>
    <br><br>
    <b>Ejercicio 7</b>
    <br><br>
    <?php
        $total = array_sum($stockFruites);
        print "El total del stock es: " . $total;
     ?>
    <br><br>
    <b>Ejercicio 8</b>
    <br><br>
    <?php
        unset($stockFruites["pera"]);
        foreach ($stockFruites as $clau => $stock){
            echo $clau.": ".$stock."<br>";
        }
     ?>
    <br><br>
    <b>Ejercicio 9</b>
    <br><br>
    <?php
        $fruitesFuncions = ["mango" => 10,
                            "meló" => 4,
                            "maduixa" => 14,
                            "kiwi" => 6        
        ];
        $stockFruites = ["poma" => 9, 
                        "taronja" => 25, 
                        "llimona" => 5, 
                        "pera" => 8, 
                        "plàtan" => 12, 
                        "pinya" => 3, 
                        "meló" => 4, 
                        "sindria" => 5, 
                        "albercoc" => 7, 
                        "maduixa" => 14
        ];
        print_r (array_diff($stockFruites, $fruitesFuncions));
        echo "<br>";
        $stockFruites = ["poma" => 9, 
                        "taronja" => 25, 
                        "llimona" => 5, 
                        "pera" => 8, 
                        "plàtan" => 12, 
                        "pinya" => 3, 
                        "meló" => 4, 
                        "sindria" => 5, 
                        "albercoc" => 7, 
                        "maduixa" => 14
        ];
        print_r (array_intersect($stockFruites, $fruitesFuncions));
        echo "<br>";
        $stockFruites = ["poma" => 9, 
                        "taronja" => 25, 
                        "llimona" => 5, 
                        "pera" => 8, 
                        "plàtan" => 12, 
                        "pinya" => 3, 
                        "meló" => 4, 
                        "sindria" => 5, 
                        "albercoc" => 7, 
                        "maduixa" => 14
        ];
        print_r (array_merge($stockFruites, $fruitesFuncions));
     ?>
</body>
        
</html>