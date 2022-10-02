<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Modul IV php Conditional</h1>
    <p>Nama/NRP : Maulana FaizalF/210411100081</p>
<?php
    date_default_timezone_set("Asia/Jakarta");
    $day = strftime("%A");
    $tgl = strftime("%d");
    $month = strftime("%B");
    $year = strftime("%Y");
    if ($day == "Sunday") {
        echo("Sekarang Hari Minggu : Tgl $tgl $month $year");
    }elseif($day == "Monday"){
        echo("Sekarang Hari Senin : Tgl $tgl $month $year");
    }elseif($day == "Thuesday"){
        echo("Sekarang Hari Selasa : Tgl $tgl $month $year");
    }elseif($day == "Wednesday"){
        echo("Sekarang Hari Rabu : Tgl $tgl $month $year");
    }elseif($day == "Thursday"){
        echo("Sekarang Hari Kamis : Tgl $tgl $month $year");
    }elseif($day == "Friday"){
        echo("Sekarang Hari Jumat : Tgl $tgl $month $year");
    }elseif($day == "Saturday"){
        echo("Sekarang Hari Sabtu : Tgl $tgl $month $year");
    }
?>
</body>
</html>