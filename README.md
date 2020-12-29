
# McCom

Minecraft sunucularına Websend, Websender ve RCON ile komut gönderebilen ilk ve tek sınıf.


## Gereksinimler

 - PHP 7 ve üzeri.

## Kurulum

- [Buraya](https://github.com/BenEgeDeniz/McCom/releases) tıklayarak en son sürümü indirebilirsiniz.
- src dizininde bulunan "mccom_autoloader.php" dosyasını PHP dosyanıza dahil edin.

## Kullanım

```php
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
```

## Geliştirmede Kullanılan Sınıflar

- Websend Sınıfı
- WebsenderAPI Sınıfı
- PHP-Minecraft-Rcon Sınıfı ([Github bağlantısı](https://github.com/thedudeguy/PHP-Minecraft-Rcon))

## Lisans

### Bu kütüphane CC BY-NC-ND 4.0 lisansı altından sunulmaktadır. (Bakınız:  [https://creativecommons.org/licenses/by-nc-nd/4.0](https://creativecommons.org/licenses/by-nc-nd/4.0))
