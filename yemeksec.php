<style>
.liste{color:black; 
		width:92%;
		background-color:#EEE;
		border:  1px solid black;
		margin-left:50px;
}
.liste_tr {
    height: 40px;
	text-align: center;
}
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
	margin-left:570px;
}

a.buton:hover{
    background: linear-gradient(top, #8e0700, #d21b00);
    text-shadow: 0 1px 1px rgba(0, 0, 0, 0.75);
    box-shadow: 0 -1px 2px rgba(0, 0, 0, 0.75);
}
</style>
<html>
<?php include("includes/header2.php"); ?>

<?php
session_start();
ob_start();
include "baglan.php";

$yemek1 = mysql_query ("select * from yemekler where kalori between '".$_SESSION["kalori2"]."' - 100 and '".$_SESSION["kalori2"]."' + 100 ");

$i = 0 ; 
    echo '<table align="center" class="liste"><tr class="liste_tr">
    <td><b>YEMEK ADI</b></td>
    <td><b>PORSİYON</b></td>
    <td><b>KALORİ</b></td>
	<td><b>RESİM</b></td>
	<td><b>ÖĞÜN GÜNÜ SEÇ</b></td>
    </tr>';

 while($yaz = mysql_fetch_array($yemek1))
    	
	{
       if(is_int($i/2)){
        $bg = "#FFC"; 
       }else {
        $bg = "#FF9";
            }
       $yemek_adi = $yaz["yemek_adi"];
       $birim   = $yaz["birim"];
       $kalori = $yaz["kalori"];
	   $resim = $yaz["yemek_resim"];
      
	  echo' <tr bgcolor='.$bg.' class="liste_tr">
        <td>'.$yemek_adi.'</td>
        <td>'.$birim.'</td>
        <td>'.$kalori.'</td>
		<td><img src='.$resim.' width="150" height="150"></td>
		<td>
		<form action ="siparis_kontrol.php" name="siparis_kontrol" method = "POST">
		<select name="gunnedir">
			  <option value=""></option>
			  <option value="pazartesi">Pazartesi</option>
			  <option value="sali">Salı</option>
			  <option value="carsamba">Çarşamba</option>
			  <option value="persembe">Perşembe</option>
			  <option value="cuma">Cuma</option>
		</select></form></td></tr>';

		$i++;  
		
     }

	 
	echo '</table>';
	echo '<br>';
	echo '<br>';
	echo '<p><a href="siparis_kontrol.php" class="buton"> SİPARİŞ VER! </a></p>';
	echo '<br>';
	echo '<br>';
	echo '<br>';
	echo '<p><a href="cikis.php" class="buton2"> ÇIKIŞ YAP </a></p>';
	echo '<br>';
	
?>

<?php include("includes/footer.php"); ?>
