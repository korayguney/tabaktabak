<html>
<?php include("includes/header2.php"); ?>

<?php
session_start();
ob_start();
include "baglan.php";

$kadi1=$_COOKIE["musteri"];

$uyemiz = mysql_query ("select * from uyeler where kullanici_adi='$kadi1' ");
$uyemiz2 = mysql_fetch_array($uyemiz);
$id=$uyemiz2["id"];


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

if ($kadi != ""){
	
	mysql_query("update uyeler set kullanici_adi='$kadi' where id='$id' ");
	echo "<br>";
	echo "<font size='10'><div align='center'><b>Kullanıcı adınızı değiştirdiniz!</b></div></font>";

}if ($sifre != "" || $sifre2 !="" ){
	if($sifre != $sifre2){
		
		echo "<br>";
		echo "<font size='10'><div align='center'><b>Şifreler uyuşmadı.Lütfen tekrar giriniz.</b></div></font>";
		echo "<font size='5'><div align='center'><b>Yönlendiriliyorsunuz, bekleyiniz!</b></div></font>";
		header('Refresh:3; url=uye_guncelle.php');

		}else{
	
	mysql_query("update uyeler set sifre='$parola' where id='$id' ");
	echo "<br>";
	echo "<font size='10'><div align='center'><b>Şifrenizi değiştirdiniz!</b></div></font>";
	}
}if ($mail != ""){
	
	mysql_query("update uyeler set mail='$mail' where id='$id' ");
	echo "<br>";
	echo "<font size='10'><div align='center'><b>Mail adresinizi değiştirdiniz!</b></div></font>";
	
}if ($tel != ""){
	
	mysql_query("update uyeler set telefon='$tel' where id='$id' ");
	echo "<br>";
	echo "<font size='10'><div align='center'><b>Telefon numaranızı değiştirdiniz!</b></div></font>";
	
}if ($adres != ""){
	
	mysql_query("update uyeler set adres='$adres' where id='$id' ");
	echo "<br>";
	echo "<font size='10'><div align='center'><b>Adresinizi değiştirdiniz!</b></div></font>";

}if ($cins != ""){
	
	mysql_query("update uyeler set cinsiyet='$cins' where id='$id' ");
	echo "<br>";
	echo "<font size='10'><div align='center'><b>Cinsiyet bilginizi değiştirdiniz!</b></div></font>";

}if ($yas != ""){
	
	mysql_query("update uyeler set yas='$yas' where id='$id' ");
	echo "<br>";
	echo "<font size='10'><div align='center'><b>Yaşınızı değiştirdiniz!</b></div></font>";
	
}if ($boy != ""){
	
	mysql_query("update uyeler set boy='$boy' where id='$id' ");
	echo "<br>";
	echo "<font size='10'><div align='center'><b>Boy değerinizi değiştirdiniz!</b></div></font>";

}if ($kilo != ""){
	
	mysql_query("update uyeler set kilo='$kilo' where id='$id' ");
	echo "<br>";
	echo "<font size='10'><div align='center'><b>Kilo değerinizi değiştirdiniz!</b></div></font>";

}if ($aktivite != ""){
	
	mysql_query("update uyeler set aktivite='$aktivite' where id='$id' ");
	echo "<br>";
	echo "<font size='10'><div align='center'><b>Aktivite tercihinizi değiştirdiniz!</b></div></font>";

}if ($kalori != ""){
	
	mysql_query("update uyeler set kalori='$kalori' where id='$id' ");
	echo "<br>";
	echo "<font size='10'><div align='center'><b>Hedefinizi değiştirdiniz!</b></div></font>";
	}
	
	
	echo "<font size='5'><div align='center'><b>Yönlendiriliyorsunuz, bekleyiniz!</b></div></font>";
	header('Refresh:3; url=uye_hesap.php');
	


?>

<?php include("includes/footer.php"); ?>
