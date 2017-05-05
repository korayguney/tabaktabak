<html>
<?php include("includes/header.php"); ?>

<?php
session_start();
include "baglan.php";

$kadi = $_POST["kadi"];
$sifre = $_POST["sifre"];
$sifre2 = $_POST["sifre2"];
$mail = $_POST["mail"];
$parola = md5($sifre);
$adi = $_POST["adi"];
$tel = $_POST["tel"];
$adres = $_POST["adres"];
$cins = $_POST["cins"];
$yas = $_POST["yas"];
$boy = $_POST["boy"];
$kilo = $_POST["kilo"];
$aktivite = $_POST["aktivite"];
$kalori = $_POST["kalori"];

/*_SESSION["kadi"] =  $kadi ;
$_SESSION["mail"] =  $mail ;
$_SESSION["parola"] =  $parola; 
$_SESSION["adi"] =  $adi;
$_SESSION["tel"] =  $tel ;
$_SESSION["adres"] =  $adres ;
$_SESSION["cins"] =  $cins;
$_SESSION["yas"] =  $yas ;
$_SESSION["boy"] =  $boy ;
$_SESSION["kilo"] =  $kilo ;
$_SESSION["aktivite"] =  $aktivite ;
$_SESSION["kalori"] =  $kalori ; */

if ($kadi=="" || $sifre=="" || $sifre2=="" || $mail=="" ){
	
	echo "<br>";
	echo "<font size='10'><div align='center'><b>Lütfen boş alan bırakmayınız!</b></div></font>";
	echo "<font size='5'><div align='center'><b>Yönlendiriliyorsunuz, bekleyiniz!</b></div></font>";
	header('Refresh:3; url=kayit_ol.php');
}else{
	
	if($sifre != $sifre2){
		
		echo "<br>";
		echo "<font size='10'><div align='center'><b>Şifreler uyuşmadı.Lütfen tekrar giriniz.</b></div></font>";
		echo "<font size='5'><div align='center'><b>Yönlendiriliyorsunuz, bekleyiniz!</b></div></font>";
		header('Refresh:3; url=kayit_ol.php');

		}else{
			if(!filter_var($mail,FILTER_VALIDATE_EMAIL)){
				echo "<br>";
				echo "<font size='10'><div align='center'><b>Geçerli bir mail adresi giriniz!</b></div></font>";
				echo "<font size='5'><div align='center'><b>Yönlendiriliyorsunuz, bekleyiniz!</b></div></font>";
				header('Refresh:3; url=kayit_ol.php');
				
			}else{
				
				$kayit = mysql_query("insert into uyeler (adi_soyadi,kullanici_adi,parola,mail,telefon,adres,cinsiyet,yas,boy,kilo,aktivite,kalori) 
												values ('$adi','$kadi','$parola','$mail','$tel','$adres','$cins','$yas','$boy','$kilo','$aktivite','$kalori')"); //düzenle
				if ($kayit) {
					echo "<br>";
					echo "<font size='10'><div align='center'><b>Kayıt başarıyla tamamlandı!</b></div></font>";
					echo "<font size='5'><div align='center'><b>Yönlendiriliyorsunuz, bekleyiniz!</b></div></font>";
					header('Refresh:3; url=giris.php');
				}else{
					echo "<br>";
					echo "<font size='10'><div align='center'><b>Bir sorun oluştu. Tekrar deneyiniz!</b></div></font>";
					echo "<font size='5'><div align='center'><b>Yönlendiriliyorsunuz, bekleyiniz!</b></div></font>";
					header('Refresh:3; url=kayit_ol.php');

				}
			
			}
			
		}
	
}

?>

<?php include("includes/footer.php"); ?>
