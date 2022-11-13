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
    $buah =['apel','pir','semangka'];

    foreach($buah as $b){
        echo "ambil buah yang :" .$b ."<br>";

    }
    echo "<br>";

$nilai = array(
    'ipa' => 90,
    'ips' => 87,
    'mtk' => 92
);
echo "<hr>";

echo "ambil nilai ipa ". $nilai['ipa']. "<br>";
echo "ambil nilai ips ". $nilai['ips']. "<br>";
echo "ambil nilai mtk ". $nilai['mtk']. "<br>";
echo "<hr>"
?>
<?php
// looping array assoc
foreach ($nilai as $key => $n):
?>
    <ul>
    <li><?= "key : $key, value: $n" ?>
    </li>
</ul>
<?php
endforeach;
?>
</body>
</html>