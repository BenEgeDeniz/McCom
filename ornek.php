<?php

error_reporting(0);

require "src/mccom_autoloader.php"; // Mccom'u PHP'ye dahil edelim.

$mc = new McCom("127.0.0.1", "9876", "password123", "rcon"); // Parametreler: {Sunucu IP}, {Port}, {Şifre}, {Bağlayıcı (Geçerli değerler: websend, websender, rcon)}

if ($mc->connect() === true) // Sunucuya bağlanarak başarılı olup olmadığını kontrol ediyoruz. Başarılıysa,
{
	$mc->sendCommand("say deneme123"); // Sunucuya deneme komutu gönderiyoruz.
	echo "Komut çalıştırıldı."; // Komutun çalıştırıldığını ekrana yazdırıyoruz.
}
else // Başarılı değilse,
	echo "Sunucuya bağlanırken bir hata oluştu. Konfigürasyonunuzu kontrol edin."; // Bağlantının başarısız olduğunu ekrana yazdırıyoruz.

?>