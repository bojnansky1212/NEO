<?php include "./components/header.php" ?>
<?php include "./components/navbar.php" ?>

<section id="blog">
	<div class="container py-5">
		<div class="row mt-7">
			<div class="col-md-4">
				<h1>Blog</h1>
			</div>
			<div class="col-md-8 text-right">
				<p class="d-inline-block">Kategórie</p>
				<a href="" class="btn btn-white-transparent">Bývanie</a>
				<a href="" class="btn btn-white-transparent">Developeri</a>
				<a href="" class="btn btn-white-transparent">Bývanie</a>
				<a href="" class="btn btn-white-transparent">Developeri</a>
			</div>
		</div>
	</div>
</section>

<section id="blog-interest">
	<div class="container py-md-6 py-4">
		<div class="row">
			<div class="col-md-8">
				<h2>Mohlo by vás zaujímať</h2>
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