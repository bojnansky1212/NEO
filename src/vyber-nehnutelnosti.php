<?php include "./components/header.php" ?>
<?php include "./components/navbar.php" ?>

<section id="banner-properties">
	<div class="overlay" style="background-image: url(/images/nehnutelnost.png);"></div>
	<div class="container d-flex h-100">
		<div class="row my-md-auto">
			<div class="col-12 text-center">
				<h1 class="mb-5 mt-6 mt-md-0">Vyberte si nehnuteľnosť</h1>
			</div>
			<div class="col-md-10 m-md-auto">
				<div class="row filtration">
					<div class="col">
						<div class="row h-md-100">
							<div class="col-md-3 border-style py-4">
								<div class="d-flex h-md-100">
									<div class="my-md-auto w-100">
										<p class="mb-1">Typ</p>
										<select id="filter-sales" data-placeholder="Predaj" name="filter" class="select2">
											<option value=""></option>
											<option value="sale">Predaj
											</option>
											<option value="sale">Predaj
											</option>
											<option value="sale">Predaj
											</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-5  border-style py-4">
								<div class="d-flex h-md-100">
									<div class="my-md-auto w-100">
										<p class="mb-1">Lokalita</p>
										<select id="filter-location" data-placeholder="Bratislava" name="filter" class="select2">
											<option value=""></option>
											<option value="BA">Bratislava
											</option>
											<option value="BA-RU">Bratislava-Ruzinov
											</option>
											<option value="BA">Bratislava
											</option>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-4 py-4">
								<div class="d-flex h-md-100">
									<div class="my-md-auto w-100">
										<p class="mb-1">Cena(€)</p>
										<select id="filter-price" data-placeholder="200000-400000" name="filter" class="select2">
											<option value=""></option>
											<option value="150000-200000">150000-200000
											</option>
											<option value="200000-300000">200000-300000
											</option>
											<option value="300000-400000">300000-400000
											</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col px-0 search">
						<button>
							<i class="fas fa-search m-auto"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="ponuka">
	<div class="container py-md-6 py-4">
		<div class="row">
			<div class="col-md-8">
				<h2 class="gray-light d-inline-block">Nájdených: </h2>
				<h2 class="d-inline-block ml-3">X ponúk</h2>
			</div>
			<div class="col-md-4 text-md-right">
				<div class="alignment">
					<p class="d-inline-block mb-0 mt-4">Zoradiť podľa: </p>
					<select id="filter-date" data-placeholder="Dátum pridania" name="filter" class="select2">
						<option value=""></option>
						<option value="added">Dátum pridania
						</option>
						<option value="added">Dátum pridania
						</option>
						<option value="added">Dátum pridania
						</option>
					</select>
				</div>
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

			<?php include "./components/pagination.php" ?>

		</div>
	</div>
</section>

<?php include "./components/footer.php" ?>