<?php include "./components/header.php" ?>
<?php include "./components/navbar.php" ?>

<section id="banner-contact-us">
	<div class="overlay" style="background-image: url(/images/kontakt.png);"></div>
	<div class="container">
		<div class="row text-center">
			<div class="headline-wrapper">
				<h1 id="clip">Kontakt</h1>
			</div>
		</div>
	</div>
</section>
<section id="contact">
	<div class="container py-5 py-md-6">
		<div class="row">
			<div class="col-md-6">
				<h2 class="h1">Spojte sa s nami!</h2>
				<ul class="my-4 pb-3">
					<li>
						<h4 class="mb-0">Mikovíniho 9402/23</h4>
					</li>
					<li>
						<h4 class="mb-0">917 01 Trnava</h4>
					</li>
				</ul>
				<ul class="my-4 pb-3">
					<li>
						<a href="tel:123-456-7890"><h4 class="mb-0">+421 123-456-7890</h4></a>
					</li>
					<li>
						<a href="tel:123-456-7890"><h4 class="mb-0">+421 123-456-7890</h4></a>
					</li>
					<li>
						<h4 class="mb-0">neoreal@neoreal.sk</h4>
					</li>
				</ul>
				<p class="small">IČO: 36664138<br>DIČ: 2022232498<br>IČ DPH:SK2022232498<br>IBAN: SK29 3100 0000 0042 0002 0602</p>
			</div>
			<div class="col-md-6 pt-4">
				<select id="contact-select"	data-placeholder="Všeobecný kontakt" name="flat-number" class="select2">
					<option value=""></option>
					<option value="vseobecny">Všeobecný kontak
					</option>
					<option value="vseobecny">Všeobecný kontak
					</option>
					<option value="vseobecny">Všeobecný kontak
					</option>
				</select>
				<input class="formular" type="text" name="meno" placeholder="Meno a priezvisko">
				<input class="formular" type="text" name="mail" placeholder="Email">
				<input class="formular" type="text" name="mail" placeholder="Telefón">
				<div class="row text-center">
					<div class="col-md-6 col-lg-5 col-xl-4 offset-md-6 offset-lg-7 offset-xl-8">
						<button class="btn btn-black w-100 mb-4" name="submit" value="Odoslať">Odoslať</button>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include "./components/footer.php" ?>