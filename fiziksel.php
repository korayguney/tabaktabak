<style>
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
}

a.buton:hover{
    background: linear-gradient(top, #8e0700, #d21b00);
    text-shadow: 0 1px 1px rgba(0, 0, 0, 0.75);
    box-shadow: 0 -1px 2px rgba(0, 0, 0, 0.75);
}
fieldset{
    border-radius: 10px;
	margin-right: 20px;
    margin-left: 20px;
}
</style>
<html>
<?php include("includes/header2.php"); ?>
<br><br>
<fieldset>

<legend>Kalori Hesabı</legend>
<br>

<?php
include "baglan.php";
session_start();

$kadi=$_COOKIE["musteri"];
$uyemiz = mysql_query ("select * from uyeler where kullanici_adi='$kadi' ");
$uyemiz2 = mysql_fetch_array($uyemiz);
$cins=$uyemiz2["cinsiyet"];

$aktivite = $uyemiz2["aktivite"];
$kalori = $uyemiz2["kalori"];
$yas = $uyemiz2["yas"];
$boy = $uyemiz2["boy"];
$kilo = $uyemiz2["kilo"];

if ($cins=="kadin"){
	if ($kalori=="kilo_vermek"){
			$kaloriihtiyac= 655 + (9.6 *$kilo) + (1.8 * $boy) - (4.7 * $yas);
			$boykilo= ($kilo) / (($boy/100) * ($boy/100));
			$kaloriihtiyac2= $kaloriihtiyac * 0.3;		
			echo "<p><center><font size='5'>Vücut kitle endeksiniz: <b>$boykilo</b> </font></center></p>";
			if ($boykilo<=19){
				echo "<p><center><font size='5'>Vücut kitle endeksinize göre <b>ZAYIFSINIZ!</b></font></center></p>";
			}elseif ($boykilo>19 && $boykilo<=24.9){
				echo "<p><center><font size='5'>Vücut kitle endeksinize göre <b>KİLONUZ NORMAL!</b></font></center></p>";
			}elseif ($boykilo>25){
				echo "<p><center><font size='5'>Vücut kitle endeksinize göre <b>FAZLA KİLOLUSUNUZ!</b></font></center></p>";
			}
			echo "<p><center><font size='5'>Günlük ihtiyaç duyacağınız kalori miktarı <b>$kaloriihtiyac</b> dır. </font></center></p>";
			echo "<p><center><font size='5'>Akşam yemeğinde ihtiyaç duyacağınız kalori miktarı <b>$kaloriihtiyac2</b> dır. </font></center></p>";
	}elseif ($kalori=="kilo_almak"){
			$kaloriihtiyac= 900 + (9.6 *$kilo) + (1.8 * $boy) - (4.7 * $yas);
			$boykilo= ($kilo) / (($boy/100) * ($boy/100));
			$kaloriihtiyac2= $kaloriihtiyac * 0.3;		
			echo "<p><center><font size='5'>Vücut kitle endeksiniz: <b>$boykilo</b> </font></center></p>";
			if ($boykilo<=19){
				echo "<p><center><font size='5'>Vücut kitle endeksinize göre <b>ZAYIFSINIZ!</b></font></center></p>";
			}elseif ($boykilo>19 && $boykilo<=24.9){
				echo "<p><center><font size='5'>Vücut kitle endeksinize göre <b>KİLONUZ NORMAL!</b></font></center></p>";
			}elseif ($boykilo>25){
				echo "<p><center><font size='5'>Vücut kitle endeksinize göre <b>FAZLA KİLOLUSUNUZ!</b></font></center></p>";
			}
			echo "<p><center><font size='5'>Günlük ihtiyaç duyacağınız kalori miktarı <b>$kaloriihtiyac</b> dır. </font></center></p>";
			echo "<p><center><font size='5'>Akşam yemeğinde ihtiyaç duyacağınız kalori miktarı <b>$kaloriihtiyac2</b> dır. </font></center></p>";
			
	}elseif ($kalori=="kilo_korumak"){
			$kaloriihtiyac= 775 + (9.6 *$kilo) + (1.8 * $boy) - (4.7 * $yas);
			$boykilo= ($kilo) / (($boy/100) * ($boy/100));
			$kaloriihtiyac2= $kaloriihtiyac * 0.3;		
			echo "<p><center><font size='5'>Vücut kitle endeksiniz: <b>$boykilo</b> </font></center></p>";
			if ($boykilo<=19){
				echo "<p><center><font size='5'>Vücut kitle endeksinize göre <b>ZAYIFSINIZ!</b></font></center></p>";
			}elseif ($boykilo>19 && $boykilo<=24.9){
				echo "<p><center><font size='5'>Vücut kitle endeksinize göre <b>KİLONUZ NORMAL!</b></font></center></p>";
			}elseif ($boykilo>25){
				echo "<p><center><font size='5'>Vücut kitle endeksinize göre <b>FAZLA KİLOLUSUNUZ!</b></font></center></p>";
			}
			echo "<p><center><font size='5'>Günlük ihtiyaç duyacağınız kalori miktarı <b>$kaloriihtiyac</b> dır. </font></center></p>";
			echo "<p><center><font size='5'>Akşam yemeğinde ihtiyaç duyacağınız kalori miktarı <b>$kaloriihtiyac2</b> dır. </font></center></p>";
			
	}elseif ($kalori=="kalori_alimi"){
			$kaloriihtiyac= 1250 + (9.6 *$kilo) + (1.8 * $boy) - (4.7 * $yas);
			$boykilo= ($kilo) / (($boy/100) * ($boy/100));
			$kaloriihtiyac2= $kaloriihtiyac * 0.3;		
			echo "<p><center><font size='5'>Vücut kitle endeksiniz: <b>$boykilo</b> </font></center></p>";
			if ($boykilo<=19){
				echo "<p><center><font size='5'>Vücut kitle endeksinize göre <b>ZAYIFSINIZ!</b></font></center></p>";
			}elseif ($boykilo>19 && $boykilo<=24.9){
				echo "<p><center><font size='5'>Vücut kitle endeksinize göre <b>KİLONUZ NORMAL!</b></font></center></p>";
			}elseif ($boykilo>25){
				echo "<p><center><font size='5'>Vücut kitle endeksinize göre <b>FAZLA KİLOLUSUNUZ!</b></font></center></p>";
			}
			echo "<p><center><font size='5'>Günlük ihtiyaç duyacağınız kalori miktarı <b>$kaloriihtiyac</b> dır. </font></center></p>";
			echo "<p><center><font size='5'>Akşam yemeğinde ihtiyaç duyacağınız kalori miktarı <b>$kaloriihtiyac2</b> dır. </font></center></p>";
			
	}
			
}elseif ($cins=="erkek"){
			$kaloriihtiyac= 855 + (9.6 *$kilo) + (1.8 * $boy) - (4.7 * $yas);
			$boykilo= ($kilo) / (($boy/100) * ($boy/100));
			$kaloriihtiyac2= $kaloriihtiyac * 0.3;		
			echo "<p><center><font size='5'>Vücut kitle endeksiniz: <b>$boykilo</b> </font></center></p>";
			if ($boykilo<=19){
				echo "<p><center><font size='5'>Vücut kitle endeksinize göre <b>ZAYIFSINIZ!</b></font></center></p>";
			}elseif ($boykilo>19 && $boykilo<=24.9){
				echo "<p><center><font size='5'>Vücut kitle endeksinize göre <b>KİLONUZ NORMAL!</b></font></center></p>";
			}elseif ($boykilo>25){
				echo "<p><center><font size='5'>Vücut kitle endeksinize göre <b>FAZLA KİLOLUSUNUZ!</b></font></center></p>";
			}
			echo "<p><center><font size='5'>Günlük ihtiyaç duyacağınız kalori miktarı <b>$kaloriihtiyac</b> dır. </font></center></p>";
			echo "<p><center><font size='5'>Akşam yemeğinde ihtiyaç duyacağınız kalori miktarı <b>$kaloriihtiyac2</b> dır. </font></center></p>";
	}elseif ($kalori=="kilo_almak"){
			$kaloriihtiyac= 1100 + (9.6 *$kilo) + (1.8 * $boy) - (4.7 * $yas);
			$boykilo= ($kilo) / (($boy/100) * ($boy/100));
			$kaloriihtiyac2= $kaloriihtiyac * 0.3;		
			echo "<p><center><font size='5'>Vücut kitle endeksiniz: <b>$boykilo</b> </font></center></p>";
			if ($boykilo<=19){
				echo "<p><center><font size='5'>Vücut kitle endeksinize göre <b>ZAYIFSINIZ!</b></font></center></p>";
			}elseif ($boykilo>19 && $boykilo<=24.9){
				echo "<p><center><font size='5'>Vücut kitle endeksinize göre <b>KİLONUZ NORMAL!</b></font></center></p>";
			}elseif ($boykilo>25){
				echo "<p><center><font size='5'>Vücut kitle endeksinize göre <b>FAZLA KİLOLUSUNUZ!</b></font></center></p>";
			}
			echo "<p><center><font size='5'>Günlük ihtiyaç duyacağınız kalori miktarı <b>$kaloriihtiyac</b> dır. </font></center></p>";
			echo "<p><center><font size='5'>Akşam yemeğinde ihtiyaç duyacağınız kalori miktarı <b>$kaloriihtiyac2</b> dır. </font></center></p>";
			
	}elseif ($kalori=="kilo_korumak"){
			$kaloriihtiyac= 975 + (9.6 *$kilo) + (1.8 * $boy) - (4.7 * $yas);
			$boykilo= ($kilo) / (($boy/100) * ($boy/100));
			$kaloriihtiyac2= $kaloriihtiyac * 0.3;		
			echo "<p><center><font size='5'>Vücut kitle endeksiniz: <b>$boykilo</b> </font></center></p>";
			if ($boykilo<=19){
				echo "<p><center><font size='5'>Vücut kitle endeksinize göre <b>ZAYIFSINIZ!</b></font></center></p>";
			}elseif ($boykilo>19 && $boykilo<=25.9){
				echo "<p><center><font size='5'>Vücut kitle endeksinize göre <b>KİLONUZ NORMAL!</b></font></center></p>";
			}elseif ($boykilo>26){
				echo "<p><center><font size='5'>Vücut kitle endeksinize göre <b>FAZLA KİLOLUSUNUZ!</b></font></center></p>";
			}
			echo "<p><center><font size='5'>Günlük ihtiyaç duyacağınız kalori miktarı <b>$kaloriihtiyac</b> dır. </font></center></p>";
			echo "<p><center><font size='5'>Akşam yemeğinde ihtiyaç duyacağınız kalori miktarı <b>$kaloriihtiyac2</b> dır. </font></center></p>";
			
	}elseif ($kalori=="kalori_alimi"){
			$kaloriihtiyac= 1450 + (9.6 *$kilo) + (1.8 * $boy) - (4.7 * $yas);
			$boykilo= ($kilo) / (($boy/100) * ($boy/100));
			$kaloriihtiyac2= $kaloriihtiyac * 0.3;		
			echo "<p><center><font size='5'>Vücut kitle endeksiniz: <b>$boykilo</b> </font></center></p>";
			if ($boykilo<=19){
				echo "<p><center><font size='5'>Vücut kitle endeksinize göre <b>ZAYIFSINIZ!</b></font></center></p>";
			}elseif ($boykilo>19 && $boykilo<=24.9){
				echo "<p><center><font size='5'>Vücut kitle endeksinize göre <b>KİLONUZ NORMAL!</b></font></center></p>";
			}elseif ($boykilo>25){
				echo "<p><center><font size='5'>Vücut kitle endeksinize göre <b>FAZLA KİLOLUSUNUZ!</b></font></center></p>";
			}
			echo "<p><center><font size='5'>Günlük ihtiyaç duyacağınız kalori miktarı <b>$kaloriihtiyac</b> dır. </font></center></p>";
			echo "<p><center><font size='5'>Akşam yemeğinde ihtiyaç duyacağınız kalori miktarı <b>$kaloriihtiyac2</b> dır. </font></center></p>";
			
	}
			

			echo '<br>';
			echo '<br>';
			echo '<br>';
			echo '<p><center><a href="yemeksec.php" class="buton"> HAYDİ ŞİMDİ SİPARİŞ VER, KİLOLARINI KONTROL ALTINA AL! </a></center></p>';
			echo '<br>';
			echo '<br>';
			echo '<br>';
			echo '<p><center><a href="cikis.php" class="buton2"> ÇIKIŞ YAP </a></center></p>';
			echo '<br>';
			echo '<br>';
			echo '<br>';
$_SESSION["kalori2"] =  $kaloriihtiyac2 ;
?> 


 
</fieldset>

<?php include("includes/footer.php"); ?>

