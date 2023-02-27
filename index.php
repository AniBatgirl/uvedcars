<!DOCTYPE html>
<html lang="cs">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UVED Cars</title>
	<link rel="stylesheet" href="<?=TEMPLATE_URI?>/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;700&family=Roboto+Condensed:wght@400;700&family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">
	<?php wp_head();?>
</head>
<body>
	<div id="overlay"></div>
	<div id="toprow">
		<div id="logoandname">
			<div  id="logo">
				<a href="#"><img src="<?=TEMPLATE_URI?>/images/logo.webp" alt="logo"></a>
			</div>
			<div id="name">
				<a href="#">
					<h1>shop.uvedcars.cz</h1>
				</a>
			</div>
		</div>
		<div id="contactandcart">
			<div id="contact">
				<div id="phone-container"></div>
				<p id="contact-us">Kontaktujte nás</p>
				<p>+420 775 788 227</p>
			</div>
			<div id="cart">
				<div id="cartcircle">
					<div id="itemcounter">
						<p>2</p>
					</div>
					<div id="cart-bg"></div>
				</div>
				<div id="cart-text">
					<p>0,00 Kč</p>
					<p id="login"><a href="#">Přihlášení</a> | <a href="#">Registrace</a></p>
				</div>
				<div id="search">
					<div id="search-bg"></div>
				</div>
			</div>
		</div>
	</div>
	<div id="menu">
		<a href="#">Úvodní strana <div class="triangle triangle--menu"></div></a>
		<a href="#">Podpora <div class="triangle  triangle--menu"></div></a>
		<a href="#">Obchodní podmínky <div class="triangle  triangle--menu"></div></a>
		<a href="#">Kontakt <div class="triangle  triangle--menu"></div></a>
		<a href="#">Doprava <div class="triangle  triangle--menu"></div></a>
	</div>
    <?php
    if (!is_single()):
    ?>
        <div id="imgandfilter">
		<h2>Pneumatiky, disky, kompletní kola</h2>
		<h3>5000 TYPŮ SKLADEM, DORUČENÍ DO 24HODIN</h3>
		<div id="filter">
			<div class="vehicles">
				<div class="vehicle car">
					<div id="car-bg"></div>
					<p>OSOBNÍ, SUV, 4X4</p>
				</div>
				<div class="vehicle van">
					<div id="van-bg"></div>
					<p>DODÁVKY</p>
				</div>
				<div class="vehicle truck">
					<div id="truck-bg"></div>
					<p>NÁKLADNÍ</p>
				</div>
				<div class="vehicle wheel-cover">
					<div id="cover-bg"></div>
					<p>DISKY</p>
				</div>
			</div>
			<div class="dropdowns">
				<div class="selectBox companies">
					<select>
						<option>Značka</option>
						<option value="tomket">Tomket</option>
						<option value="michelin">Michelin</option>
						<option value="continental">Continental</option>
						<option value="bridgestone">Bridgestone</option>
						<option value="hankook">Hankook</option>
						<option value="goodyear">Good Year</option>
						<option value="pirelli">Pirelli</option>
					</select>
				</div>
				<div class="selectBox width">
					<select>
						<option>Šířka</option>
						<option value="115">115mm</option>
						<option value="125">125mm</option>
						<option value="135">135mm</option>
						<option value="145">145mm</option>
						<option value="155">155mm</option>
						<option value="165">165mm</option>
						<option value="175">175mm</option>
						<option value="185">185mm</option>
						<option value="195">195mm</option>
						<option value="205">205mm</option>
					</select>
				</div>
				<div class="selectBox profile">
					<select>
						<option>Profil</option>
						<option value="55">55mm</option>
						<option value="60">60mm</option>
						<option value="65">65mm</option>
						<option value="70">70mm</option>
						<option value="75">75mm</option>
					</select>
				</div>
				<div class="selectBox diameter">
					<select>
						<option>Průměr</option>
						<option value="15">R15</option>
						<option value="16">R16</option>
						<option value="17">R17</option>
						<option value="18">R18</option>
					</select>
				</div>
				<div class="selectBox season">
					<select>
						<option>Sezóna</option>
						<option value="summer">Letní</option>
						<option value="winter">Zimní</option>
					</select>
				</div>
			</div>
			<div class="search-btn">
				<input type="submit" value="Hledat">
			</div>
		</div>
	</div>
	<div id="tyres">
		<h3>Více něž 2500 pneumatik v nabídce</h3>
		<div id="selection">
			<?= generate_posts()?>


		</div>
		<div id="showMore">
			<a href="#">Zobrazit dalších 30 produktů</a>
		</div>
	</div>
    <?php
    else:
        echo generate_posts();

    endif;
    ?>
	
	<div id="benefits">
		<div id="bestselection">
		<div id="bestselection-bg"></div>
			Velký výběr 
			<span> prodávaných<br> značek</span>
		</div>
		<div id="postage">
			<div id="postage-bg"></div>
			<span>Poštovné <br> od</span> 5000<span>,-</span><span>Kč zdarma</span>
		</div>
		<div id="prices">
			<div id="prices-bg"></div>
			Bezkonkurenční ceny
		</div>
	</div>
	<div id="newsletter">
		<p>Máte zájem o zasílání novinek?</p>
		<input type="submit" value="Odeslat" id="submit">
		<input type="email" id="email" placeholder="Zadejte váš email">
	</div>
	<div id="info">
		<div class="column" id="about">
			<p class="section-headers">Vše o nákupu</p>
			<ul>
				<li><a href="#" title="Úvodní strana">Úvodní strana</a></li>
				<li><a href="#" title="Podpora">Podpora</a></li>
				<li><a href="#" title="Obchodní podmínky">Obchodní podmínky</a></li>
				<li><a href="#" title="Kontakt">Kontakt</a></li>
				<li><a href="#" title="Doprava">Doprava</a></li>
			</ul>
		</div>
		<div class="column" id="location">
			<div class="location-marker"></div>
			<p class="section-headers">Sídlo společnosti</p>
			<ul>
				<li>UVED Company, s.r.o.</li>
				<li>Bulharská 996/20</li>
				<li>101 00 Praha 10 - Vršovice</li>
			</ul>
		</div>
		<div class="column" id="adress">
			<div class="location-marker"></div>
			<p class="section-headers">Doručovací adresa</p>
			<ul>
				<li>UVED Company, s.r.o.</li>
				<li>Mariánské náměstí 73</li>
				<li>686 01 Uherské Hradištět</li>
			</ul>
		</div>
		<div class="column" id="opening">
			<div class="clock-icon"></div>
			<p class="section-headers">Otevírací doba</p>
			<ul>
				<li>Pondělí - Pátek:</li>
				<li>7:00 - 19:00</li>
			</ul>
		</div>
		<p id="copyright">Copyright &copy; 2018 uvedcars.cz | Tvorba www stránek MACHIN.cz</p>
	</div>
	<?php wp_footer();?>
	<script src="<?=TEMPLATE_URI?>/selectBox.js"></script>	
</body>
</html>