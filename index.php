<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Lanjutan</title>
    <style>
        *{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande';
            font-size: 20pt;
        }
</head>
<body>
    <?php
    include 'variable.php';
    require 'variable.php';
    
    $harga_baju = 24;
    $duit_bawa = 50;

    $hasil = kira($harga_baju, $duit_bawa);

    $bilangan_baju = $hasil['bilangan baju'];
    $baki_duit = $hasil['baki duit'];
    ?>
    Harga baju = RM<?php echo number_format($harga_baju, 2);?><br>
    Duit yang dibawa = RM<?php echo number_format($duit_bawa, 2);?><br>
    Bilangan baju = RM<?php echo $bilangan_baju;?> Helai<br>
    Baki duit = RM<?php echo number_format($baki_duit, 2);?><br>
</body>
</html>

<?php
function kira($harga_baju, $duit_bawa){
    $bilangan_baju = 0;
    $baki_duit = 0;
    for ($duit_bawa = 50; $duit_bawa > $harga_baju; $_GET)
    #

    $hasil = [
        'bilangan_baju' => $bilangan_baju,
        'baki duit' => $baki_duit,
    ];

    return $hasil;
}