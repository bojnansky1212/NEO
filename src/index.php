<?php include "./components/header.php" ?>
<?php include "./components/navbar.php" ?>
<?php include "./components/pre-loader.php"?>

<a href="#ponuka" class="scroll"><i class="fas fa-angle-double-down"></i></a>
<section id="banner" class="position-relative">
	<div class="banner owl-carousel owl-theme">
		<div class="item position-relative" >
			<div class="bg"style="background-image: url(/images/slide1.jpg);"></div>
			<div class="container">
				<div class="col-xl-8 col-md-10">
					<div class="vertical-center pb-xl-0 pb-5">
						<div class="ce text-md-left text-center">
							<h5>O spoločnosti</h5>
							<h2 class="h1">Sme Neoreal. <br>Spoľahlivý partner <br>pre realitné projekty</h2>
							<a href="" class="btn btn-white-transparent mt-4">Chcem vedieť viac</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="item position-relative" >
			<div class="bg"style="background-image: url(/images/slide2.jpg);"></div>
			<div class="container">
				<div class="col-xl-8 col-md-10">
					<div class="vertical-center pb-xl-0 pb-5">
						<div class="ce text-md-left text-center">
							<h5>Developerské projekty</h5>
							<h2 class="h1">Premýšľame v&nbsp;detailoch, <br>ponúkame komplexné <br>riešenia</h2>
							<a href="" class="btn btn-white-transparent mt-4">Chcem vedieť viac</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="item position-relative" >
			<div class="bg"style="background-image: url(/images/slide3.jpg);"></div>
			<div class="container">
				<div class="col-xl-8 col-md-10 ">
					<div class="vertical-center pb-xl-0 pb-5">
						<div class="ce text-md-left text-center">
							<h5>Nehnuteľnosti</h5>
							<h2 class="h1">Využite naše znalosti <br>pri investícii, kúpe <br>a predaji realít</h2>
							<a href="" class="btn btn-white-transparent mt-4">Chcem predať</a>
							<a href="" class="btn btn-white-transparent mt-4">Chcem kúpiť</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="buttons d-md-block d-none">
		<div class="container">
			<button id="indicator1" class="indicator active" data-slide="1">
				<div class="indicator-img" style="background-image: url(/images/slide1.jpg);"></div>
				<div class="center">
					<p class="m-auto">
						O spoločnosti
					</p>
					<span class="number">01</span>
				</div>
			</button>
			<button id="indicator2" class="indicator" data-slide="2">
				<div class="indicator-img" style="background-image: url(/images/slide2.jpg);"></div>
					<div class="center">
					<p class="m-auto">
						Developerské projekty
					</p>
					<span class="number">02</span>
				</div>
			</button>
			<button id="indicator3" class="indicator" data-slide="3">
				<div class="indicator-img" style="background-image: url(/images/slide3.jpg);"></div>
				<div class="center">
					<p class="m-auto">
						Nehnuteľnosti
					</p>
					<span class="number">03</span>
				</div>
			</button>
		</div>
	</div>
</section>
<section id="ponuka">
	<div class="container py-md-6 py-4">
		<div class="row">
			<div class="col-md-8">
				<h2 class="h1">Vybrané z&nbsp;aktuálnej ponuky</h2>
			</div>
			<div class="col-md-4 text-md-right">
				<a href="/ponuka" class="underline mt-5 d-block right">Zobraziť všetky</a>
			</div>
		</div>
		<div class="row ponuka pt-md-5 pt-4">
				<?php include "./components/ponuka.php" ?>
				<?php include "./components/ponuka.php" ?>
				<?php include "./components/ponuka.php" ?>

				<?php include "./components/ponuka.php" ?>
				<?php include "./components/ponuka.php" ?>
				<?php include "./components/ponuka.php" ?>
		</div>
		<div class="row text-center">
			<div class="col-12 ">
				<a href="/ponuka" class="underline d-md-block d-none">Zobraziť všetky</a>
			</div>
		</div>
	</div>
</section>
<section id="develop">
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-4 left order-lg-1 order-2">
				<div id="info1" class="info">
					<h5>DEVELOPERSKÉ PROJEKTY</h5>
					<h2 class="h1">Bytový dom Lilum 1</h2>
					<p>2018 <span class="hr mx-2"></span> Rodinné domy <span class="hr mx-2"></span> Bratislava</p>
					<a href="" class="btn btn-white-transparent">Zobraziť detail projektu</a>
				</div>
				<div id="info2" class="info" style="display: none;">
					<h5>DEVELOPERSKÉ PROJEKTY</h5>
					<h2 class="h1">Bytový dom Lilum 2</h2>
					<p>2018 <span class="hr mx-2"></span> Rodinné domy <span class="hr mx-2"></span> Bratislava</p>
					<a href="" class="btn btn-white-transparent">Zobraziť detail projektu</a>
				</div>
				<div id="info3" class="info" style="display: none;">
					<h5>DEVELOPERSKÉ PROJEKTY</h5>
					<h2 class="h1">Bytový dom Lilum 3</h2>
					<p>2018 <span class="hr mx-2"></span> Rodinné domy <span class="hr mx-2"></span> Bratislava</p>
					<a href="" class="btn btn-white-transparent">Zobraziť detail projektu</a>
				</div>
			</div>
			<div class="col-lg-8 py-lg-6 py-4 order-lg-2 order-1">
				<div class="develop-slider owl-carousel owl-theme">
					<?php include "./components/develop.php" ?>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="statistics">
	<div class="container py-6">
		<div class="row">
			<div class="col-md-4">
				<h2 class="mb-4">Dlhoročné skúsenosti</h2>
				<a href="" class="underline mb-md-0 mb-4 left">Viac o spoločnosti</a>
			</div>
			<div class="col-md-8 px-md-0">
				<div class="row numbers">
					<div class="col-6">
						<div class="row">
							<div class="col-12">
								<h2 class="h1"><span class="value">10</span>+</h2>
								<h4 class="mb-md-5 mb-3">Rokov na trhu</h4>
							</div>
							<div class="col-12">
								<h2 class="h1"><span class="value">100</span>+</h2>
								<h4 class="mb-md-5 mb-3">Predaných rodinných domov</h4>
							</div>
							<div class="col-12">
								<h2 class="h1"><span class="value">150000</span>+</h2>
								<h4>m<sup>2</sup> predaných pozemkov</h4>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="row">
							<div class="col-12">
								<h2 class="h1"><span class="value">500</span>+</h2>
								<h4 class="mb-md-5 mb-3">Predaných bytov</h4>
							</div>
							<div class="col-12">
								<h2 class="h1"><span class="value">19000</span>+</h2>
								<h4>Prenajatých skladových priestorov</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="staff-slider" class="home">
	<div class="container">	
		<div class="row pt-4 text-center">
			<div class="col-12">
				<div class="staff-slider owl-carousel owl-theme">
					<div class="item">
						<div class="foto">
							<img src="images/typek.png" alt="typek" class="w-100 person-image">
						</div>
					</div>
					<div class="item">
						<div class="foto">
							<img src="images/typek2.png" alt="typek" class="w-100 person-image">
						</div>
					</div>
					<div class="item">
						<div class="foto">
							<img src="images/typek.png" alt="typek" class="w-100 person-image">
						</div>
					</div>
					<div class="item">
						<div class="foto">
							<img src="images/typek2.png" alt="typek" class="w-100 person-image">
						</div>
					</div>
					<div class="item">
						<div class="foto">
							<img src="images/typek.png" alt="typek" class="w-100 person-image">
						</div>
					</div>
					<div class="item">
						<div class="foto">
							<img src="images/typek2.png" alt="typek" class="w-100 person-image">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="referencies">
	<div class="container py-md-6 py-5">
		<div class="row">
			<div class="col-md-4">
				<h2>Povedali<br clear="d-md-block d-none"> o nás</h2>
			</div>
			<div class="col-md-8">
				<div class="referencies owl-carousel owl-theme">
					<div class="item text-justify">
						<p>Oslovila som nemenovanú realitnú kanceláriu pre predaj bytu na Zámockej ulici. Bohužiaľ, ani po 10 mesačnom čakaní a ani po znížení ceny sa nepodarilo nájsť kupcu. Obrátila som sa preto na Arvin & Benet, ktorým sa za necelé 3 týždne podarilo nájsť kupcu. Celá spolupráca prebiehala s vysokou profesionalitou a zároveň v priateľskej atmosfére. Teším sa na ďalšiu spoluprácu!</p>
						<p><strong>Filip Obuvník</strong><span class="ml-auto"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star fail" aria-hidden="true"></i><i class="fa fa-star fail" aria-hidden="true"></i></span></p>
					</div>
					<div class="item text-justify">
						<p>Oslovila som nemenovanú realitnú kanceláriu pre predaj bytu na Zámockej ulici. Bohužiaľ, ani po 10 mesačnom čakaní a ani po znížení ceny sa nepodarilo nájsť kupcu. Obrátila som sa preto na Arvin & Benet, ktorým sa za necelé 3 týždne podarilo nájsť kupcu. Celá spolupráca prebiehala s vysokou profesionalitou a zároveň v priateľskej atmosfére. Teším sa na ďalšiu spoluprácu!</p>
						<p><strong>Filip Obuvník</strong><span class="ml-auto"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star fail" aria-hidden="true"></i><i class="fa fa-star fail" aria-hidden="true"></i></span></p>
					</div>
					<div class="item text-justify">
						<p>Oslovila som nemenovanú realitnú kanceláriu pre predaj bytu na Zámockej ulici. Bohužiaľ, ani po 10 mesačnom čakaní a ani po znížení ceny sa nepodarilo nájsť kupcu. Obrátila som sa preto na Arvin & Benet, ktorým sa za necelé 3 týždne podarilo nájsť kupcu. Celá spolupráca prebiehala s vysokou profesionalitou a zároveň v priateľskej atmosfére. Teším sa na ďalšiu spoluprácu!</p>
						<p><strong>Filip Obuvník</strong><span class="ml-auto"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star fail" aria-hidden="true"></i><i class="fa fa-star fail" aria-hidden="true"></i></span></p>
					</div>
					<div class="item text-justify">
						<p>Oslovila som nemenovanú realitnú kanceláriu pre predaj bytu na Zámockej ulici. Bohužiaľ, ani po 10 mesačnom čakaní a ani po znížení ceny sa nepodarilo nájsť kupcu. Obrátila som sa preto na Arvin & Benet, ktorým sa za necelé 3 týždne podarilo nájsť kupcu. Celá spolupráca prebiehala s vysokou profesionalitou a zároveň v priateľskej atmosfére. Teším sa na ďalšiu spoluprácu!</p>
						<p><strong>Filip Obuvník</strong><span class="ml-auto"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star fail" aria-hidden="true"></i><i class="fa fa-star fail" aria-hidden="true"></i></span></p>
					</div>
				</div>
				<div class="slider-counter"></div>
			</div>
		</div>
	</div>
</section>

<?php include "./components/footer.php" ?>