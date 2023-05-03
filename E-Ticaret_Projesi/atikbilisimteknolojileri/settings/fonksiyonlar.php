<?php
$IPAdresi = $_SERVER["REMOTE_ADDR"];
$ZamanDamgasi = time();
$TarihSaat = date("d.m.y H:i:s" , $ZamanDamgasi);

function RakamlarHaricTumKarakterleriSil($Deger){
    $Islem = preg_replace("/[^0-9]/","",$Deger);
    $Sonuc = $Islem;
    return $Sonuc;
}

function TumBosluklariSil($Deger){
    $Islem = preg_replace("/\s|&nbsp;/","",$Deger);
    $Sonuc = $Islem;
    return $Sonuc;
}

function DonusumleriGeriDondur($Deger){
    $GeriDondur = htmlspecialchars_decode($Deger, ENT_QUOTES);
    $Sonuc = $GeriDondur;
    return $Sonuc;
}

function Guvenlik($Deger){
    $BoslukSil = trim($Deger);
    $TaglariTemizle = strip_tags($BoslukSil);
    $EtkisizYap = htmlspecialchars($TaglariTemizle,ENT_QUOTES);
    $Sonuc = $EtkisizYap;
    return $Sonuc;
}

function SayiliIcerikleriFiltrele($Deger){
    $BoslukSil = trim($Deger);
    $TaglariTemizle = strip_tags($BoslukSil);
    $EtkisizYap = htmlspecialchars($TaglariTemizle,ENT_QUOTES);
    $Temizle = RakamlarHaricTumKarakterleriSil($EtkisizYap);
    $Sonuc = $Temizle;
    return $Sonuc;
}

function IbanBicimlendir($Deger){
    $BoslukSil = trim($Deger); /*Bastaki ve Sondaki Bosluklari Siler.*/
    $TumBoslukSil = TumBosluklariSil($BoslukSil);
    $BirinciBlok = substr($TumBoslukSil,0,4);
    $IkinciBlok = substr($TumBoslukSil,4,4);
    $UcuncuBlok = substr($TumBoslukSil,8,4);
    $DortuncuBlok = substr($TumBoslukSil,12,4);
    $BesinciBlok = substr($TumBoslukSil,16,4);
    $AltinciBlok = substr($TumBoslukSil,20,4);
    $YedinciBlok = substr($TumBoslukSil,24,2);
    $Duzenle = $BirinciBlok . " " . $IkinciBlok . " " . $UcuncuBlok . " " . $DortuncuBlok . " " . $BesinciBlok . " " . $AltinciBlok . " " . $YedinciBlok;
    $Sonuc = $Duzenle;
    return $Sonuc;

    /* TR00 0000 0000 0000 0000 0000 00 */
}

?>