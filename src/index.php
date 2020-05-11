<?php include "./components/header.php" ?>
<?php include "./components/navbar.php" ?>
<section id="banner" class="position-relative">
	<div class="banner owl-carousel owl-theme">
		<div class="item position-relative" >
			<div class="bg"style="background-image: url(/images/slide1.png);"></div>
			<div class="container">
				<div class="col-md-8 py-8">
					<h5>O spoločnosti</h5>
					<h2>Sme Neoreal. <br>Spoľahlivý partner <br>pre realitné projekty</h2>
					<a href="" class="btn btn-white-transparent mt-4">Chcem vedieť viac</a>
				</div>
			</div>
		</div>
		<div class="item position-relative" >
			<div class="bg"style="background-image: url(/images/slide2.png);"></div>
			<div class="container">
				<div class="col-md-8 py-8">
					<h5>Developerské projekty</h5>
					<h2>Premýšľame v detailoch, <br>ponúkame komplexné <br>riešenia</h2>
					<a href="" class="btn btn-white-transparent mt-4">Chcem vedieť viac</a>
				</div>
			</div>
		</div>
		<div class="item position-relative" >
			<div class="bg"style="background-image: url(/images/slide3.png);"></div>
			<div class="container">
				<div class="col-md-8 py-8">
					<h5>Nehnuteľnosti</h5>
					<h2>Využite naše znalosti <br>pri investícii, kúpe <br>a predaji realít</h2>
					<a href="" class="btn btn-white-transparent mt-4">Chcem predať</a>
					<a href="" class="btn btn-white-transparent mt-4">Chcem kúpiť</a>
				</div>
			</div>
		</div>
	</div>
	<div class="buttons">
		<div class="container">
			<button id="indicator1" class="indicator active" data-slide="1">
				<div class="indicator-img" style="background-image: url(/images/slide1.png);"></div>
				<div class="center">
					<p class="m-auto">
						O spoločnosti
					</p>
				</div>
			</button>
			<button id="indicator2" class="indicator" data-slide="2">
				<div class="indicator-img" style="background-image: url(/images/slide2.png);"></div>
				<div class="center">
					<p class="m-auto">
						Developerské projekt
					</p>
				</div>
			</div>
			<button id="indicator3" class="indicator" data-slide="3">
				<div class="indicator-img" style="background-image: url(/images/slide3.png);"></div>
				<div class="center">
					<p class="m-auto">
						Nehnuteľnosti
					</p>
				</div>
			</button>
		</div>
	</div>
</section>
<section id="ponuka">
	<div class="container py-5">
		<div class="row">
			<div class="col-8">
				<h2>Vybrané z aktuálnej ponuky</h2>
			</div>
			<div class="col-4 text-right">
				<a href="/ponuka" class="show mt-4">Zobraziť všetky</a>
			</div>
		</div>
		<div class="row ponuka pt-5">
				<?php include "./components/ponuka.php" ?>
				<?php include "./components/ponuka.php" ?>
				<?php include "./components/ponuka.php" ?>

				<?php include "./components/ponuka.php" ?>
				<?php include "./components/ponuka.php" ?>
				<?php include "./components/ponuka.php" ?>
		</div>
		<div class="row text-center">
			<div class="col-12">
				<a href="/ponuka" class="show">Zobraziť všetky</a>
			</div>
		</div>
	</div>
</section>
<section id="develop">
	<div class="container py-5">
		<div class="develop-slider owl-carousel owl-theme">
			<div class="item">
				<div class="row">
					<div class="col-md-5 py-6">
						<h5>DEVELOPERSKÉ PROJEKTY</h5>
						<h2>Bytový&nbsp;dom&nbsp;Lilum</h2>
						<p>2018 <span class="hr mx-2"></span> Rodinné domy <span class="hr mx-2"></span> Bratislava</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<body>

<script src="js/app.js"></script> 

</body>
</html>