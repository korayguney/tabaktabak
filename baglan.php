<?php
$host="localhost";
$kadi="root";
$sifre="";
$vt="tabak_tabak"; //veri tabanını oluşturduğunda ismini ver

ini_set("error_reporting", E_ALL & ~E_DEPRECATED); 

mysql_connect("localhost","root","") or die("baglanti basarisiz");
mysql_select_db("tabak_tabak"); //veri tabanını oluşturduğunda ismini ver

mysql_query("SET CHARACTER SET 'utf-8' ");
mysql_query("SET NAMES 'utf-8' ");



?>