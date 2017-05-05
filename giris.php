
<html>
<?php include("includes/header.php"); ?>

<style type="text/css">
#form input{border:2px solid #ddd; padding:10px; width:300px; border-color:#DF013A; border-radius:10px; margin-left:520px;}
#form button{border:2px solid #ddd; padding:5px; border-radius:10px; border-color:#DF013A; margin-left:520px;}
font.f{margin-left:520px;}
</style>
<body background="food.jpg">
<?php
ini_set("error_reporting", E_ALL & ~E_DEPRECATED); 
//session_start();

echo "<div id='form'><form action='girisyap.php' method='post'>
<br>
<p><font size='5' class='f'>Kullanıcı Adınız :</font></p>
<br>
<input type='text' name='kadi' />
<br><br>
<p><font size='5' class='f'>Parolanız :</font></p>
<br>
<input type='password' name='sifre' />
<br>
<br>
<button type='submit'> GİRİŞ YAP </button>
</form>
</div>
";




?>
<?php include("includes/footer.php"); ?>
