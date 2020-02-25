<?php 
$timestamp = "2018.12.29T13:34";

$today = new DateTime(); // This object represents current date/time
$today->setTime( 0, 0, 0 ); // reset time part, to prevent partial comparison

$match_date = DateTime::createFromFormat( "Y.m.d\\TH:i", $timestamp );
$match_date->setTime( 0, 0, 0 ); // reset time part, to prevent partial comparison

$diff = $today->diff( $match_date );
$diffDays = (integer)$diff->format( "%R%a" ); // Extract days count in interval

if ($diffDays > 0) {
    
    $rsvp = 'enabled';
    
    if(!empty($_POST)) {
    	require_once 'dodol.php';
    	$nama_lengkap 	= filter_var($_POST['nama_lengkap'], FILTER_SANITIZE_STRING);
    	$email 		 	= filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    	$hadir 			= filter_var($_POST['hadir'], FILTER_SANITIZE_STRING);
    	$jumlah_hadir	= filter_var($_POST['jumlah_hadir'], FILTER_SANITIZE_NUMBER_INT);
    	$pesan			= filter_var($_POST['pesan'], FILTER_SANITIZE_STRING);
    
    	$sql = "INSERT INTO `rsvp` (`nama_lengkap`, `email`, `hadir`, `jumlah_hadir`, `pesan`) VALUES ('$nama_lengkap', '$email', '$hadir', $jumlah_hadir, '$pesan');";
    
    	if ($conn->query($sql) === TRUE) {
    	    ?><script type="text/javascript"> alert("Terimakasih <?php echo $nama_lengkap ?>, Mohon do'a & restunya ya :)");</script><?php
    	} else {
    	   ?><script type="text/javascript"> alert("Hi <?php echo $nama_lengkap ?>, Silakan gunakan email lain untuk kirim RSVP baru :)");</script><?php
    	}
    } 
    
} else {
    $rsvp = 'disabled';
}

?>

<!DOCTYPE HTML>
<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Gitami Ayuningdiah &amp; Risky Muaji - Wedding - 29th DECEMBER 2018</title>
		<meta name="description" content="R S V P • Undangan Pernikahan Gitami Ayuningdiah & Risky Muaji Setya P - 21 Rabi'ul-Akhir 1440 H." />
		
		<link rel="shortcut icon" type="image/x-icon" href="images/lopegita.png" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<style type="text/css">	@font-face {font-family: tulisan; src: url(assets/fonts/Sacramento-Regular.ttf)}.small {line-height: 0.8;font-family: tulisan;}.google-map {position: relative;padding-bottom: 50%;height: 0;overflow: hidden;}.google-map iframe {position: absolute;border: 2px;top: 0;left: 0;width: 100% !important;height: 100% !important;}</style>
		<link rel="stylesheet" href="assets/css/main.css" />		
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body oncontextmenu="return false;" class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
                    	<h1>&#65021;</h1>
						<p>WE ARE TYING THE KNOT</p>
						<h1 class="small" style="font-family: tulisan;">G &nbsp <br> &nbsp R</h1>
						<p>Together forever until Jannah, in syaa Allah. </p>						
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#undangan" class="active">Undangan</a></li>
							<li><a href="#keluarga">Keluarga</a></li>
							<li><a href="#lokasi">Lokasi</a></li>
							<li><a href="#rsvp">R S V P</a></li>
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section id="undangan" class="main">
								<span class="image right"><img src="images/gitami.jpg" alt="Pernikahan Gitami & Risky" /></span>
								<header class="major">
									<h2>Undangan</h2>
									<p>Dengan memohon ridho serta rahmat Allah, kami bermaksud mengundang Bapak/Ibu/Saudara/i untuk dapat menghadiri akad nikah dan walimatul 'urs putra putri kami yang in syaa Allah akan dilaksanakan pada:</p>	
								
								<h3>										
									<dl class="alt">
										<dt><span class="icon fa-calendar"></span></dt>
										<dd>22 Rabi'ul-Akhir 1440 H <br> <sup>29 Desember 2018</sup></dd>
										<dt><span class="icon fa-clock-o"></span></dt>
										<dd>9:00 AM - 2:00 PM</dd>
										<dt><span class="icon fa-map-marker"></span> </dt>
										<dd>Gedung Auditorium BBPBAT <br> <sup>Jl. Salabintana No.37, Kota Sukabumi.</sup> </dd>
									</dl>
								</h3>									
								<p>Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila Bapak/Ibu/Saudara/i berkenan hadir dan memberikan doa restu kepada putra putri kami. Jazakumullahu khairan.</p>
								</header>
								<footer class="major">
									<a href="#rsvp" class="button primary icon fa-envelope-o fit"> Buat RSVP </a>
								</footer>
							</section>

						<!-- Keluarga -->
							<section id="keluarga" class="main special">
								<header class="major">
									<h2>Kami yang berbahagia</h2>
									<span class="image"><img src="images/lopegita.png" alt="Pernikahan Gitami & Risky" height="100"/></span>
								</header>
								<div class="row gtr-uniform">
									<div class="col-6 col-12-small">
										<b>Keluarga Wanita</b>
										<h2>Achmad Nurkurdi & E. R. Islamiah</h2>
									</div>
									<div class="col-6 col-12-small">
										<b>Keluarga Pria</b>
										<h2>Asep Saptaji & Sri Mulya Janah</h2>
									</div>									
								</div><br>
								<footer class="major">
									<h2 class="small" style="font-family: tulisan;">
										Gitami Ayuningdiah<br>& Risky Muaji	
									</h2>
								</footer>
							</section>

						<!-- Lokasi -->
							<section id="lokasi" class="main">
								<header class="major">
									<h2>Lokasi acara</h2>
								</header>
								<div class="row gtr-uniform">
									<div class="col-6 col-12-small">
										<div class="google-map">											
											<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15843.308078057786!2d106.934253!3d-6.9112762!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6bff27d067a90702!2sGedung+Auditorium+BBPBAT!5e0!3m2!1sid!2sid!4v1536675172868" width="600" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
										</div> <br>
									</div>
									<div class="col-6 col-12-small">
										<h3 class="major">Akad & Resepsi</h3>
										<dl class="alt">
											<dt><span class="icon fa-calendar"></span></dt>
											<dd>22 Rabi'ul-Akhir 1440 H <br> <sup>29 Desember 2018</sup></dd>
											<dt><span class="icon fa-clock-o"></span></dt>
											<dd>9:00 AM - 2:00 PM</dd>
											<dt><span class="icon fa-map-marker"></span></dt>
											<dd>Gedung Auditorium BBPBAT <br> <sup>Jl. Salabintana No.37 Selabatu, Cikole, Kota Sukabumi, Jawa Barat - Indonesia.</sup> </dd>
										</dl>
										<a href="https://goo.gl/maps/rMKppxbBmVw" target="_blank" class="button icon fa-map-marker fit">Buka Map</a>	
									</div>
								</div>
							</section>

						<!-- RSVP -->
							<section id="rsvp" class="main">
								<header class="major">
									<h2>R S V P</h2>
								</header>
								<div class="row gtr-uniform">
									<form method="post" action="">
									<h3>Bersediakah hadir di pernikahan kami?</h3>
										<div class="row gtr-uniform">
											<div class="col-6 col-12-medium">
												<input type="radio" id="hadir" name="hadir" value="y" required/>
												<label for="hadir">Ya, dengan senang hati <span class="icon fa-smile-o"></span></label>
											</div>
											<div class="col-6 col-12-medium">
												<input type="radio" id="tidak" name="hadir" value="n"/>
												<label for="tidak">Maaf, saya berhalangan hadir <span class="icon fa-frown-o"></span></label>
											</div>
											<div class="col-5 col-12-medium">
												<input type="text" name="nama_lengkap" placeholder="Nama Lengkap*" minlength="3" maxlength="128" required/>
											</div>
											<div class="col-4 col-12-medium">
												<input type="email" name="email" placeholder="Email*" minlength="7" required/>
											</div>
											<div class="col-3 col-12-medium">
												<select name="jumlah_hadir" required>
													<option value="">- Hadir?* -</option>
													<option value="1">1 Orang</option>
													<option value="2">2 Orang</option>
													<option value="3">3 Orang</option>
													<option value="4">4 Orang</option>
													<option value="5">5 Orang</option>
													<option value="6">6 Orang</option>
													<option value="7">7 Orang</option>
												</select>
											</div>
											<div class="col-12">
												<textarea name="pesan" id="pesan" rows="2" minlength="12" placeholder="Pertanyaan, Komentar atau Pesan?"></textarea>
											</div>
											<div class="col-12">
												<input type="submit" value="Kirim RSVP" class="button primary fit" <?=$rsvp?>/>
											</div>											
										</div>
									</form>	
								</div>								
							</section>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<section>
							<blockquote>Yakinlah, ada sesuatu yang menantimu setelah banyak kesabaran (yang kau jalani), yang akan membuatmu terpana hingga kau lupa betapa pedihnya rasa sakit. -Ali bin Abi Thalib-</blockquote>
						</section>
						<section>
							<ul class="icons">
								<li><a href="http://www.facebook.com/share.php?u=http://pernikahangitamirisky.com" target="_blank"" class="icon alt fa-facebook"><span class="label">Bagikan ke Facebook</span></a></li>
								<li><a href="http://twitter.com/intent/tweet?url=http://pernikahangitamirisky.com&amp;text=RSVP+•+Undangan+Pernikahan+Gitami+dan+Risky+-+29+DESEMBER+2018&amp;hashtags=pernikahangitamirisky" target="_blank" class="icon alt fa-twitter"><span class="label">Bagikan ke Twitter</span></a></li>
							</ul>							
						</section>
						<p class="copyright">1440 H &copy; Gitami ♥ Risky</p>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>	
			<!-- <script type="text/javascript" src="assets/js/share.js"></script> -->
			<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5bcbe069e3c0d700119d71f2&product=sticky-share-buttons"></script>
	</body>
</html>