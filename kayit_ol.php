<style type="text/css">
#form input {border:2px solid #ddd; padding:10px; border-color:#DF013A; border-radius:10px; margin-left:10px;}
#form button{border:3px solid #ddd; padding:5px; border-color:#DF013A; border-radius:15px;}
#form textarea{border:1px solid #ddd; padding:15px; border-radius:10px;}
</style>
<html>
<?php include("includes/header.php"); ?>

<p><div id="form"></p>
<br>
<p><fieldset></p>
<br>
<p><legend><font face="tahoma" size="5" color="maroon"><b>Kayıt Masası</b></font></legend></p>
<br>
<form action="kayit.php" method="post">
<font size="5">&nbsp;&nbsp; Adı Soyadı : </font>
<br>
<input type="text" name="adi" />
<br>
<font size="5">&nbsp;&nbsp; Kullanıcı Adı : </font>
<br>
<input type="text" name="kadi" />
<br>
<font size="5">&nbsp;&nbsp; Parola : </font>
<br>
<input type="password" name="sifre" />
<br>
<font size="5">&nbsp;&nbsp; Parola* : </font>
<br>
<input type="password" name="sifre2" placeholder="tekrar" />
<br>
<font size="5">&nbsp;&nbsp; E-Posta Adresiniz : </font>
<br>
<input type="text" name="mail" placeholder="@ işaretli giriniz" />
<br>
<font size="5">&nbsp;&nbsp; Telefon Numarası : </font>
<br>
<input type="text" name="tel" />
<br>
<font size="5">&nbsp;&nbsp; Ev/İş Adresiniz :</font>
<br>
<input type="text" name="adres" />
<br><br>
<b>FİZİKSEL BİLGİLER</b>
<br><br>
<font size="5">&nbsp;&nbsp; Cinsiyet :</font>
<br>
<input type="radio" name="cins" value="erkek" checked> Erkek<br>
 <input type="radio" name="cins" value="kadin"> Kadın<br>
<br>
<font size="5">&nbsp;&nbsp; Yaş :</font>
<br>
<input type="text" name="yas" placeholder="tam sayı giriniz"/>
<br>
<font size="5">&nbsp;&nbsp; Boy :</font>
<br>
<input type="text" name="boy" placeholder="noktalama işaretsiz giriniz" />
<br>
<font size="5">&nbsp;&nbsp; Kilo :</font>
<br>
<input type="text" name="kilo" placeholder="tam sayı giriniz" />
<br><br>
<font size="5">&nbsp;&nbsp; Aktivite Durumu :</font>
<br>
<input type="radio" name="aktivite" value="Hareketsiz" > Hareketsiz (Az veya hiç egzersiz, Masabaşı işi)<br>
<input type="radio" name="aktivite" value="az_hareketli"> Az hareketli (Haftada 1-3 gün spor)<br>
<input type="radio" name="aktivite" value="orta_hareketli" checked> Orta hareketli (Haftada 3-5 gün spor)<br>
<input type="radio" name="aktivite" value="cok_hareketli"> Çok hareketli (Haftada 6-7 gün spor)<br>
<input type="radio" name="aktivite" value="ekstrem_hareketli"> Ekstrem hareketli (günlük ağır egzersiz/spor ve fiziksel iş)<br>
<br><br>
<font size="5">&nbsp;&nbsp; Kalori Kontrol Hedefi :</font>
<br>
<input type="radio" name="kalori" value="kilo_almak" >  Haftada 1 kilo almak <br>
<input type="radio" name="kalori" value="kilo_vermek" checked>  Haftada 1 kilo vermek <br>
<input type="radio" name="kalori" value="kilo_korumak" > Kilo korunumu <br>
<input type="radio" name="kalori" value="kalori_alimi"> Ekstrem sporlar için ek kalori<br>
<br><br>
<button type="submit" > &nbsp;&nbsp; KAYIT OL </button>


</form>
</fieldset>
</div>

<?php include("includes/footer.php"); ?>



