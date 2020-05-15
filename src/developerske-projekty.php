<?php include "./components/header.php" ?>
<?php include "./components/navbar.php" ?>

<section id="banner-develop">
	<div class="overlay" style="background-image: url(/images/slide2.png);"></div>
	<div class="container">
		<div class="row text-center">
			<div class="headline-wrapper">
				<h1 id="clip">Developerské<br>projekty</h1>
			</div>
		</div>
	</div>
</section>
<section id="develop-projects">
	<div class="container py-5 py-md-6">
		<div class="row">
			<div class="col-12 py-3 py-md-5">
				<div class="row">
					<div class="col-md-4 order-2 order-md-1">
						<div id="project1" class="project pt-4">
							<h2 class="h1">
								Vila Lužná</h2>
							<p>
								2018 <span class="hr mx-2"></span> Rodinné domy <span class="hr mx-2"></span> Lužná
							</p>
							<a href="" class="btn btn-white-transparent d-none d-md-block">
								Zobraziť detail projektu
							</a>
						</div>
					</div>
					<div class="col-md-8 order-1 order-md-2" >
						<div class="image-item" style="background-image: url(/images/lilum1.png);">			
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 py-3 py-md-5">
				<div class="row">
					<div class="col-md-8">
						<div class="image-item" style="background-image: url(/images/lilum2.png);">			
						</div>
					</div>
					<div class="col-md-4">
						<div id="project2" class="project pt-4 pl-xl-5">
							<h2 class="h1">
								Lilum</h2>
							<p>
								2018 <span class="hr mx-2"></span> Rodinné domy <span class="hr mx-2"></span>Bratislava
							</p>
							<a href="" class="btn btn-white-transparent d-none d-md-block">
								Zobraziť detail projektu
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 py-3 py-md-5">
				<div class="row">
					<div class="col-md-4 order-2 order-md-1">
						<div id="project1" class="project pt-4">
							<h2 class="h1">
								Štvorlístok
							</h2>
							<p>
								2018 <span class="hr mx-2"></span> Rodinné domy <span class="hr mx-2"></span>Trnava
							</p>
							<a href="" class="btn btn-white-transparent d-none d-md-block">
								Zobraziť detail projektu
							</a>
						</div>
					</div>
					<div class="col-md-8 order-1 order-md-2">
						<div class="image-item" style="background-image: url(/images/lilum1.png);">			
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 py-3 py-md-5">
				<div class="row">
					<div class="col-md-8">
						<div class="image-item" style="background-image: url(/images/lilum2.png);">			
						</div>
					</div>
					<div class="col-md-4">
						<div id="project2" class="project pt-4 pl-xl-5">
							<h2 class="h1">
								Byty Miko
							</h2>
							<p>
								2018 <span class="hr mx-2"></span> Rodinné domy <span class="hr mx-2"></span>Trnava
							</p>
							<a href="" class="btn btn-white-transparent d-none d-md-block">
								Zobraziť detail projektu
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="blog-interest">
	<div class="container py-md-6 py-4">
		<div class="row">
			<div class="col-md-8">
				<h2>Najnovšie z blogu</h2>
			</div>
			<div class="col-md-4 text-md-right">
				<a href="/ponuka" class="underline mt-5 d-block right">Zobraziť všetky</a>
			</div>
		</div>
		<div class="row ponuka pt-md-5 pt-4 blog">
				<?php include "./components/blog-part.php" ?>
				<?php include "./components/blog-part.php" ?>
				<?php include "./components/blog-part.php" ?>
		</div>
	</div>
</section>

<?php include "./components/footer.php" ?>