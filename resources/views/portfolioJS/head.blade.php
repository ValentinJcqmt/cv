<meta charset="UTF-8">
<meta name="description" content="Description à ajouter">
<meta name="keywords" content="site, vitrine, portfolio, theatre, roman, livre, romans, livres">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="icon" type="image/css" href="assets/img/favicon.png">
<style type="text/css">
								/* STYLE DE LA NAV */
	@font-face {font-family: "Karla"; src: url('../font/Karla-Regular.ttf');}


	nav{
		width: 12%;
		z-index:1;
		height: 100%;
		left: 0px;
		top:0px;
		background-color: #30302F;
		position: fixed;
		color: white;
		font-family: Karla;
	}

	nav div{
		font-weight: normal;
		background-color: #555555;
		line-height: 34pt;
		border-bottom: #222222 4px solid;
	}

	nav img{
		width: 70%;
		height: auto;
	}

	a{
		text-decoration: none;
		color: inherit;
		display: inline-block;
	}

	b{
		font-weight: bold;
	}

	.bold{
		font-weight: bold;
		font-style: normal;
	}

	.italic{
		font-style: italic;
	}

	nav h1{
		font-size: 26pt;
		font-weight: normal;
		font-family: Karla;
	}

	nav ul{
		text-align: center;
		height: auto;
		line-height: auto;
		margin-top: 0%;
		padding: 0%;
	}

	nav li{
		font-size: 20pt;
		display: inline-block;
		padding: 10%;
		cursor: pointer;
		transition: background-color 0.3s;
	}

	nav li:hover{
		background-color: #444444;
	}

	nav li:active{
		background-color: #222222;
	}


								/* STYLE DES ARROWS */
	.arrow{
		z-index: 1;
		position: fixed;
		height: auto;
		width: 80px;
		cursor: pointer;
		opacity: 0.85;
		transition: opacity 0.2s;
	}

	.arrow:hover{
		opacity: 1.0;
	}

	#leftArrow{
		top:42%;
		left:12.5%;
	}

	#rightArrow{ 
		top:42%; 
		right:0.5%;
	}

	#topArrow{  
		top:0.5%; 
		left:51.5%;
	}

	#bottomArrow{ 
		bottom: 0.5%; 
		left: 51.5%;
	}	



								/* STYLE DU MAPPING */
	#map{
		position:fixed; 
		z-index:1; 
		border: 1px solid rgba(255,255,255,0.5); 
		width:70px; 
		height:50px; 
		top:1%; 
		right:0.5%; 
		background-color: rgba(0,0,0,0.25);
	}

	#mapPosition{
		position: relative; 
		width: 35px; 
		height: 25px; 
		top:0px; 
		background-color:white; 
		opacity: 0.25; 
		right:0px; 
		transition: top 0.6s, left 0.6s;
		color: white;
	}



								/* STYLE DES SECTIONS */

	body{
		overflow:hidden;
		margin:0px;
		cursor: default;
	}


	#main{
		width:184%; 
		height:200%; 
		position: relative; 
		background-color: green; 
		top:0%;  
		transition: top 0.65s, right 0.65s, margin-right 0.65s;
		color: white;
		font-family: Karla;

	}

	section{
		height:50% !important;
		width:50% !important; 
		float:left; 
		opacity:1;
		text-align: center;
	}

	::selection{
		background-color: white;
		color : #46854C;
	}

	#presentation{
		background-color: #5DB065; 
	}

	#bibliographie{
		background-color: #66BF6E; 
	}

	#contact{
		background-color: #66BF6E; 
	}

	#theatre{
		background-color: #5DB065; 
	}



									/* STYLE DE LA LIGHTBOX */



	.lightBoxImage{
		width:10%; 
		height:20%; 
		display: inline-block;
		margin:50px;
		cursor:pointer;
	}

	#lightBoxBackground{
		z-index: 2;
		width: 100%;
		height: 100%;
		position: fixed;
		background-color: rgba(0,0,0,0.7);
		top:0px;
		left:0px;
	}

	#MainDivLightBox{
		text-align: center;
		background-color: rgba(230,230,230,0.87);
		display: block;
		height: 85%;
		width: auto;
		padding: 1%;
		margin: 3%;
	}

	#lightBoxBackground h2{
		font-size: 30pt;
		color: #222222;
		font-weight: bold;
		text-align: center;
	}

	#lightBoxBackground h3{
		font-size: 24pt;
		color: #444444;
		text-align: center;
	}

	#lightBoxBackground #imageLighBox{
		height: 30%;
		width: auto;
		display: block;
		clear: both;
		margin: 0 auto;
	}

	#description{
		font-size: 18pt;
		text-align: center;
		display: inline-block;
		clear: both;
		color: #222222;
		margin: 2% 1% 2%;
	}


	#closeCross{
		width: 100px;
		height: auto;
		position: fixed;
		top: 7%;
		right:3.5%;
		cursor: pointer;
	}

	#title{
		font-size: 18pt;
		text-align: center;
		display: block;
		clear: both;
		color: white;
	}






									/* STYLE DE LA PRESENTATION */


	#photo{
	}

	#presentation{
		text-align: center;
	}

	#presentation img{
	}

	#presentation h2{
		font-size: 36pt;
		font-weight: bold;
	}

	#presentation p{
		font-size: 20pt;
		color: #EEEEEE;
		margin: 0;
	}

	.presentationText{
		font-size: 14pt;
		background-color: rgba(0,0,0,0.2);
		text-align: left;
		text-align: justify;
	}






									/* STYLE DE LA BIBLIOGRAPHIE */

	#bibliographie h2{
		margin-top: 7%;
		font-size: 36pt;
	}

	#bibliographie figure{
		cursor: pointer;
		transition: background-color 0.3s;
		text-align: center;
	}

	#bibliographie figure:hover{
		background-color: rgba(255,255,255,0.4);
	}

	#bibliographie img{
		padding-bottom: 2%;
	}

	#bibliographie .imgList{
		margin: 0;
	}






									/* STYLE DES PIECES DE THEATRE */

	#theatre h2{
		margin-top: 5.5%;
		margin-bottom: 1%;
		font-size: 36pt;
	}

	#theatre figure{
		cursor: pointer;
		font-size: 12pt;
		text-align: center;
		transition: background-color 0.3s;
	}

	#theatre figure:hover{
		background-color: rgba(255,255,255,0.4);
	}

	#theatre img{
	}

	#theatre .imgList{
	}







									/* STYLE DE LA SECTION CONTACT */

	#contact{
		text-align: center;
	}

	#contact figure{
		cursor: pointer;
		transition: background-color 0.3s;
	}

	#contact img{
		opacity: 0.85;
		transition: opacity 0.65s;
	}

	 #contact img:hover{
	 	opacity: 1;
	 }

	#contact h2{
		font-size: 36pt;
	}

	#contact figcaption{
		font-size: 30pt;
		font-weight: bold;
	}


	@media(max-width: 1700px){
		nav h1{
			font-size: 20pt;
		}
	}

	@media(max-width: 1300px){
		nav h1{
			font-size: 10pt;
		}
		#contact img{
		}
		#contact figcaption{
			font-size: 20pt;
		}

		.presentationText{
			font-size: 10pt;
		}
		#photo{
			line-height: 18pt; 
		}
		#photo h2{
			font-size: 16pt;
		}
		#photo p{
			font-size: 11pt;
		}

		nav span{
			line-height: 18pt;
		}

		#description{
			font-size: 12pt;
		}
		#lightBoxBackground h2{
			font-size: 16pt;
		}
		#lightBoxBackground h3{
			font-size: 14pt;
		}
		#lightBoxBackground #imageLighBox{ 
		}
		#closeCross{;
		}


	@media(max-width: 1000px){
		.presentationText{
			font-size: 8pt;
		}
		#bibliographie h2{
			margin-top: 3%;
		}
		#nav h1{
			line-height: 14pt;
		}
	}
	@media(max-width: 1550px){
		.custom-brand{
			font-size: 20pt;
		}
	}
	@media(max-width: 1200px){
		.custom-brand{
			font-size: 14pt;
		}
	}
	@media(max-width: 750px){
		.arrow{
			display: none;
		}
	}
</style>