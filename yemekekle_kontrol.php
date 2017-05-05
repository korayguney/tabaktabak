<html>
<?php include("includes/header.php"); ?>

<?php
session_start();
include "baglan.php";
ini_set("error_reporting", E_ALL & ~E_DEPRECATED); 

$yemek_adi = $_POST["yemek_adi"];
$birim = $_POST["birim"];
$kalori = $_POST["kalori"];
$yemek_resim = $_POST["yemek_resim"];


if ($yemek_adi=="" || $birim=="" || $kalori=="" || $yemek_resim=="" ){
	
	echo "<br>";
	echo "<font size='10'><div align='center'><b>Lütfen boş alan bırakmayınız!</b></div></font>";
	echo "<font size='5'><div align='center'><b>Yönlendiriliyorsunuz, bekleyiniz!</b></div></font>";
	header('Refresh:3; url=yemekekle.php');
}else{
				
				$yemek_kayit = mysql_query("insert into yemekler (yemek_adi,birim,kalori,yemek_resim) 
												values ('$yemek_adi','$birim','$kalori','$yemek_resim')"); //düzenle
				if ($yemek_kayit) {
					echo "<br>";
					echo "<font size='10'><div align='center'><b>Kayıt başarıyla tamamlandı!</b></div></font>";
					echo "<font size='5'><div align='center'><b>Yönlendiriliyorsunuz, bekleyiniz!</b></div></font>";
					header('Refresh:3; url=yonetim.php');
				}else{
					echo "<br>";
					echo "<font size='10'><div align='center'><b>Bir sorun oluştu. Tekrar deneyiniz!</b></div></font>";
					echo "<font size='5'><div align='center'><b>Yönlendiriliyorsunuz, bekleyiniz!</b></div></font>";
					header('Refresh:3; url=yemekekle.php');

				}
			
			}
			
	
?>

<?php include("includes/footer.php"); ?>