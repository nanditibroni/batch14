<?php
$title = "Latihan 3 (opereta)";
$a = 2;
$b = 3;
$jumlah = $a + $b;
$kali = $a * $b;
$bagi = $a / $b;
$kurang = $a - $b;
$sisa_bagi = $a % $b;
$pangkat = $a ** $b;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
</head>
<body>
    <h1> hasil</h1>
    <h3>jumlah=<?= $jumlah?></h3>
    <h3>kali= <?= $kali?></h3>
    <h3>bagi= <?= $bagi?></h3>
    <h3>kurang= <?= $kurang?></h3>
    <h3>sisa_bagi= <?= $sisa_bagi?></h3>
    <h3>pangkat= <?= $pangkat?></h3>
<!-- <h4><?php echo 'hasil '. $a . ' + ' . $b .' = '. $jumlah ; ?></h4> -->
</body>
</html>
