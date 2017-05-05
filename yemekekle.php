<style type="text/css">
#form input {border:2px solid #ddd; padding:10px; border-color:#DF013A; border-radius:10px; margin-left:10px;}
#form button{border:3px solid #ddd; padding:5px; border-color:#DF013A; border-radius:15px;}
#form textarea{border:1px solid #ddd; padding:15px; border-radius:10px;}
</style>
<html>
<?php include("includes/header2.php"); ?>

<p><div id="form"></p>
<br>
<p><fieldset></p>
<br>
<p><legend><font face="tahoma" size="5" color="maroon"><b>Yönetici Modülü Yemek Ekleme Masası</b></font></legend></p>
<br>
<form action="yemekekle_kontrol.php" method="post">
<font size="5">&nbsp;&nbsp; Yemek Adı : </font>
<br>
<input type="text" name="yemek_adi" />
<br>
<font size="5">&nbsp;&nbsp; Birim : </font>
<br>
<input type="text" name="birim" />
<br>
<font size="5">&nbsp;&nbsp; Kalori : </font>
<br>
<input type="text" name="kalori" />
<br>
<font size="5">&nbsp;&nbsp; Yemek Resim Linki : </font>
<br>
<input type="text" name="yemek_resim" />
<br>
<br><br>
<button type="submit" > &nbsp;&nbsp; YEMEK EKLE </button>


</form>
</fieldset>
</div>

<?php include("includes/footer.php"); ?>



