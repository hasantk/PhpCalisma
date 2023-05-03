<?php
require_once("settings/ayar.php");
require_once("settings/fonksiyonlar.php");
require_once("settings/sitesayfalari.php");

if(isset($_REQUEST["SK"])){
    $SayfaKoduDegeri =SayiliIcerikleriFiltrele($_REQUEST["SK"]);
}else{
    $SayfaKoduDegeri = 0;
}
?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Language" content="tr">
<meta charset="utf-8">
<meta name="googlebot" content="index, follow">
<meta name="revisit-after" content="7 Days">
<title><?php echo DonusumleriGeriDondur($SiteTitle); ?> </title>
<link type="image/png" rel="icon" href="images/abtlogo.png">
<meta name="description" content="<?php echo DonusumleriGeriDondur($SiteDescription); ?>">
<meta name="keywords" content="<?php echo DonusumleriGeriDondur($SiteKeywords); ?>">
<script type="text/javascript" src="frameworks/jQuery/jquery-3.6.4.min.js" language="javascript"></script>
<link type="text/css" rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="javascript/fonksiyonlar.js" language="javascript"></script>
</head>

<body>
    <table width="1065" height="100%" align="center" border="0" cellpadding="0" cellspacing="0">
        <tr height="40" bgcolor="#a60000">
            <td><img src="images/banner.png" border="0"></td>
        </tr>
        <tr height="110">
            <td>
                <table width="1065" height="30" align="center" border="0" cellpadding="0" cellspacing="0">
                    <tr bgcolor="#0088CC">
                        <td>&nbsp;</td>
                        <td width="20"><img src="images/cikis.png" style="margin-top: 5px;"></td>
                        <td width="70" class="MaviAlanMenusu"><a href="xxx">Giriş Yap</a></td>
                        <td width="20"><img src="images/kullanici.png" style="margin-top: 5px;"></td>
                        <td width="90" class="MaviAlanMenusu"><a href="xxx">Yeni Üye Ol</a></td>
                        <td width="20"><img src="images/sepet.png" style="margin-top: 5px;"></td>
                        <td width="103" class="MaviAlanMenusu"><a href="xxx">Alışveriş Sepeti</a></td>
                    </tr>
                </table>
                <table width="1065" height="80" align="center" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="192"><a href="index.php"><img src="images/<?php echo DonusumleriGeriDondur($SiteLogosu); ?>" border="0"></a></td>
                        <td>
                            <table width="873" height="30" align="center" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="306" class="AnaMenu">&nbsp;</td>
                                    <td width="107" class="AnaMenu"><a href="index.php?SK=0">Sayfa</a></td>
                                    <td width="160" class="AnaMenu"><a href="index.php?SK=1">Referanslar</a></td>
                                    <td width="160" class="AnaMenu"><a href="index.php?SK=2">Hakkımızda</a></td>
                                    <td width="140" class="AnaMenu"><a href="index.php?SK=3">İletişim</a></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td valign="top" ><table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td align="center">
                        <?php
                        if((!$SayfaKoduDegeri) or ($SayfaKoduDegeri=="")or ($SayfaKoduDegeri==0)){
                            include($Sayfa[0]);
                        }else{
                            include($Sayfa[$SayfaKoduDegeri]);
                        }
                        ?><br/>
                    </td>
                </tr>
            </table></td>
        </tr>
        <tr height="210">
            <td>
            <table width="873" align="center" border="0" cellpadding="0" cellspacing="0" bgcolor="#F9F9F9"><!-- height="30" -->
                  <tr height="30">
                    <td width="250" style="border-bottom: 1px dashed #CCCCCC;"><b>&nbsp;Kurumsal</b></td>
                    <td width="22">&nbsp;</td>
                    <td width="250" style="border-bottom: 1px dashed #CCCCCC;"><b>Üyelik & Hizmetler</b></td>
                    <td width="22">&nbsp;</td>
                    <td width="250" style="border-bottom: 1px dashed #CCCCCC;"><b>Sözleşmeler</b></td>
                    <td width="21">&nbsp;</td>
                    <td width="250" style="border-bottom: 1px dashed #CCCCCC;"><b>Bizi Takip Edin</b></td>
                </tr>

                <tr height="30">
                    <td class="AltMenu"><a href="index.php?SK=2">&nbsp;Hakkımızda</a></td>
                    <td>&nbsp;</td>
                    <td class="AltMenu"><a href="xxx">Giriş Yap</a></td>
                    <td>&nbsp;</td>
                    <td class="AltMenu"><a href="index.php?SK=4">Üyelik Sözleşmesi</a></td>
                    <td>&nbsp;</td>
                    <td><table width="250" align="center" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="20"><a href="xxx"><img src="images/facebook.png" border="0" style="margin-top: 5px;"></a></td>
                            <td width="230" class="AltMenu"><a href="<?php echo DonusumleriGeriDondur($SosyalLinkFacebook); ?>" target="blank">Facebook</a></td>
                        </tr>
                    </table></td>
                </tr>

                <tr height="30">
                    <td class="AltMenu"><a href="index.php?SK=10">&nbsp;Banka Hesaplarımız</a></td>
                    <td>&nbsp;</td>
                    <td class="AltMenu"><a href="xxx">Yeni Üye Ol</a></td>
                    <td>&nbsp;</td>
                    <td class="AltMenu"><a href="index.php?SK=5">Kullanım Koşulları</a></td>
                    <td>&nbsp;</td>
                    <td><table width="250" align="center" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="20"><a href="xxx"><img src="images/twitter.png" border="0" style="margin-top: 5px;"></a></td>
                            <td width="230" class="AltMenu"><a href="<?php echo DonusumleriGeriDondur($SosyalLinkTwitter); ?>" target="blank">Twitter</a></td>
                        </tr>
                    </table></td>
                </tr>

                <tr height="30">
                    <td class="AltMenu"><a href="index.php?SK=11">&nbsp;Havale Bildirim Formu</a></td>
                    <td>&nbsp;</td>
                    <td class="AltMenu"><a href="xxx">Sık Sorulan Sorular</a></td>
                    <td>&nbsp;</td>
                    <td class="AltMenu"><a href="index.php?SK=6">Gizlilik Sözleşmesi</a></td>
                    <td>&nbsp;</td>
                    <td><table width="250" align="center" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="20"><a href="xxx"><img src="images/instagram.png" border="0" style="margin-top: 5px;"></a></td>
                            <td width="230" class="AltMenu"><a href="<?php echo DonusumleriGeriDondur($SosyalLinkInstagram); ?>" target="blank">İnstagram</a></td>
                        </tr>
                    </table></td>
                </tr>

                <tr height="30">
                    <td class="AltMenu"><a href="index.php?SK=16">&nbsp;Kargo Nerede?</a></td>
                    <td>&nbsp;</td>
                    <td></td>
                    <td>&nbsp;</td>
                    <td class="AltMenu"><a href="index.php?SK=7">Mesafeli Satış Sözleşmesi</a></td>
                    <td>&nbsp;</td>
                    <td><table width="250" align="center" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="20"><a href="xxx"><img src="images/pinterest.png" border="0" style="margin-top: 5px;"></a></td>
                            <td width="230" class="AltMenu"><a href="<?php echo DonusumleriGeriDondur($SosyalLinkPinterest); ?>" target="blank">Pinterest</a></td>
                        </tr>
                    </table></td>
                </tr>

                <tr height="30">
                    <td class="AltMenu"><a href="index.php?SK=18">&nbsp;İletişim</a></td>
                    <td>&nbsp;</td>
                    <td></td>
                    <td>&nbsp;</td>
                    <td class="AltMenu"><a href="index.php?SK=8">Teslimat</a></td>
                    <td>&nbsp;</td>
                    <td><table width="250" align="center" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="20"><a href="xxx"><img src="images/email.png" border="0" style="margin-top: 5px;"></a></td>
                            <td width="230" class="AltMenu"><a href="<?php echo DonusumleriGeriDondur($SosyalLinkGmail); ?>" target="blank">Gmail</a></td>
                        </tr>
                    </table></td>
                </tr>

                <tr height="30">
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td></td>
                    <td>&nbsp;</td>
                    <td class="AltMenu"><a href="index.php?SK=9">İptal & İade & Değişim</a></td>
                    <td>&nbsp;</td>
                    <td><table width="250" align="center" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="20"><a href="xxx"><img src="images/youtube.png" border="0" style="margin-top: 5px;"></a></td>
                            <td width="230" class="AltMenu"><a href="<?php echo DonusumleriGeriDondur($SosyalLinkYoutube); ?>" target="blank">Youtube</a></td>
                        </tr>
                    </table></td>
                </tr>
            </table>
            </td>
        </tr>
        <tr height="30">
            <td><table width="1065" height="30" align="center" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td align="center"><?php echo DonusumleriGeriDondur($SiteCopyrightMetni); ?></td>
                </tr>
            </table></td>
        </tr>

        <tr height="30">
            <td><table width="1065" height="30" align="center" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td align="center"><img src="images/rapidssl32.png" border="0" style="margin-right: 5px;"><img src="images/internetsecurityshopping.png" border="0" style="margin-right: 5px;"><img src="images/3Dsecuritycard.png" border="0" style="margin-right: 5px;">
                    <img src="images/visacard.png" border="0" style="margin-right: 5px;"><img src="images/mastercard.png" border="0"></td>
                </tr>
            </table></td>
        </tr>
    </table>
</body>
</html>
<?php
$VeritabaniBaglantisi = null;
?>