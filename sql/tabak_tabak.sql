-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 09 Haz 2016, 20:47:20
-- Sunucu sürümü: 5.7.9
-- PHP Sürümü: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `tabak_tabak`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

DROP TABLE IF EXISTS `siparis`;
CREATE TABLE IF NOT EXISTS `siparis` (
  `siparis_id` int(11) NOT NULL AUTO_INCREMENT,
  `adi_soyadi` varchar(100) NOT NULL,
  `yemek_adi` varchar(100) NOT NULL,
  `yemek_gun` varchar(100) NOT NULL,
  PRIMARY KEY (`siparis_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `siparis`
--

INSERT INTO `siparis` (`siparis_id`, `adi_soyadi`, `yemek_adi`, `yemek_gun`) VALUES
(1, 'root', '', ''),
(2, 'root', '', ''),
(3, 'root', '', ''),
(4, 'ece', '', ''),
(5, 'ece', '', ''),
(6, 'ece', '', ''),
(7, 'ece', '', ''),
(8, 'serap', '', ''),
(9, 'serap', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

DROP TABLE IF EXISTS `uyeler`;
CREATE TABLE IF NOT EXISTS `uyeler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi_soyadi` varchar(55) NOT NULL,
  `kullanici_adi` varchar(55) NOT NULL,
  `parola` varchar(55) NOT NULL,
  `mail` varchar(55) NOT NULL,
  `telefon` int(20) NOT NULL,
  `adres` varchar(250) NOT NULL,
  `cinsiyet` varchar(10) NOT NULL,
  `yas` int(10) NOT NULL,
  `boy` int(10) NOT NULL,
  `kilo` int(10) NOT NULL,
  `aktivite` varchar(55) NOT NULL,
  `kalori` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `adi_soyadi`, `kullanici_adi`, `parola`, `mail`, `telefon`, `adres`, `cinsiyet`, `yas`, `boy`, `kilo`, `aktivite`, `kalori`) VALUES
(1, 'koray', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'kgb2041@gmail.com', 5555555, 'meric apt', 'erkek', 25, 175, 55, 'orta_hareketli', 'kilo_vermek'),
(2, 'ilknur', 'ilknur', '827ccb0eea8a706c4c34a16891f84e7b', 'ilknur@gmail.com', 5555555, 'deneme adresi', 'kadin', 28, 167, 53, 'az_hareketli', 'kilo_korumak'),
(3, 'deneme', 'deneme', '827ccb0eea8a706c4c34a16891f84e7b', 'deneme@ht.com', 22222, 'deneme', 'erkek', 12, 322, 12, 'az_hareketli', 'kilo_almak'),
(4, 'deneme2', 'deneme2', '827ccb0eea8a706c4c34a16891f84e7b', 'deneme@ht.com', 22222, 'deneme', 'kadin', 100, 322, 12, 'az_hareketli', 'kilo_almak'),
(5, 'Ä°lknur GÃ¼ney', 'ilknurrr', '827ccb0eea8a706c4c34a16891f84e7b', 'ilknur@gmail.com', 22222, 'deneme', 'kadin', 31, 160, 59, 'az_hareketli', 'kilo_vermek'),
(6, 'ece', 'ece', '827ccb0eea8a706c4c34a16891f84e7b', 'koray@hotmail.com', 5555555, 'deneme adresi', 'kadin', 24, 175, 65, 'orta_hareketli', 'kilo_vermek'),
(7, 'ali', 'ali', '827ccb0eea8a706c4c34a16891f84e7b', 'ali@hot.com', 3333333, 'deneme adresim', 'erkek', 33, 180, 74, 'cok_hareketli', 'kilo_korumak'),
(8, 'ali2', 'ali2', '827ccb0eea8a706c4c34a16891f84e7b', 'ali@hot.com', 888888, 'deneme adresi', 'kadin', 41, 169, 67, 'az_hareketli', 'kilo_vermek'),
(9, 'dede', 'dede', '827ccb0eea8a706c4c34a16891f84e7b', 'dede@hotmail.com', 159753, 'deneme4', 'erkek', 29, 186, 95, 'ekstrem_hareketli', 'kalori_alimi'),
(10, 'ahmet', 'ahmet', '827ccb0eea8a706c4c34a16891f84e7b', 'ahmet@hot.com', 159753, 'deneme adresi', 'erkek', 47, 168, 59, 'cok_hareketli', 'kilo_korumak'),
(11, 'ahmet', 'ahmet', '827ccb0eea8a706c4c34a16891f84e7b', 'ahmet@hot.com', 159753, 'deneme adresi', 'erkek', 47, 168, 59, 'cok_hareketli', 'kilo_korumak'),
(12, 'asker', 'asker', '827ccb0eea8a706c4c34a16891f84e7b', 'deneme@ht.com', 21121313, 'de1', 'erkek', 25, 182, 77, 'orta_hareketli', 'kilo_vermek'),
(13, 'ece', 'ece3', '827ccb0eea8a706c4c34a16891f84e7b', 'ece@hotmail.com', 157456, 'deneme adresi', 'kadin', 19, 174, 62, 'cok_hareketli', 'kilo_korumak'),
(14, 'meric', 'meric', '827ccb0eea8a706c4c34a16891f84e7b', 'meric@hotmail.com', 85214793, 'deneme', 'erkek', 50, 169, 67, 'az_hareketli', 'kilo_korumak'),
(15, 'ece deniz', 'ece8', '827ccb0eea8a706c4c34a16891f84e7b', 'deneme@deneme.com', 51235882, 'deneme adresi', 'kadin', 23, 168, 61, 'orta_hareketli', 'kilo_vermek'),
(16, 'ece', 'ece7', '827ccb0eea8a706c4c34a16891f84e7b', 'ece7@hotmail.com', 54879622, 'deneme deneme deneme', 'kadin', 23, 172, 62, 'cok_hareketli', 'kilo_korumak'),
(17, 'ece', 'ece11', '827ccb0eea8a706c4c34a16891f84e7b', 'ece@hotmail.come', 151651, 'denemedeneme', 'kadin', 40, 180, 70, 'orta_hareketli', 'kilo_vermek'),
(18, 'koray ', 'admin5', '827ccb0eea8a706c4c34a16891f84e7b', 'der@hoyt.com', 5656, 'deneme adresim 1', 'erkek', 47, 182, 75, 'orta_hareketli', 'kilo_vermek'),
(19, 'serap', 'serap', '827ccb0eea8a706c4c34a16891f84e7b', 'serap@hotmail.com', 18225422, 'deneme 1', 'kadin', 28, 171, 54, 'cok_hareketli', 'kilo_almak');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yemekler`
--

DROP TABLE IF EXISTS `yemekler`;
CREATE TABLE IF NOT EXISTS `yemekler` (
  `yemek_id` int(11) NOT NULL AUTO_INCREMENT,
  `yemek_adi` varchar(55) NOT NULL,
  `birim` varchar(30) NOT NULL,
  `kalori` int(11) NOT NULL,
  `yemek_resim` varchar(200) NOT NULL,
  PRIMARY KEY (`yemek_id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `yemekler`
--

INSERT INTO `yemekler` (`yemek_id`, `yemek_adi`, `birim`, `kalori`, `yemek_resim`) VALUES
(2, 'adana kebap', '1 porsiyon', 897, 'https://www.biresto.com/restoran-fotolari/adana-ozasmaalti-restaurant-bostanci-kadikoy-istanbul-mekan-foto-no-4444.jpg'),
(4, 'ali nazik', '1 porsiyon', 400, 'http://bitarifimvar.com/wp-content/uploads/2014/01/ali-nazik-kebabi-tarifi.jpg'),
(6, 'arnavut cigeri', '1 porsiyon', 797, 'http://char-me.net/pimages/m/arnavut-cigeri.jpg'),
(7, 'bezelye', '1 porsiyon', 289, 'http://1.bp.blogspot.com/-XKkgzc7lB6A/VOdRMdHXH-I/AAAAAAAAAHc/l0u-k3uObmw/s1600/kiymali-bezelye.jpg'),
(9, 'bulgur pilavi', '1 porsiyon', 291, 'http://bitarifimvar.com/wp-content/uploads/2013/12/mantarli-bulgur-pilavi-tarifi.jpg'),
(10, 'ciger tava', '1 porsiyon', 763, 'https://pbs.twimg.com/profile_images/2278220808/images_400x400.jpg'),
(12, 'dalyan kofte', '1 porsiyon', 498, 'http://yemekvetatlitarifleri.com/images/besamel_soslu_kofte_1.jpg'),
(14, 'dana haslama', '1 porsiyon', 631, 'http://www.lezzetikesfet.com/wp-content/uploads/2015/12/dana-haslama-350x350.jpg'),
(16, 'doner', '1 porsiyon', 556, 'http://www.pizzavira.com/images_up/etdoneqfq.jpg'),
(18, 'etli dolma', '1 porsiyon', 331, 'http://i2.wp.com/birtutamlezzet.com/wp-content/uploads/2013/11/etli-dolma.jpg?resize=350%2C350'),
(20, 'etli turlu', '1 porsiyon', 537, 'http://www.yemekkulturu.net/wp-content/uploads/2015/07/Etli-Turlu-Tarifi.jpg'),
(22, 'etli taze fasulye', '1 porsiyon', 475, 'http://bitarifimvar.com/wp-content/uploads/2013/11/etli-taze-fasulye.jpg'),
(25, 'taze fasulye', '1 porsiyon', 376, 'http://bitarifimvar.com/wp-content/uploads/2013/11/etli-taze-fasulye.jpg'),
(27, 'yaprak sarma', '1 porsiyon', 428, 'http://www.calganetlokantasi.com/dosya/up/yemek/b_Zeytinyagli_Yaprak_Sarma.jpg'),
(28, 'firin makarna', '1 porsiyon', 505, 'http://bitarifimvar.com/wp-content/uploads/2014/01/firin-makarna.jpg'),
(30, 'firin tavuk', '1 porsiyon', 402, 'http://bitarifimvar.com/wp-content/uploads/2013/11/firinda-tavuk-butlari1.jpg'),
(32, 'imambayildi', '1 porsiyon', 194, 'http://img.yemektarifleri.com/photos/17448/12995509239514468_400.jpg'),
(34, 'izmir kofte', '1 porsiyon', 348, 'http://bitarifimvar.com/wp-content/uploads/2013/11/izmir-kofte.jpg'),
(36, 'kabak dolma', '1 porsiyon', 247, 'http://bitarifimvar.com/wp-content/uploads/2013/11/kabak-dolmasi-tarifi.jpg'),
(38, 'karniyarik', '1 porsiyon', 270, 'http://bitarifimvar.com/wp-content/uploads/2013/12/sebzeli-karniyarik-tarifi.jpg'),
(40, 'kadinbudu kofte', '1 porsiyon', 1237, 'http://bitarifimvar.com/wp-content/uploads/2013/12/kadinbudu-kofte-tarifi.jpg'),
(42, 'kis turlusu', '1 porsiyon', 238, 'http://bitarifimvar.com/wp-content/uploads/2014/01/zeytinyagli-kis-turlusu-tarifi.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
