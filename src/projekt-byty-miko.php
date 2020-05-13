<?php include "./components/header.php" ?>
<?php include "./components/navbar.php" ?>

<section id="banner-project">
	<div class="overlay" style="background-image: url(/images/miko.png);"></div>
	<div class="container">
		<div class="row text-center">
			<div class="headline-wrapper">
				<h1 id="clip">Byty Miko</h1>
			</div>
		</div>
	</div>
</section>
<section id="project-info">
	<div class="container py-6">
		<div class="row text-center">
			<div class="col-md-9 m-auto">
				<p class="mb-5">
					2018 <span class="hr mx-2"></span> Rodinné domy <span class="hr mx-2"></span> Trnava
				</p>
				<h2 class="h1 mb-4">Byty Miko</h2>
				<h4 class="mb-4">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut maiores dolor deleniti odit voluptates illum officia adipisci id nesciunt in blanditiis?
				</h4>
				<h4 class="mb-4">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut maiores dolor deleniti odit voluptates illum officia adipisci id nesciunt in blanditiis, a consequuntur iusto voluptas voluptatibus dolorem commodi repellendus? Lorem ipsum dolor sit amet, consectetur adipisicing elit.
				</h4>
				<a href="" class="btn btn-white-transparent mt-2">Bytymiko.sk</a>
			</div>
			<div class="col-md-10 px-md-0 mt-md-6">
				<a data-lightbox="image" href="images/miko.png">
					<img src="images/miko.png" class="w-100" alt="Miko" />
				</a>
				<a data-lightbox="image" href="images/miko.png" class="offseted">
					<img src="images/miko.png" class="w-100" alt="Miko" />
				</a>
				<a data-lightbox="image" href="images/miko.png"></a>			
			</div>								
		</div>
	</div>
</section>
<section id="reasons-why">
	<div class="container">
		<div class="row text-center text-md-left">
			<div class="col-md-5">
				<h2>Prečo bývať<br>v Miko</h2>
			</div>
			<div class="col-md-7">
				<div id="accordion">
				  	<div class="card">
					    <div class="card-header" id="headingOne">
					      	<h3 class="mb-0">
					        	<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Poloha <span class="plus">+</span>
					        	</button>
							</h3>
					    </div>
					    <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
					      <div class="card-body">
					        <p class="ml-5">
					        	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
					        </p>
					    	</div>
						</div>
				  	</div>
				  	<div class="card">
					    <div class="card-header" id="headingTwo">
					      	<h3 class="mb-0">
					        	<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseOne">Vyhoda 02 <span class="plus">+</span>
					       		</button>
					       	</h3>
					    </div>
					    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
					      <div class="card-body">
					        <p class="ml-5">
					        	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
					        </p>
					    	</div>
						</div>
				  	</div>
				  	<div class="card">
					    <div class="card-header" id="headingThree">
					      	<h3 class="mb-0">
					        	<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Vyhoda 03 <span class="plus">+</span>
					        	</button>
					        </h3>
					    </div>
					    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
					      <div class="card-body">
					        <p class="ml-5">
					        	Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
					        </p>
					    	</div>
						</div>
				  	</div>
				  	<div class="card">
					    <div class="card-header" id="headingFour">
					      	<h3 class="mb-0">
					        	<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Vyhoda 04 <span class="plus">+</span>
					        	</button>
							</h3>
					    </div>
					    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
					    	<div class="card-body">
					        	<p class="ml-5">
					        		Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
					        	</p>
					    	</div>
						</div>
				  	</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="newest-blog">
	<div class="container py-6">
		<div class="row">
			<div class="col-8">
				<h2>Najnovšie z blogu</h2>
			</div>
			<div class="col-4 text-right">
				<a href="/ponuka" class="underline mt-4">Zobraziť všetky</a>
			</div>
		</div>
		<div class="row ponuka pt-5">
			<?php include "./components/ponuka.php" ?>
			<?php include "./components/ponuka.php" ?>
			<?php include "./components/ponuka.php" ?>
		</div>
	</div>
</section>

<?php include "./components/footer.php" ?>