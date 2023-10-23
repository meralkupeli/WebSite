<?php
include("baglan.php");
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css"/>
</head>

<body background="resim/arkaplan.jpeg" style="
  no-repeat center fixed; 
  background-size: cover">
</div>
<form action="" method="post" enctype="multipart/form-data">

<div style="width:outo;height:100px;"></div>

<div class="menu" >

<a href="index.php">ANASAYFA</a>
<a href="hakkimizda.php">MOTOSİKLET HAKKINDA</a>
<a href="gorseller.php">GÖRSELLER</a>
<a href="iletisim.php">İLETİŞİM</a>
<p style="color:black; float:right">🇹🇷🏍️🛵MOTOSİKLETLİ KIZ🛵🏍️🇹🇷</p>

</div>

</br>
</br>
<div class="sayfaduzeni">
  <div class="solsutun" >
   <div class="duzen2" >
<div class="tasarim1"  action="" method="post">
<form class="tasarim1"  action="" method="post">
            <label for="ad">Ad Soyad</label>
            <input type="text" name="ad" id="ad">
			<label for="eposta">E-Posta</label>
            <input type="text" name="eposta" id="eposta">
			<label for="sifre">Şifre</label>
            <input type="password" name="sifre" id="sifre"><label ></label>
			<label for="yrm">Yorum</label>
            <input type="text" name="yrm" id="yrm">
            <input type="submit" name="kaydet" id="kaydet" value="GÖNDER">
        </form>
		</div>

		<?php
  	if ($_POST) { // Sayfada post olup olmadığını kontrol ediyoruz.

    // Sayfa yenilendikten sonra post edilen değerleri değişkenlere atıyoruz
    $ad = $_POST['ad']; 
	$mail = $_POST['eposta'];
	$sifre = $_POST['sifre'];
	$yrm = $_POST['yrm'];
        
         // Veri ekleme sorgumuzu yazıyoruz.
        if ($baglanti->query("INSERT INTO melisa (ad,eposta,sifre,yrm) VALUES ('$ad','$mail','$sifre','$yrm')")) 
        {
            echo "<script>"; // Eğer veri eklendiyse eklendi yazmasını sağlıyoruz.
			echo"alert('Eklendi..');";
			echo"</script>";
        }
        else
        {
            echo "<script>"; // Eğer veri eklenmediyse hata yazmasını sağlıyoruz.
			echo"alert('Hata');";
			echo"</script>";
        }
}
?>

	
</div></div>
 <div class="sagsutun">
    <div class="duzen "style="background-color: white; opacity: 0.8;">
	
      <h2 style="color:black background-color: white; opacity: 0.7;">HAKKIMDA</h2>
      <img  src="resim/foto1.jpg" style="padding 20px 18px;border-radius:50%;float:outo;height:140px">
      <p>Bir motosiklet severin bloguna hoş geldiniz.</p>
	  <p>Yazdıklarımı keyifle okumanızı diliyorum.</p> 
	  <p>Beni sosyal medya hesaplarımdan da takip </p><p>edebilirsiniz.</p>
    </div>
    <div class="duzen"style="background-color: white; opacity: 0.8;">
	
       <h2 style="color:black background-color: white; opacity: 0.7;">POPÜLER GÖNDERİLER</h2>
	   <a href="https://www.instagram.com/p/B_CV6vgpqBb/?igshid=19ypqoqeptcn0">
	  <img src="resim/p1.jpg" style="height:145px;border-radius:50%;">
	  <a href="https://www.instagram.com/p/B_CV6vgpqBb/?igshid=19ypqoqeptcn0">
      <img src="resim/p4.jpg" style="height:145px;border-radius:50%;">
	  <a href="https://www.instagram.com/p/B_CV6vgpqBb/?igshid=19ypqoqeptcn0">
	  <img src="resim/p3.jpg" style="height:145px;border-radius:50%;">
	  <a href="https://www.instagram.com/p/B_CV6vgpqBb/?igshid=19ypqoqeptcn0">
	  <img src="resim/p2.jpg" style="height:145px;border-radius:50%;">
    </div>
    <div class="duzen"style="background-color: white; opacity: 0.8; ">
	
      <h2 style="color:black background-color: white; opacity: 0.7;">SOSYAL MEDYA HESAPLARIM</h2>
	  <a href="https://www.instagram.com/misslips07/?hl=tr">
      <img  src="resim/instagram.png" style="width:100px;float:outo;height:40px"></a>
	  <br>
	  <a href="https://www.youtube.com/channel/UCzcLkuhWEoZxX7uRCM601gw/?guided_help_flow=5">
      <img  src="resim/youtube.png" style="width:100px;float:outo;height:40px"></a>
    </div>
  </div>
</div>

<div class="footer"><div class="menu">

  <img src="resim/menuu.jpg"style="padding 20px 18px;border-radius:50%;float:outo">
</div>
<div class="düzenleme"></div>


</div>
</body>
</html>