// ---- lightBox ----
		var titres = [
		"Titre du livre",
		"Titre du livre",
		"Titre du livre",
		"Titre du livre",
		"Titre du livre",
		"Titre du livre",
		"Titre de la pièce",
		"Titre de la pièce",
		"Titre de la pièce",
		"Titre de la pièce",
		"Titre de la pièce",
		"Titre de la pièce",
		"Titre de la pièce",
		"Titre de la pièce",
		"Titre de la pièce",
		"Titre de la pièce",
		];
		var publication = [2013, 2013, 2012, 2011, 2010, 2006, 2004, 2004, 2005, 2006, 2010, 2011, 2011, 2013, 2014, 2014];
		var resume = [
		"Lorem ipsum, lacus amet sem libero etiam donec viverra class cras purus in. Sit enim erat mauris suspendisse fusce. Parturient eget hac. Suspendisse sollicitudin sed. Ipsum nascetur elementum ipsum nisl aliquam amet senectus nullam iaculis ante neque consectetuer tristique proin. Lobortis pede neque sed consequat nisl interdum neque nullam feugiat ipsum amet. Tempor ac lacus diamlorem pulvinar luctus. Leo fames luctus id dignissim viverra viverra nulla dolor.",
		"Lorem ipsum, lacus amet sem libero etiam donec viverra class cras purus in. Sit enim erat mauris suspendisse fusce. Parturient eget hac. Suspendisse sollicitudin sed. Ipsum nascetur elementum ipsum nisl aliquam amet senectus nullam iaculis ante neque consectetuer tristique proin. Lobortis pede neque sed consequat nisl interdum neque nullam feugiat ipsum amet. Tempor ac lacus diamlorem pulvinar luctus. Leo fames luctus id dignissim viverra viverra nulla dolor.",
		"Lorem ipsum, lacus amet sem libero etiam donec viverra class cras purus in. Sit enim erat mauris suspendisse fusce. Parturient eget hac. Suspendisse sollicitudin sed. Ipsum nascetur elementum ipsum nisl aliquam amet senectus nullam iaculis ante neque consectetuer tristique proin. Lobortis pede neque sed consequat nisl interdum neque nullam feugiat ipsum amet. Tempor ac lacus diamlorem pulvinar luctus. Leo fames luctus id dignissim viverra viverra nulla dolor.",
		"Lorem ipsum, lacus amet sem libero etiam donec viverra class cras purus in. Sit enim erat mauris suspendisse fusce. Parturient eget hac. Suspendisse sollicitudin sed. Ipsum nascetur elementum ipsum nisl aliquam amet senectus nullam iaculis ante neque consectetuer tristique proin. Lobortis pede neque sed consequat nisl interdum neque nullam feugiat ipsum amet. Tempor ac lacus diamlorem pulvinar luctus. Leo fames luctus id dignissim viverra viverra nulla dolor.",
		"Lorem ipsum, lacus amet sem libero etiam donec viverra class cras purus in. Sit enim erat mauris suspendisse fusce. Parturient eget hac. Suspendisse sollicitudin sed. Ipsum nascetur elementum ipsum nisl aliquam amet senectus nullam iaculis ante neque consectetuer tristique proin. Lobortis pede neque sed consequat nisl interdum neque nullam feugiat ipsum amet. Tempor ac lacus diamlorem pulvinar luctus. Leo fames luctus id dignissim viverra viverra nulla dolor.",
		"Lorem ipsum, lacus amet sem libero etiam donec viverra class cras purus in. Sit enim erat mauris suspendisse fusce. Parturient eget hac. Suspendisse sollicitudin sed. Ipsum nascetur elementum ipsum nisl aliquam amet senectus nullam iaculis ante neque consectetuer tristique proin. Lobortis pede neque sed consequat nisl interdum neque nullam feugiat ipsum amet. Tempor ac lacus diamlorem pulvinar luctus. Leo fames luctus id dignissim viverra viverra nulla dolor.",		
		"Lorem ipsum, lacus amet sem libero etiam donec viverra class cras purus in. Sit enim erat mauris suspendisse fusce. Parturient eget hac. Suspendisse sollicitudin sed. Ipsum nascetur elementum ipsum nisl aliquam amet senectus nullam iaculis ante neque consectetuer tristique proin. Lobortis pede neque sed consequat nisl interdum neque nullam feugiat ipsum amet. Tempor ac lacus diamlorem pulvinar luctus. Leo fames luctus id dignissim viverra viverra nulla dolor.",		
		"Lorem ipsum, lacus amet sem libero etiam donec viverra class cras purus in. Sit enim erat mauris suspendisse fusce. Parturient eget hac. Suspendisse sollicitudin sed. Ipsum nascetur elementum ipsum nisl aliquam amet senectus nullam iaculis ante neque consectetuer tristique proin. Lobortis pede neque sed consequat nisl interdum neque nullam feugiat ipsum amet. Tempor ac lacus diamlorem pulvinar luctus. Leo fames luctus id dignissim viverra viverra nulla dolor.",		
		"Lorem ipsum, lacus amet sem libero etiam donec viverra class cras purus in. Sit enim erat mauris suspendisse fusce. Parturient eget hac. Suspendisse sollicitudin sed. Ipsum nascetur elementum ipsum nisl aliquam amet senectus nullam iaculis ante neque consectetuer tristique proin. Lobortis pede neque sed consequat nisl interdum neque nullam feugiat ipsum amet. Tempor ac lacus diamlorem pulvinar luctus. Leo fames luctus id dignissim viverra viverra nulla dolor.",		
		"Lorem ipsum, lacus amet sem libero etiam donec viverra class cras purus in. Sit enim erat mauris suspendisse fusce. Parturient eget hac. Suspendisse sollicitudin sed. Ipsum nascetur elementum ipsum nisl aliquam amet senectus nullam iaculis ante neque consectetuer tristique proin. Lobortis pede neque sed consequat nisl interdum neque nullam feugiat ipsum amet. Tempor ac lacus diamlorem pulvinar luctus. Leo fames luctus id dignissim viverra viverra nulla dolor.",		
		"Lorem ipsum, lacus amet sem libero etiam donec viverra class cras purus in. Sit enim erat mauris suspendisse fusce. Parturient eget hac. Suspendisse sollicitudin sed. Ipsum nascetur elementum ipsum nisl aliquam amet senectus nullam iaculis ante neque consectetuer tristique proin. Lobortis pede neque sed consequat nisl interdum neque nullam feugiat ipsum amet. Tempor ac lacus diamlorem pulvinar luctus. Leo fames luctus id dignissim viverra viverra nulla dolor.",		
		"Lorem ipsum, lacus amet sem libero etiam donec viverra class cras purus in. Sit enim erat mauris suspendisse fusce. Parturient eget hac. Suspendisse sollicitudin sed. Ipsum nascetur elementum ipsum nisl aliquam amet senectus nullam iaculis ante neque consectetuer tristique proin. Lobortis pede neque sed consequat nisl interdum neque nullam feugiat ipsum amet. Tempor ac lacus diamlorem pulvinar luctus. Leo fames luctus id dignissim viverra viverra nulla dolor.",		
		"Lorem ipsum, lacus amet sem libero etiam donec viverra class cras purus in. Sit enim erat mauris suspendisse fusce. Parturient eget hac. Suspendisse sollicitudin sed. Ipsum nascetur elementum ipsum nisl aliquam amet senectus nullam iaculis ante neque consectetuer tristique proin. Lobortis pede neque sed consequat nisl interdum neque nullam feugiat ipsum amet. Tempor ac lacus diamlorem pulvinar luctus. Leo fames luctus id dignissim viverra viverra nulla dolor.",		
		"Lorem ipsum, lacus amet sem libero etiam donec viverra class cras purus in. Sit enim erat mauris suspendisse fusce. Parturient eget hac. Suspendisse sollicitudin sed. Ipsum nascetur elementum ipsum nisl aliquam amet senectus nullam iaculis ante neque consectetuer tristique proin. Lobortis pede neque sed consequat nisl interdum neque nullam feugiat ipsum amet. Tempor ac lacus diamlorem pulvinar luctus. Leo fames luctus id dignissim viverra viverra nulla dolor.",		
		"Lorem ipsum, lacus amet sem libero etiam donec viverra class cras purus in. Sit enim erat mauris suspendisse fusce. Parturient eget hac. Suspendisse sollicitudin sed. Ipsum nascetur elementum ipsum nisl aliquam amet senectus nullam iaculis ante neque consectetuer tristique proin. Lobortis pede neque sed consequat nisl interdum neque nullam feugiat ipsum amet. Tempor ac lacus diamlorem pulvinar luctus. Leo fames luctus id dignissim viverra viverra nulla dolor.",		
		"Lorem ipsum, lacus amet sem libero etiam donec viverra class cras purus in. Sit enim erat mauris suspendisse fusce. Parturient eget hac. Suspendisse sollicitudin sed. Ipsum nascetur elementum ipsum nisl aliquam amet senectus nullam iaculis ante neque consectetuer tristique proin. Lobortis pede neque sed consequat nisl interdum neque nullam feugiat ipsum amet. Tempor ac lacus diamlorem pulvinar luctus. Leo fames luctus id dignissim viverra viverra nulla dolor.",		
		];
		var source = [
		"http://my-cv.dev/assets/portfolioJS/img/books/book_cover.png",
		"http://my-cv.dev/assets/portfolioJS/img/books/book_cover.png",
		"http://my-cv.dev/assets/portfolioJS/img/books/book_cover.png",
		"http://my-cv.dev/assets/portfolioJS/img/books/book_cover.png",
		"http://my-cv.dev/assets/portfolioJS/img/books/book_cover.png",
		"http://my-cv.dev/assets/portfolioJS/img/theatre/thatre_picture.png",
		"http://my-cv.dev/assets/portfolioJS/img/theatre/thatre_picture.png",
		"http://my-cv.dev/assets/portfolioJS/img/theatre/thatre_picture.png",
		"http://my-cv.dev/assets/portfolioJS/img/theatre/thatre_picture.png",
		"http://my-cv.dev/assets/portfolioJS/img/theatre/thatre_picture.png",
		"http://my-cv.dev/assets/portfolioJS/img/theatre/thatre_picture.png",
		"http://my-cv.dev/assets/portfolioJS/img/theatre/thatre_picture.png",
		"http://my-cv.dev/assets/portfolioJS/img/theatre/thatre_picture.png",
		"http://my-cv.dev/assets/portfolioJS/img/theatre/thatre_picture.png",
		"http://my-cv.dev/assets/portfolioJS/img/theatre/thatre_picture.png",
		];
		var lightBox = {};
		lightBox.initEvents = function(){
			var images = document.getElementsByClassName("lightBoxImage");
			for ( var i=0; i<images.length; i++){
				images[i].addEventListener("click", lightBox.open, false);
			}
		}
		lightBox.img = "";
		lightBox.nImg = "";
		lightBox.open = function(ev){
			lightBoxOpen = true;
			lightBox.getImg(ev.currentTarget);
			lightBox.img = source[lightBox.nImg];
			console.log(ev.currentTarget);
			lightBox.setBackground();
			lightBox.setMainDivLightBox();
			lightBox.setTitle();
			lightBox.setImage();
			lightBox.setResume();
			lightBox.setCloseCross();
			window.addEventListener("keypress", lightBox.close, false);
		}
		lightBox.getImg = function(node){
			var imageList = document.getElementsByClassName("lightBoxImage");
			for ( var i=0; i<imageList.length; i++){
				if ( node == imageList[i] ){
					lightBox.nImg = i;
					break;
				}
			}
		}

		lightBox.close = function(ev){
			var lightBoxBackground = document.getElementById("lightBoxBackground");
			if ( ev.target.id == "lightBoxBackground" || ev.target.id == "closeCross"){
				lightBoxBackground.parentNode.removeChild(lightBoxBackground);
				lightBoxOpen = false;
				window.removeEventListener("keypress", lightBox.close);
			}
		}
		lightBox.setBackground = function(){
		var main = document.getElementById("main");
		var lightBoxBackground = document.createElement("div")
		lightBoxBackground.id ="lightBoxBackground";
		lightBoxBackground.addEventListener("click", lightBox.close, false);
		main.appendChild(lightBoxBackground);
		}
		lightBox.setMainDivLightBox = function(){
			var lightBoxBackground = document.getElementById("lightBoxBackground");
			var MainDivLightBox = document.createElement("div");
			MainDivLightBox.id = "MainDivLightBox";
			lightBoxBackground.appendChild(MainDivLightBox);
		}
		lightBox.setTitle = function(){
			var MainDivLightBox = document.getElementById("MainDivLightBox");
			var title = document.createElement("span")
			var h2 = document.createElement("h2");
			var h3 = document.createElement("h3");
			title.id = "title";;
			h2.textContent = titres[lightBox.nImg];
			h3.textContent = publication[lightBox.nImg];
			MainDivLightBox.appendChild(title);
			var titleNode = document.getElementById("title");
			titleNode.appendChild(h2);
			titleNode.appendChild(h3);
		}
		lightBox.setImage = function(){
			var MainDivLightBox = document.getElementById("MainDivLightBox");
			var imageNode = document.createElement("img");
			imageNode.src = lightBox.img;
			imageNode.id = "imageLighBox"
			MainDivLightBox.appendChild(imageNode);
		}
		lightBox.setResume = function(){
			var MainDivLightBox = document.getElementById("MainDivLightBox");
			var descNode = document.createElement("span");
			descNode.textContent = resume[lightBox.nImg];
			descNode.id = "description";
			MainDivLightBox.appendChild(descNode);
		}
		lightBox.setCloseCross = function(){
			var MainDivLightBox = document.getElementById("MainDivLightBox");
			var cross = document.createElement("img");
			cross.src = "img/cross.svg"
			cross.id ="closeCross";
			cross.addEventListener("mouseup", lightBox.close, false);
			MainDivLightBox.appendChild(cross);
		}
		lightBox.initEvents();