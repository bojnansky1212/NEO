<?php
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<div class="navbar-custom <?php if(preg_match('/single-blog\.php/', $actual_link)){echo'bg';} ?>">
	<div class="container">
		<div class="row">
			<div class="col-8">
				<!--<img src="images/neo_logo.svg" alt="logo" class="logo my-4 ml-3"> -->
				<a href="/"><?php echo file_get_contents("images/neo_logo.svg"); ?></a>
			</div>
			<div class="col-4 text-right">
				<button type="button" id="sidebarCollapse" class="navbar-btn active my-4">
				<span></span>
				<span></span>
				<span></span>
			</button>
			</div>
		</div>
	</div>
</div>
<div class="wrapper load-hide">
	<nav id="sidebar" class="active px-md-6 px-4 d-flex">
		<div class="m-auto">
			<h2 class="h1">
				<span>Developerské projekty</span> <br>
				<span class="disabled">Nehnuteľnosti</span> <br>
				<span class="disabled">O spoločnosti</span>
			</h2>
			<div class="row pt-5">
				<div class="col-6">
					<a href="/">Domov</a>
					<a href="/blog">Blog</a>
					<a href="/kontakt">Kontakt</a>
				</div>
				<div class="col-6">
					<a href=""><i class="fa fa-facebook mr-1 ml-1" aria-hidden="true"></i><span class="ml-1"></span>Facebook</a>
					<a href=""><i class="fa fa-instagram mr-2" aria-hidden="true"></i>Instagram</a>
					<a href=""><i class="fab fa-medium mr-2"></i>Medium</a>
				</div>
			</div>
			<div class="row pt-xl-6 pt-4">
				<div class="col-12">
					<h5>Newsletter</h5>
				</div>
				<div class="col-md-9 col-7 pr-0">
					<input type="email" placeholder="Váš e-mail">
				</div>
				<div class="col-md-3 col-4 pl-0">
					<button class="btn btn-white">Odoberať</button>
				</div>
			</div>
		</div>
	</nav>
</div>