<table width="1065" align="center" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="500" valign="Top">
         <form action="index.php?SK=12" method="post">
            <table width="500" align="center" border="0" cellpadding="0" cellspacing="0">
                <tr height="40">
                    <td style="color:#FF9900"><h3>Havale Bildirim Formu</h3></td>
                </tr>
                <tr height="30">
                    <td valign="top" style="border-bottom: 1px dashed #CCCCCC;">Tamamlanmış olan ödeme formuna iletiniz.</td>
                </tr>
                <tr height="30">
                    <td valign="bottom" align="left">İsim Soyisim(*)</td>
                </tr>
                <tr height="30">
                    <td valign="top" align="left"><input type="text" name="IsimSoyisim" class="InputAlanlari"></td>
                </tr>
                <tr height="30">
                    <td valign="bottom" align="left">E-mail Adresi(*)</td>
                </tr>
                <tr height="30">
                    <td valign="top" align="left"><input type="mail" name="EmailAdresi" class="InputAlanlari"></td>
                </tr>
                <tr height="30">
                    <td valign="bottom" align="left">Telefon Numarası(*)</td>
                </tr>
                <tr height="30">
                    <td valign="top" align="left"><input type="text" name="TelefonNumarasi" maxlength="11" class="InputAlanlari"></td>
                </tr>
                <tr height="30">
                    <td valign="bottom" align="left">Ödeme Yapılan Banka</td>
                </tr>
                <tr height="30">
                    <td valign="top" align="left">
                        <select name="BankaSecimi" class="SelectAlanlari">
                        <?php
                        $BankalarSorgusu = $Veritabanibaglantisi->prepare("SELECT * FROM bankahesaplarimiz ORDER BY BankaAdi ASC");/*bankahesaplarimiz tablosundan sadece banka isimlerini a'dan z'ye sırayla getir */
                        $BankalarSorgusu->execute();
                        $BankaSayisi = $BankalarSorgusu->rowCount();
                        $BankaKayitlari = $BankalarSorgusu->fetchAll(PDO::FETCH_ASSOC);/*fetchAll: Birden fazla banka kaydı alınacağı için*/
                        foreach ($BankaKayitlari as $Bankalar){ 
                        ?>    
                        <option value="<?php echo $Bankalar["id"]; ?>"><?php echo $Bankalar["BankaAdi"]; ?></option>
                        <?php
                        }
                        ?>
                        </select></td>
                </tr>
                <tr height="30">
                    <td valign="bottom" align="left">Açıklama</td>
                </tr>
                <tr height="30">
                    <td valign="top" align="left"><textarea name="Aciklama" class="TextAreaAlanlari"></textarea></td>
                </tr>
                <tr height="40">
                    <td align="center"><input type="submit" value="Bildirimi Gönder" class="YesilButon"></td>
                </tr>
            </table>
            </form>
        </td>
        <td>&nbsp;</td>
        <td width="545" valign="Top">   <table width="500" align="center" border="0" cellpadding="0" cellspacing="0">
                <tr height="40">
                    <td colspan="2" style="color:#FF9900"><h3>İşleyiş</h3></td>
                </tr>
                <tr height="30">
                    <td colspan="2" valign="top" style="border-bottom: 1px dashed #CCCCCC;">Havale / EFT işlemlerinin kontrolü.</td>
                </tr>
                <tr height="5">
                    <td colspan="2" height="5" style="font-size: 5px;">&nbsp;</td>
                </tr>
                <tr height="30">
                    <td align="left" width="30"><img src="images/banka.png" border="0" style="margin-top: 3px;"></td>
                    <td align="left"><b>Havale / EFT İşlemi</b></td>
                </tr>
                <tr height="30">
                    <td colspan="2" align="left">Müşteri tarafından öncelikle banka hesaplarımız sayfasında bulunan bankalardan ödeme gerçekleştirilebilir.</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr height="30">
                    <td align="left" width="30"><img src="images/notdefteri.png" border="0" style="margin-top: 3px;"></td>
                    <td align="left"><b>Bildirim İşlemi</b></td>
                </tr>
                <tr height="30">
                    <td colspan="2" align="left">Ödeme işlemlerinizi tamamladıktan sonra "Havale Bildirim Formu" sayfasından müşteri yapmış olduğu ödeme için bildirim formunu doldurarak online olarak gönderir.</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr height="30">
                    <td align="left" width="30"><img src="images/ayarlar.png" border="0" style="margin-top: 3px;"></td>
                    <td align="left"><b>Kontroller</b></td>
                </tr>
                <tr height="30">
                    <td colspan="2" align="left">"Havale Bildirim Formu"'nuz tarafımıza ulaştığı anda ilgili departman tarafından yapmış olduğunuz havale / EFT işlemi ilgili banka üzerinden kontrol edilir.</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr height="30">
                    <td align="left" width="30"><img src="images/onayred.png" border="0" style="margin-top: 3px;"></td>
                    <td align="left"><b>Onay / Red</b></td>
                </tr>
                <tr height="30">
                    <td colspan="2" align="left">Havale bildirimi geçerli ise yönetici ilgili ödeme onayını vererek, siparişinizi teslimat birimine iletilir.</td>
                </tr>
                <tr>
                    <td colspan="2">&nbsp;</td>
                </tr>
                <tr height="30">
                    <td align="left" width="30"><img src="images/saat.png" border="0" style="margin-top: 3px;"></td>
                    <td align="left"><b>Sipariş Hazırlama & Teslimat</b></td>
                </tr>
                <tr height="30">
                    <td colspan="2" align="left">Yönetici ödeme onayından sonra sayfamız üzerinden vermiş olduğunuz sipariş en kısa sürede hazırlanarak kargoya teslim edilir ve tarafınıza ulaştırılır.</td>
                </tr>
            </table></td>
    </tr>
</table>
