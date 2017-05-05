<html>
<?php include("includes/header2.php"); ?>

<?php
session_start();
include "baglan.php";
ini_set("error_reporting", E_ALL & ~E_DEPRECATED); 

$yemek_sil = $_POST["yemek_id"];


				$yemek_sil = mysql_query("DELETE FROM yemekler WHERE yemek_id='$yemek_sil' ");
				if ($yemek_sil) {
					echo "<br>";
					echo "<font size='10'><div align='center'><b>Silme işlemi başarıyla tamamlandı!</b></div></font>";
					echo "<font size='5'><div align='center'><b>Yönlendiriliyorsunuz, bekleyiniz!</b></div></font>";
					header('Refresh:3; url=yemek_sil.php');
				}else{
					echo "<br>";
					echo "<font size='10'><div align='center'><b>Bir sorun oluştu. Tekrar deneyiniz!</b></div></font>";
					echo "<font size='5'><div align='center'><b>Yönlendiriliyorsunuz, bekleyiniz!</b></div></font>";
					header('Refresh:3; url=yemek_sil.php');

				}
			
?>

<?php include("includes/footer.php"); ?>