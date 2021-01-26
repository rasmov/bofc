<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	@include('includes.main.styles')
</head>
<body class="loading">

	<!-- add karla font -->
	<header>
		<div class="inner">
			<div class="logo"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/123024/wwf-logo.png"></div>
			<div class="burger"></div>
			<nav>
				<a class="active" href="#">Species</a>
				<a href="#">About Us</a>
				<a href="#">Our Work</a>
				<a href="#">Get Involved</a>
			</nav>
			<a href="#" class="donate-link">Donate</a>
		</div>
	</header>

	<main>
		<div id="slider">

			<div class="slider-inner">
				<div id="slider-content">
					<div class="meta">Species</div>
					<h2 id="slide-title">Amur <br>Leopard</h2>
					<span data-slide-title="0">Amur <br>Leopard</span>
					<span data-slide-title="1">Asiatic <br>Lion</span>
					<span data-slide-title="2">Siberian <br>Tiger</span>
					<span data-slide-title="3">Brown <br>Bear</span>
					<div class="meta">Status</div>
					<div id="slide-status">Critically Endangered</div>
					<span data-slide-status="0">Critically Endangered</span>
					<span data-slide-status="1">Endangered</span>
					<span data-slide-status="2">Endangered</span>
					<span data-slide-status="3">Least Concern</span>
				</div>
			</div>

			<img src="{{ asset('images/4.jpg') }}" />
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/123024/lion2.jpg" />
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/123024/tiger2.jpg" />
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/123024/bear2.jpg" />

			<div id="pagination">
				<button class="active" data-slide="0"></button>
				<button data-slide="1"></button>
				<button data-slide="2"></button>
				<button data-slide="3"></button>
			</div>

		</div>
	</main>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r83/three.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.4/imagesloaded.pkgd.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>
	<script src="{{ asset('js/scripts/webgl.js') }}"></script>
</body>
</html>