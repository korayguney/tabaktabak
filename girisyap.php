<style>			
			p{
				font-weight:bold;
				font-family:Times;
				font-size:40pt;				
			}
</style>
<html>
<?php include("includes/header.php"); ?>
<br><br>

<?php
ini_set("error_reporting", E_ALL & ~E_DEPRECATED); 
//session_start();
//ob_start();
include "baglan.php";

$kadi = $_POST["kadi"];
$sifre = $_POST["sifre"];
$parola = md5($sifre);

setcookie("musteri","$kadi",time()+136000);

if ($kadi=="" || $sifre==""){
	
	echo "<br>";
	echo "<font size='10'><div align='center'><b>Lütfen boş alan bırakmayınız!</b></div></font>";
	echo "<font size='5'><div align='center'><b>Yönlendiriliyorsunuz, bekleyiniz!</b></div></font>";
	header('Refresh:3; url=giris.php');
	}else{
		if ($kadi=="admin" && $sifre=="12345"){
	
	echo "<br>";
	echo "<font size='10'><div align='center'><b>Hoşgeldin ADMİN, Bol Kazançlar!</b></div></font>";
	echo "<font size='5'><div align='center'><b>Yönlendiriliyorsunuz, bekleyiniz!</b></div></font>";
	header('Refresh:3; url=yonetim.php');
	}else{
	
	if($kadi && $sifre){
		
		//$_SESSION["kadi"] = $kadi;
		$sorgula = mysql_query ("select * from uyeler where kullanici_adi='$kadi' and parola='$parola' "); //düzenlenecek
		$verisay = mysql_num_rows ($sorgula);
		if ($verisay > 0){
			echo '<br>';
			echo '<p><div align="center">HOŞGELDİNİZ</div></p>'; 
			echo "<font size='5'><div align='center'><b>Yönlendiriliyorsunuz, bekleyiniz!</b></div></font>";
			echo '<br>';
			
 			header("Refresh:3; url=fiziksel.php");
			
		}else{
			echo "<br>";
			echo "<font size='10'><div align='center'><b>Kullanıcı adı veya şifre yanlış!</b></div></font>";
			echo "<font size='5'><div align='center'><b>Yönlendiriliyorsunuz, bekleyiniz!</b></div></font>";
			header("Refresh:3; url=giris.php");
		}
		}
		}
		}
?>