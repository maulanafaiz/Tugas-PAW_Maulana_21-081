<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=devis-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Modul III php Local dan Global</h1>
    <p>Nama/NRP : Maulana Faizal F / 210411100081</p>
<?php
    #Global
    $x = 7;
    $y = 5;
    function MySep(){
        global $x,$y;
        echo "$x+$y";
    }
    #Local
    function MyOkt(){
        $x = 7;
        $y = 5;
        echo "$x+$y";
    }
?>
</body>
</html>