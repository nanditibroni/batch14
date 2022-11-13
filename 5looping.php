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
//looping for
for($i =1;$i <=10;$i++){
    echo "hello $i <br>";
}
echo "<hr>";
for($a =15;$a >=1;$a--){
    echo "hello $a <br>";
}
echo "<hr>";
$nilaiawal = 1;
while($nilaiawal<=12){
echo "while ke - $nilaiawal <br>";
$nilaiawal++;
}
echo "<hr>";
$data1 =[
    'ASD123',
    'ASD124',
    'ASD125'
];
$data2= array(
    'QWE123',
    'QWE124',
    'QWE125'
);
foreach($data1 as $dt1){
    echo "$dt1 <br>";
}
?>
</body>
</html>