<html>
<head id="head">
	<meta charset="UTF-8">
	<title>Prénom Nom - Website</title>
	<meta name="description" content="Description à ajouter">
	<meta name="keywords" content="site, vitrine, portfolio, theatre, roman, livre, romans, livres">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="{{ url('assets/portfolioJS/css.css') }}">
	<link rel="icon" type="image/png" href="{{ url('assets/portfolioJS/img/favicon.png') }}">
</head>
<body oncontextmenu="return false">
	<nav id="nav">
		<div>
			<h1 class="brand custom-brand">
				Prénom <b>Nom</b>
			</h1>
		</div>
			<ul>
				<li id="presentationMenu"><img alt="Logo Presentation" src="{{ url('assets/portfolioJS/img/presentation_logo.svg') }}"></li>
				<li id="bibliographieMenu"><img alt="Logo Bibliographie" src="{{ url('assets/portfolioJS/img/bibliographie_logo.svg') }}"></li>
				<li id ="theatreMenu"><img alt="Menu Theatre" src="{{ url('assets/portfolioJS/img/theatre_logo.svg') }}"></li>
				<li id="contactMenu"><img alt="Menu Contact" src="{{ url('assets/portfolioJS/img/contact_logo.svg') }}"></li>
			</ul>
	</nav>
	<img id="leftArrow" class="arrow" alt="Left Arrow" src="{{ url('assets/portfolioJS/img/left.svg') }}">
	<img id="rightArrow" class="arrow" alt="Right Arrow" src="{{ url('assets/portfolioJS/img/right.svg') }}">
	<img id="topArrow" class="arrow" alt="Top Arrow" src="{{ url('assets/portfolioJS/img/top.svg') }}">
	<img id="bottomArrow" class="arrow" alt="Bottom Arrow" src="{{ url('assets/portfolioJS/img/bottom.svg') }}">
	<div id="map">
	<div id="mapPosition"></div>
	</div>
	<div id="main">
		
		<section id="presentation">
			<span class="presentationText">
				Lorem ipsum, <em class="bold">Nom prenom</em> Sem libero etiam donec viverra class cras purus in. Sit enim erat mauris suspendisse fusce. Parturient eget hac. Suspendisse sollicitudin sed. Ipsum nascetur elementum ipsum nisl aliquam amet senectus nullam iaculis ante neque consectetuer tristique proin. Lobortis pede neque sed consequat nisl interdum neque nullam feugiat ipsum amet. Tempor ac lacus diamlorem pulvinar luctus. Leo fames luctus id dignissim viverra viverra nulla dolor.
			</span>
			<div id="photo">
				<img src="{{ url('assets/portfolioJS/img/picture.png') }}" alt="nom Prénom" style="width:200px; height:auto;"/>
				<h2>
					Nom Prénom
				</h2>
				<p>
					Lorem ipsum sem libero etiam
				</p>
			</div>
			<span class="presentationText">
				Lorem ipsum, lacus amet sem libero etiam donec viverra class cras purus in. Sit enim erat mauris suspendisse fusce. Parturient eget hac. Suspendisse sollicitudin sed. Ipsum nascetur elementum ipsum nisl aliquam amet senectus nullam iaculis ante neque consectetuer tristique proin. Lobortis pede neque sed consequat nisl interdum neque nullam feugiat ipsum amet. Tempor ac lacus diamlorem pulvinar luctus. Leo fames luctus id dignissim viverra viverra nulla dolor.
			</span>
		</section>
		<section id ="bibliographie">
			<h2>
				Ses romans
			</h2>
			<div class="imgList">
				<figure class="lightBoxImage">
					<img src="{{ url('assets/portfolioJS/img/books/book_cover.png') }}" alt="book_title" style="width:150px; height: auto;">
					<figcaption>
						Titre du livre
					</figcaption>
				</figure>
				<figure class="lightBoxImage">
					<img src="{{ url('assets/portfolioJS/img/books/book_cover.png') }}" alt="book_title" style="width:150px; height: auto;">
					<figcaption>
						Titre du livre
					</figcaption>
				</figure>
				<figure class="lightBoxImage">
					<img src="{{ url('assets/portfolioJS/img/books/book_cover.png') }}" alt="book_title" style="width:150px; height: auto;">
					<figcaption>
						Titre du livre
					</figcaption>
				</figure>
				<figure class="lightBoxImage">
					<img src="{{ url('assets/portfolioJS/img/books/book_cover.png') }}" alt="book_title" style="width:150px; height: auto;">
					<figcaption>
						Titre du livre
					</figcaption>
				</figure>
				<figure class="lightBoxImage">
					<img src="{{ url('assets/portfolioJS/img/books/book_cover.png') }}" alt="book_title" style="width:150px; height: auto;">
					<figcaption>
						Titre du livre
					</figcaption>
				</figure>
				<figure class="lightBoxImage">
					<img src="{{ url('assets/portfolioJS/img/books/book_cover.png') }}" alt="book_title" style="width:150px; height: auto;">
					<figcaption>
						Titre du livre
					</figcaption>
				</figure>
			</div>
		</section>
		<section id ="contact">
			<h2>
				Suivre ses actualités
			</h2>
			<div>
				<a href="#">
					<figure>
						<img src="{{ url('assets/portfolioJS/img/facebook_logo.svg') }}">
						<figcaption>
							Facebook
						</figcaption>
					</figure>
				</a>
				<a href="#">
					<figure>
						<img src="{{ url('assets/portfolioJS/img/twitter_logo.svg') }}">
						<figcaption>
							Twitter
						</figcaption>
					</figure>
				</a>
				<a href="#">
					<figure>
						<img src="{{ url('assets/portfolioJS/img/blog_logo.svg') }}">
						<figcaption>
							Blog
						</figcaption>
					</figure>
				</a>
			</div>
		</section>
		<section id ="theatre">
			<h2>
				 Pièces de théâtres
			</h2>
			<div class="imgList">
				<figure class="lightBoxImage">
					<img src="{{ url('assets/portfolioJS/img/theatre/theatre_picture.png') }}" alt="Titre de la pièce">
					<figcaption>
						Titre de la pièce
					</figcaption>
				</figure>
				<figure class="lightBoxImage">
					<img src="{{ url('assets/portfolioJS/img/theatre/theatre_picture.png') }}" alt="Titre de la pièce">
					<figcaption>
						Titre de la pièce
					</figcaption>
				</figure>
				<figure class="lightBoxImage">
					<img src="{{ url('assets/portfolioJS/img/theatre/theatre_picture.png') }}" alt="Titre de la pièce">
					<figcaption>
						Titre de la pièce
					</figcaption>
				</figure>
				<figure class="lightBoxImage">
					<img src="{{ url('assets/portfolioJS/img/theatre/theatre_picture.png') }}" alt="Titre de la pièce">
					<figcaption>
						Titre de la pièce
					</figcaption>
				</figure>
				<figure class="lightBoxImage">
					<img src="{{ url('assets/portfolioJS/img/theatre/theatre_picture.png') }}" alt="Titre de la pièce">
					<figcaption>
						Titre de la pièce
					</figcaption>
				</figure>
				<figure class="lightBoxImage">
					<img src="{{ url('assets/portfolioJS/img/theatre/theatre_picture.png') }}" alt="Titre de la pièce">
					<figcaption>
						Titre de la pièce
					</figcaption>
				</figure>
				<figure class="lightBoxImage">
					<img src="{{ url('assets/portfolioJS/img/theatre/theatre_picture.png') }}" alt="Titre de la pièce">
					<figcaption>
						Titre de la pièce
					</figcaption>
				</figure>
				<figure class="lightBoxImage">
					<img src="{{ url('assets/portfolioJS/img/theatre/theatre_picture.png') }}" alt="Titre de la pièce">
					<figcaption>
						Titre de la pièce
					</figcaption>
				</figure>
				<figure class="lightBoxImage">
					<img src="{{ url('assets/portfolioJS/img/theatre/theatre_picture.png') }}" alt="Titre de la pièce">
					<figcaption>
						Titre de la pièce
					</figcaption>
				</figure>
				<figure class="lightBoxImage">
					<img src="{{ url('assets/portfolioJS/img/theatre/theatre_picture.png') }}" alt="Titre de la pièce">
					<figcaption>
						Titre de la pièce
					</figcaption>
				</figure>
				
			</div>
		</section>
	</div>
	<script type="text/javascript">
		var pageInit = function(){
			console.log("scripts!");
			var head = document.getElementById("head");
			var script_nav = document.createElement("script");
			var script_lightbox = document.createElement("script");
			script_nav.src = "{{ url('assets/portfolioJS/script_nav.js') }}";
			script_lightbox.src = "{{ url('assets/portfolioJS/script_lightbox.js') }}";
			head.appendChild(script_nav);
			head.appendChild(script_lightbox);
		}
		window.addEventListener("load", pageInit, false);
	</script>
</body>
</html>