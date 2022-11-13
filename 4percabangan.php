<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if else percabangan</title>
</head>
<body>
    <?php
        $nilai_uts = 97;
        $nilai_uas = 87;
        $nilai_rata = ($nilai_uts + $nilai_uas) / 2;
        //percabangan
        if($nilai_rata == 100){//== = membandingkan suatu nilai, bukan memberikan nilai // === = membandingkan suatu nilai (isinya) dan tipe datanya
            $keterangan1 = "anda lulus";
        }else{
            $keterangan1 = "anda blm lulus";}
        
        // percabangan 3 kondisi
        if($nilai_rata >= 100){
            $keterangan2 = " Lulus";
        }else if($nilai_rata >=90 && $nilai_rata <=99){
            $keterangan2 = "rata-rata";
        }else{
            $keterangan2 = "tidak lulus";
        }

            $username ="sydemy";
            $pass = 123;
            if($username ==="sydemy" && $pass === "123" ){ // tidak karena ini type datanya string, sedangkan di variablenya int
                $succes = "ya";
            }else{
                $succes = "tidak";
            }

            $data = "DATA";
            if ($data == "DATA"):
                $valid = true;

            else:
                $valid = false;
            endif;

            if($valid == 1){
                $valid = "valid";
            }else{
                $valid = "tidak valdi";
            }
?>

<p>keterangan1 : <?= $keterangan1; ?></p>
<p>keterangan2 : <?= $keterangan2; ?></p>
<p>sukses? <?= $succes ?></p>
<p>valdi? : <?= $valid ?></p>
</body>
</html>