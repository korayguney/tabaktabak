<style type="text/css">
div.banner{margin-left:310px;}
</style>
<html>
<?php include("includes/header.php"); ?>

  <div class="enquiry-wrap">
    <div class="title">
        <h1> Bize yazın!</h1>
    </div>
    <div class="enquiry-form">
      <form name="iletisim" action="iletisimkontrol.php" method="post">
        <label>
        <input type="text" class="input_text" name="ad_soyad" placeholder="isminiz"/>
        </label>
		<label>
        <input type="text" class="input_text" name="tel" placeholder="telefon numaranız"/>
        </label>
        <label>
        <input type="text" class="input_text" name="email" placeholder="email adresiniz"/>
        </label>
		<label>
        <textarea class="message" name="mesaj" placeholder="mesajınız"></textarea>
        </label>
        <input type="submit" name="button" class="button" value="Gönder" />
      </form>
    </div>
  </div>
</div>


<?php include("includes/footer.php"); ?>

