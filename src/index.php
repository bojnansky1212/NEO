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
				<a href="/ponuka" class="underline mt-4">Zobraziť všetky</a>
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
				<a href="/ponuka" class="underline">Zobraziť všetky</a>
			</div>
		</div>
	</div>
</section>
<section id="develop">
	<div class="container py-5">
		<div class="row">
			<div class="col-md-4 py-6 left">
				<div id="info1" class="info">
					<h5>DEVELOPERSKÉ PROJEKTY</h5>
					<h2>Bytový&nbsp;dom&nbsp;Lilum&nbsp;1</h2>
					<p>2018 <span class="hr mx-2"></span> Rodinné domy <span class="hr mx-2"></span> Bratislava</p>
					<a href="" class="btn btn-white-transparent">Zobraziť detail projektu</a>
				</div>
				<div id="info2" class="info" style="display: none;">
					<h5>DEVELOPERSKÉ PROJEKTY</h5>
					<h2>Bytový&nbsp;dom&nbsp;Lilum&nbsp;2</h2>
					<p>2018 <span class="hr mx-2"></span> Rodinné domy <span class="hr mx-2"></span> Bratislava</p>
					<a href="" class="btn btn-white-transparent">Zobraziť detail projektu</a>
				</div>
				<div id="info3" class="info" style="display: none;">
					<h5>DEVELOPERSKÉ PROJEKTY</h5>
					<h2>Bytový&nbsp;dom&nbsp;Lilum&nbsp;3</h2>
					<p>2018 <span class="hr mx-2"></span> Rodinné domy <span class="hr mx-2"></span> Bratislava</p>
					<a href="" class="btn btn-white-transparent">Zobraziť detail projektu</a>
				</div>
			</div>
			<div class="col-md-8 py-5">
				<div class="develop-slider owl-carousel owl-theme">
					<?php include "./components/develop.php" ?>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="statistics">
	<div class="container py-5">
		<div class="row">
			<div class="col-md-4">
				<h2 class="mb-4">Dlhoročné skúsenosti</h2>
				<a href="" class="underline">Viac o spoločnosti</a>
			</div>
		</div>
		<div class="col-md-4">
			<h2 class="h1"><span>10</span>+</h2>
			<h4>Rokov na trhu</h4>
		</div>
	</div>
</section>

<?php include "./components/footer.php" ?>