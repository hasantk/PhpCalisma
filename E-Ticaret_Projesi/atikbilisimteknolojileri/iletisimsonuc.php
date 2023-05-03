<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'frameworks/PHPMailer/src/Exception.php';
require 'frameworks/PHPMailer/src/PHPMailer.php';
require 'frameworks/PHPMailer/src/SMTP.php';



if (isset($_POST["IsimSoyisim"])) {
    $GelenIsimSoyisim = Guvenlik($_POST["IsimSoyisim"]);
}else{
    $GelenIsimSoyisim = "";
}

if (isset($_POST["EmailAdresi"])) {
    $GelenEmailAdresi = Guvenlik($_POST["EmailAdresi"]);
}else{
    $GelenEmailAdresi = "";
}

if (isset($_POST["TelefonNumarasi"])) {
    $GelenTelefonNumarasi = Guvenlik($_POST["TelefonNumarasi"]);
}else{
    $GelenTelefonNumarasi = "";
}

if (isset($_POST["Mesaj"])) {
    $GelenMesaj = Guvenlik($_POST["Mesaj"]);
}else{
    $GelenMesaj = "";
}

if(($GelenIsimSoyisim!="") and ($GelenEmailAdresi!="") and ($GelenTelefonNumarasi!="") and ($GelenMesaj!="")){
    
    $MailGönder = new PHPMailer(true);
    // Eğer bir hata ile karşılaşırsak yakalamak için
    // Kodlarımızı try catch blogunda yazıyoruz.
    try {
        //Sunucu ayarları
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;           // Hata ayıklamak için debug etkin
        $mail->isSMTP();                                 // SMTP kullanarak gönderim
        $mail->Host       = 'smtp1.ornek.com';           // SMTP sunucusu
        $mail->SMTPAuth   = true;                        // SMTP kimlik doğrulaması etkin
        $mail->Username   = 'smtp-kullanici@ornek.com';       // SMTP kullanıcısı
        $mail->Password   = 'smtp şifre';                     // SMTP şifre
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;   // TLS ile şifreleme etkin
        $mail->Port       = 587;                              // SMTP port
        
        //Karakter ayarları
        $mail->CharSet  ="utf-8";         //Türkçe karakter sorununun önüne geçecektir.
        $mail->Encoding="base64";
        
        // Alıcılar
        $mail->setFrom('gonderen@ornek.com', 'Mailer');
        $mail->addAddress('ahmet@alici.net', 'Ahmet');     // Alıcı
        $mail->addAddress('mehmet@alici.com');             // Ad kısmı opsiyoneldir.
        $mail->addReplyTo('info@ornek.com', 'Bilgi');
        $mail->addCC('cc@ornek.com');
        $mail->addBCC('bcc@ornek.com');
        // Ekler
        $mail->addAttachment('/var/tmp/file.tar.gz');         // Ek kısmı
        $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Ek ismi opsiyoneldir.
        // İçerik
        $mail->isHTML(true);                                  // Mail HTML formatında olacaktır.
        $mail->Subject = 'Mailin Konusu';
        $mail->Body    = 'Burası mesajın gövdesidir. <b>burası bold!</b>';
        $mail->AltBody = 'non-HTML mail istemcileri için mesaj gövdesidir.';
        $mail->send();
        echo 'Mesajınız gönderildi';
    } catch (Exception $e) {
        echo "Mesajınız gönderilemedi. Mailer Hata: {$mail->ErrorInfo}";
    }
    
    if($HavaleBildirimiKaydetKontrol>0){
        header("Location:index.php?SK=20");
        exit();
    }else{
        header("Location:index.php?SK=21");
        exit();
    }
}else{
    header("Location:index.php?SK=22");
        exit();
}
?>