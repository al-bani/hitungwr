<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <?php

        if(isset($_POST['hitung'])){
	        $tm = $_POST['tm'];
	        $tw = $_POST['tw'];
            $twd = $_POST['twd'];
            
            $hasil1 = floatval($tw/100);
            $hasil2 = floatval($twd/100);
	        $hasil3 = floatval($tm/$hasil1);
            $hasil4 = floatval($hasil2-$hasil1);
            $mtch = $hasil3 * $hasil4;
        }
        
    ?>

        <div class="form">
        <form method="post" action="index.php">
                <h2>Total Match :</h2><input Type="number" class="bil1" name="tm" placeholder="cth. 1000" required>
                <h2>Total Winrate :</h2><div class="kanan"><input Type="number" class="bil" name="tw"placeholder="Max 100" required><h2>%</h2></div>
                <h2>Winrate yang diinginkan :</h2><div class="kanan"><input Type="number" class="bil" name="twd" placeholder="Max 100" required><h2>%</h2></div>
                <input Type="submit" class="submit" name="hitung" value="Hitung">
        
    <?php 	
		if(isset($_POST['hitung'])){
    ?>
           
    <h3>Kamu memerlukan sekitar <?php echo $mtch; ?> Match Kemenangan<br>agar mendapatkan <?php echo $twd."%"; ?> Winrate yang diinginkan</h3>

        <?php } ?>	
 </div>
</body>
</html>