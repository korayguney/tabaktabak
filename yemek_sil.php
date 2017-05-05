<style>
input.input {border:2px solid #ddd;
			padding:10px; 
			border-color:#DF013A;
			border-radius:10px; 
			margin-left:10px;
}
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
	margin-left:595px;
}

a.buton:hover{
    background: linear-gradient(top, #8e0700, #d21b00);
    text-shadow: 0 1px 1px rgba(0, 0, 0, 0.75);
    box-shadow: 0 -1px 2px rgba(0, 0, 0, 0.75);
}
button.buton2{
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
	margin-left:580px;
}
button.buton2:hover{
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

$yemekler = mysql_query ("select * from yemekler");

$i = 0 ; 
    echo '<table align="center" class="liste"><tr class="liste_tr">
    <td><b>YEMEK ID</b></td>
	<td><b>YEMEK ADI</b></td>
    <td><b>PORSİYON</b></td>
    <td><b>KALORİ</b></td>
	<td><b>RESİM</b></td>
	</tr>';

 while($yaz = mysql_fetch_array($yemekler))
    	
	{
       if(is_int($i/2)){
        $bg = "#FFC"; 
       }else {
        $bg = "#FF9";
            }
       $yemek_id = $yaz["yemek_id"];
	   $yemek_adi = $yaz["yemek_adi"];
       $birim   = $yaz["birim"];
       $kalori = $yaz["kalori"];
	   $resim = $yaz["yemek_resim"];
      
	  echo' <tr bgcolor='.$bg.' class="liste_tr">
        <td>'.$yemek_id.'</td>
		<td>'.$yemek_adi.'</td>
        <td>'.$birim.'</td>
        <td>'.$kalori.'</td>
		<td><img src='.$resim.' width="50" height="50"></td>
		</tr>';

		$i++;  
		
     }

	 
	echo '</table>';
	echo '<form action="yemek_sil_kontrol.php" method="post">';
	echo '<br>';
	echo '<br>';
	echo '<font size="5"><center>&nbsp;&nbsp; Silinecek Yemek ID : </center></font>';
	echo '<br>';
	echo '<center><input type="text" name="yemek_id" class="input" /></center>';
	echo '<br>';
	echo '<br>';
	echo '<button type="submit" class="buton2"> &nbsp;&nbsp; YEMEK SİL </button>';
	echo '<br>';
	echo '<br>';
	echo '</form>';
	echo '<br>';
	echo '<p><a href="cikis.php" class="buton2"> ÇIKIŞ YAP </a></p>';
	echo '<br>';
	
?>

<?php include("includes/footer.php"); ?>
