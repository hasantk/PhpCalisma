<table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">
    <tr height="100" bgcolor="#FF9900">
        <td align="left"><h2 style="color: white;">Banka Hesaplarımız</h2></td>
    </tr>
    <tr height="50">
        <td align="left" style="border-bottom: 1px dashed #CCCCCC;">&nbsp;Site İle İlgili Tüm Banka Hesaplarımızı Detaylı Olarak İnceleyebilirsiniz</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>
            <table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">
            <tr> <?php
                    $BankalarSorgusu = $Veritabanibaglantisi->prepare("SELECT * FROM bankahesaplarimiz");
                    $BankalarSorgusu->execute();
                    $BankaSayisi = $BankalarSorgusu->rowCount();
                    $BankaKayitlari = $BankalarSorgusu->fetchAll(PDO::FETCH_ASSOC);
                    
                    $DonguSayisi = 1;
                    $SutunAdetSayisi = 3;

                foreach ($BankaKayitlari as $Kayitlar) {         
                ?>
                
                    <td width="348">
                        <table align="center" border="0" cellpadding="0" cellspacing="0" style="border: 1px solid #CCCCCC; margin-bottom: 10px;">
                            <tr height="40">
                                <td colspan="4" align="center"><img src="images/<?php echo DonusumleriGeriDondur($Kayitlar["BankaLogosu"]); ?>" border="0"></td>
                            </tr>
                            <tr height="25">
                                <td width="5">&nbsp;</td>
                                <td width="80"><b>Banka Adı</b></td>
                                <td width="10"><b>:</b></td>
                                <td width="253"><?php echo DonusumleriGeriDondur($Kayitlar["BankaAdi"]); ?></td>
                            </tr>
                            <tr height="25">
                                <td width="5">&nbsp;</td>
                                <td><b>Konum</b></td>
                                <td><b>:</b></td>
                                <td><?php echo DonusumleriGeriDondur($Kayitlar["KonumSehir"]); ?> / <?php echo DonusumleriGeriDondur($Kayitlar["KonumUlke"]); ?></td>
                            </tr>
                            <tr height="25">
                                <td width="5">&nbsp;</td>
                                <td><b>Şube Adı</b></td>
                                <td><b>:</b></td>
                                <td><?php echo DonusumleriGeriDondur($Kayitlar["SubeAdi"]); ?></td>
                            </tr>
                            <tr height="25">
                                <td width="5">&nbsp;</td>
                                <td><b>Şube Kodu</b></td>
                                <td>:</td>
                                <td><?php echo DonusumleriGeriDondur($Kayitlar["SubeKodu"]); ?></td>
                            </tr>
                            <tr height="25">
                                <td width="5">&nbsp;</td>
                                <td><b>Para Birimi</b></td>
                                <td><b>:</b></td>
                                <td><?php echo DonusumleriGeriDondur($Kayitlar["ParaBirimi"]); ?></td>
                            </tr>
                            <tr height="25">
                                <td width="5">&nbsp;</td>
                                <td><b>Hesap Adı</b></td>
                                <td><b>:</b></td>
                                <td><?php echo DonusumleriGeriDondur($Kayitlar["HesapSahibi"]); ?></td>
                            </tr>
                            <tr height="25">
                                <td width="5">&nbsp;</td>
                                <td><b>Hesap No</b></td>
                                <td><b>:</b></td>
                                <td><?php echo DonusumleriGeriDondur($Kayitlar["HesapNumarasi"]); ?></td>
                            </tr>
                            <tr height="25">
                                <td width="5">&nbsp;</td>
                                <td><b>İban No</b></td>
                                <td><b>:</b></td>
                                <td><?php echo IbanBicimlendir(DonusumleriGeriDondur($Kayitlar["IbanNumarasi"])); ?></td>
                            </tr>
                        </table>
                    </td>
                <?php
                if($DonguSayisi<$SutunAdetSayisi){
                    ?>
                    <td width="10">&nbsp;</td>
                <?php
                }
                ?>
            <?php
                 $DonguSayisi++;

                 if ($DonguSayisi>$SutunAdetSayisi) {
                    echo "</tr><tr>";
                    $DonguSayisi = 1;
                 }
                }
            ?>
        </tr>
            </table>
        </td>
    </tr>
</table>