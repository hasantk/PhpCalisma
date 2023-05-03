<?php
try {
    $Veritabanibaglantisi = new PDO("mysql:host=localhost;dbname=atikbtdb;charset=UTF8","root","");
} catch (PDOException $Hata){
   //echo "Bağlantı Hatası<br/>" . $Hata->getMessage();// Bu alanı kapatın cunku site hata yaparsa kullanıcılar hata değerini görmesin.
    die();
}

$AyarlarSorgusu = $Veritabanibaglantisi->prepare("Select*From ayarlar LIMIT 1");
$AyarlarSorgusu->execute();
$AyarSayisi = $AyarlarSorgusu->rowCount();
$Ayarlar = $AyarlarSorgusu->fetch(PDO::FETCH_ASSOC);

if($AyarSayisi>0)
{
    $SiteAdi = $Ayarlar["SiteAdi"];
    $SiteTitle = $Ayarlar["SiteTitle"];
    $SiteDescription = $Ayarlar["SiteDescription"];
    $SiteKeywords = $Ayarlar["SiteKeywords"];
    $SiteCopyrightMetni = $Ayarlar["SiteCopyrightMetni"];
    $SiteLogosu = $Ayarlar["SiteLogosu"];
    $SiteEmailAdresi = $Ayarlar["SiteEmailAdresi"];
    $SiteEmailSifresi = $Ayarlar["SiteEmailSifresi"];
    
    $SosyalLinkFacebook = $Ayarlar["SosyalLinkFacebook"];
    $SosyalLinkTwitter = $Ayarlar["SosyalLinkTwitter"];
    $SosyalLinkInstagram = $Ayarlar["SosyalLinkInstagram"];
    $SosyalLinkPinterest = $Ayarlar["SosyalLinkPinterest"];
    $SosyalLinkGmail = $Ayarlar["SosyalLinkGmail"];
    $SosyalLinkYoutube = $Ayarlar["SosyalLinkYoutube"];

}else {
    //echo "Site Ayar Sorgusu Hatalı";//Bu alanı kapatın çünkü site hata yaparsa kullanıcılar hata değerini görmesin
    die();
}

$MetinlerSorgusu = $Veritabanibaglantisi->prepare("Select*From sozlesmelervemetinler LIMIT 1");
$MetinlerSorgusu->execute();
$MetinSayisi = $MetinlerSorgusu->rowCount();
$Metinler = $MetinlerSorgusu->fetch(PDO::FETCH_ASSOC);

if($MetinSayisi>0)
{
    $HakkimizdaMetni = $Metinler["HakkimizdaMetni"];
    $UyelikSozlesmesiMetni = $Metinler["UyelikSozlesmesiMetni"];
    $KullanimKosullariMetni = $Metinler["KullanimKosullariMetni"];
    $GizlilikSozlesmesiMetni = $Metinler["GizlilikSozlesmesiMetni"];
    $MesafeliSatisMetniSozlesmesi = $Metinler["MesafeliSatisMetniSozlesmesi"];
    $TeslimatMetni = $Metinler["TeslimatMetni"];
    $IptalIadeDegisimMetni = $Metinler["IptalIadeDegisimMetni"];
}else {
    //echo "Metinler Sorgusu Hatalı";//Bu alanı kapatın çünkü site hata yaparsa kullanıcılar hata değerini görmesin
    die();
}
?>