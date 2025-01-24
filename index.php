<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP gyakorlás</title>
</head>
<body>
    <?php 
    //kiiratás
    echo "<p>Ezt a PHP írta</p>";
    print "<p>Kiírás printtel</p>";
    var_dump($GLOBALS);//Az összes eddigi változó részletes megjelenítése
    echo "<br>";
    //konstans
    define("GREETING","Hey how u doin buddy");
    echo constant("GREETING");
    //változók létrehozása
    $Szoveg1 = 'szoveg1';
    $Szoveg2 = "szoveg2";
    echo "<br>";
    echo "A két szöveg együtt1: ".$Szoveg1."+".$Szoveg2;
    echo "<br>A két szöveg együtt2: $Szoveg1+$Szoveg2<br>";
    //összefűzés
    $Szoveg3 = "Szép ";
    $Szoveg3 .= "napot!";
    echo $Szoveg3;
    //egész szám
    $egesz = 2;
    //tört
    echo "<br>";
    echo pow(2.0, 1024);//double határa
    $tort1 = 3.56;
    $tort2 = 3.44;
    $osszeg = $tort1 + $tort2;
    echo "<br>";
    echo gettype($osszeg);
    echo "<br>A számok összege: $osszeg";
    //logikai tipusok
    $logikai1 = true;
    $logikai2 = false;
    echo "<br>A két logikai érték: ".$logikai1." ".$logikai2; //csak az igaz jelenik meg
    //var_dump($GLOBALS);
    //lista létrehozása és kiiratása
    echo "<br>";
    $a = array("red", "green", "blue");
    print_r($a); //csak print_r írja ki a listát

    $tomb0 = array(1,2,3,4,5);
    $tomb1 = array();
    $tomb2[0] = "Levente";
    $tomb2[1] = "Levi";
    $tomb3 = ["Tordai", "Levente"];
    echo "<br>Tömb:";
    print_r($tomb2);

    




    ?>
    <p>Ezt a HTML írta</p>
</body>
</html>