<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function cetakHallo(){ //function tanpa params / inputan
        echo "hello";
    }
    function getData(){
        return "data berhasil didapatkan";
    }
?>


<h1>funct cetak :<?php cetakHallo(); ?></h1>
<h1>funct:get data, <?php echo getData(); ?></h1>


<!-- funct ada params/inputan -->
<?php function luasSegitiga($alas,$tinggi){
    $luas = ($alas * $tinggi) / 2;
    return $luas;
}
?>

<!-- cara panggil -->
<h3>fungsi luas segitiga = <?= luasSegitiga(10,3)?></h3>

<?php
function luasTabung($jari,$tinggi){
    $tabung = (3.14 *($jari * $jari)) * $tinggi;
    return $tabung;
}
?>
<!-- cara panggil -->
<h3>fungsi volume tabung = <?= luasTabung(10,3)?></h3>

</body>
</html>