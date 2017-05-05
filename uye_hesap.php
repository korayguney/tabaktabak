
<html>
<?php include("includes/header2.php"); ?>

<style type="text/css">
a.buton{
    background:#0000FF;
    background: linear-gradient(top, #d21b00, #8e0700);
    padding:10px 25px;
    text-decoration:none;
    color:#fff;
    font:bold 22px Arial, Helvetica, sans-serif;
    border-radius: 7px;
    text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.75);
    border:5px solid #fff;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.75);
	margin-left:550px;
}
a.buton2{
    background:#d21b00;
    background: linear-gradient(top, #d21b00, #8e0700);
    padding:10px 25px;
    text-decoration:none;
    color:#fff;
    font:bold 22px Arial, Helvetica, sans-serif;
    border-radius: 7px;
    text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.75);
    border:5px solid #fff;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.75);
	margin-left:550px;
}

a.buton:hover{
    background: linear-gradient(top, #8e0700, #d21b00);
    text-shadow: 0 1px 1px rgba(0, 0, 0, 0.75);
    box-shadow: 0 -1px 2px rgba(0, 0, 0, 0.75);
}

</style>
<body background="food.jpg">
<?php
ini_set("error_reporting", E_ALL & ~E_DEPRECATED); 
session_start();

	echo '<br>';
	echo '<br>';
	echo '<br>';
	echo '<p><a href="uye_siparis.php" class="buton"> SİPARİŞLERİM </a></p>';
	echo '<br>';
	echo '<br>';
	echo '<br>';
	echo '<p><a href="uye_guncelle.php" class="buton"> ÜYELİK GÜNCELLEME </a></p>';
	echo '<br>';
	echo '<br>';
	echo '<br>';
	echo '<p><a href="cikis.php" class="buton2"> ÇIKIŞ YAP </a></p>';
	echo '<br>';




?>
<?php include("includes/footer.php"); ?>
