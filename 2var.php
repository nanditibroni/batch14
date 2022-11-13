
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
  //make a variabel
  $nama = 'nandi';
  $umur = 22;
  $nama_lengkap = "nandi tibroni assopi";
  $nilai = 97.5;
  $lulus = true;
  
  
  ?>  
<h1>Selamat datang <?php echo "$nama" ?>, umur anda <?= "$umur"?> dan nama lengkap anda  <?= "$nama_lengkap"?> anda mendapatkan nilai <?= "$nilai"?> status <?= $lulus ?></h1>
<p>tipe data dari variabel $nama_lengkap adalah <?= gettype($nama_lengkap)?></p>
<p>dan umur adalah <?= gettype($umur)?></p>
<p>dan $nilai adalah <?= gettype($nilai)?></p>
<p>tipe data $lulus adalah <?= gettype($lulus)?></p>
</body>
</html>

