<html>
<?php include("includes/header.php"); ?>

<?php
ini_set("error_reporting", E_ALL & ~E_DEPRECATED);
session_start();
ob_start();
include "baglan.php";

$gunnedir = $_POST["gunnedir"];
$adi = $_SESSION["adi"];
$yemek_adi = $_SESSION["yemek_adi"];

$kayit = mysql_query("insert into siparis (adi_soyadi,yemek_adi,yemek_gun) values ('$adi','$yemek_adi','$gunnedir')"); //düzenle
				if ($kayit) {
					echo "<br>";
					echo "<font size='10'><div align='center'><b>Siparişiniz alındı!</b></div></font>";
					echo "<font size='5'><div align='center'><b>Yönlendiriliyorsunuz, bekleyiniz!</b></div></font>";
					header('Refresh:3; url=fiziksel.php');
				}else{
					echo "<br>";
					echo "<font size='10'><div align='center'><b>Bir sorun oluştu. Tekrar deneyiniz!</b></div></font>";
					echo "<font size='5'><div align='center'><b>Yönlendiriliyorsunuz, bekleyiniz!</b></div></font>";
					header('Refresh:3; url=kayit_ol.php');

				}
			
		
?>

