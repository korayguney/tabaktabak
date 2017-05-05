<?php
ini_set("error_reporting", E_ALL & ~E_DEPRECATED); 
session_start();
session_destroy();

	echo 'Başarıyla çıkış yaptınız. Giriş sayfasına yönlendiriliyorsunuz.';
	header('Refresh:3; url=giris.php');

?>