// ---- Navigation ----
		var lightBoxOpen = false;
		var key = "";
		var nav = {};
		nav.mainDiv = document.getElementById("main");
		nav.horizontal = "";
		nav.vertical = "";
		nav.leftArrow = document.getElementById("leftArrow");
		nav.rightArrow = document.getElementById("rightArrow");
		nav.topArrow = document.getElementById("topArrow");
		nav.bottomArrow = document.getElementById("bottomArrow");
		nav.mapPosition = document.getElementById("mapPosition");
		window.addEventListener("resize", function(ev){
			location.reload();
		});
		nav.resize = function(){
			ocation.reload();
		}
		nav.init = function(){
			nav.bindEvent();
			nav.left();
			nav.top();
		}
		nav.right = function(){
			if( nav.horizontal != "right" ){
				nav.mainDiv.style.right = "84%";
				nav.mainDiv.style.marginLeft = "0%";
				nav.horizontal = "right";
				nav.mapPosition.style.left = 35 + "px",
				nav.arrowEnable();
				nav.menuColor();
			}
		}
		nav.left = function(){
			if ( nav.horizontal != "left" ){
				nav.mainDiv.style.right = "0%";
				nav.mainDiv.style.marginLeft = "12%";
				nav.horizontal = "left";
				nav.mapPosition.style.left = 0 + "px";
				nav.arrowEnable();
				nav.menuColor();
			}
		}
		nav.top = function(){
			if ( nav.vertical != "top" ){
				nav.mainDiv.style.top = 0;
				nav.vertical = "top";
				nav.mapPosition.style.top = 0 + "px";
				nav.arrowEnable();
				nav.menuColor();
			}
		}
		nav.bottom = function(){
			if ( nav.vertical != "bottom" ){
				var pixelHeight = document.body.clientHeight;
				nav.mainDiv.style.top = -pixelHeight;
				nav.vertical = "bottom";
				nav.mapPosition.style.top = 25 + "px";
				nav.arrowEnable();
				nav.menuColor();
			}
		}
		nav.arrowEnable = function(){
			if( nav.horizontal == "left"){
				nav.leftArrow.style.opacity = 0.1;
				nav.leftArrow.style.cursor = "auto";
				nav.leftArrow.removeEventListener("click", nav.left);
				nav.rightArrow.addEventListener("click", nav.right, false);
				nav.rightArrow.style.opacity = "";
				nav.rightArrow.style.cursor = "pointer";
			}
			if( nav.horizontal == "right"){
				nav.rightArrow.style.opacity = 0.1;
				nav.rightArrow.style.cursor = "auto";
				nav.rightArrow.removeEventListener("click", nav.right);
				nav.leftArrow.addEventListener("click", nav.left, false);
				nav.leftArrow.style.opacity = "";
				nav.leftArrow.style.cursor = "pointer";
			}
			if( nav.vertical == "top"){
				nav.topArrow.style.opacity = 0.1;
				nav.topArrow.style.cursor = "auto";
				nav.topArrow.removeEventListener("click", nav.top);
				nav.bottomArrow.style.opacity = "";
				nav.bottomArrow.style.cursor = "pointer";
				nav.bottomArrow.addEventListener("click", nav.bottom, false);
			}
			if( nav.vertical == "bottom"){
				nav.bottomArrow.style.opacity = 0.1;
				nav.bottomArrow.style.cursor = "auto";
				nav.bottomArrow.removeEventListener("click", nav.bottom);
				nav.topArrow.addEventListener("click", nav.top, false);
				nav.topArrow.style.opacity = "";
				nav.topArrow.style.cursor = "pointer";
			}
		}
		nav.menuColor = function(){
			var presentation = document.getElementById("presentationMenu");
			var bibliographie = document.getElementById("bibliographieMenu");
			var theatre = document.getElementById("theatreMenu");
			var contact = document.getElementById("contactMenu");
			if ( nav.horizontal == "left" && nav.vertical == "top" ){
				presentation.style.backgroundColor = "#555555";
				bibliographie.style.backgroundColor = "";
				theatre.style.backgroundColor = "";
				contact.style.backgroundColor = "";
			}
			if ( nav.horizontal == "left" && nav.vertical == "bottom" ){
				contact.style.backgroundColor = "#555555";
				theatre.style.backgroundColor = "";
				bibliographie.style.backgroundColor = "";
				presentation.style.backgroundColor = "";
			}
			if ( nav.horizontal == "right" && nav.vertical == "top" ){
				bibliographie.style.backgroundColor = "#555555";
				theatre.style.backgroundColor = "";
				contact.style.backgroundColor = "";
				presentation.style.backgroundColor = "";
			}
			if ( nav.horizontal == "right" && nav.vertical == "bottom" ){
				theatre.style.backgroundColor = "#555555";
				presentation.style.backgroundColor = "";
				bibliographie.style.backgroundColor = "";
				contact.style.backgroundColor = "";
			}
		}
		nav.keyboard = function(e){
			key = e.keyCode;
			if ( lightBoxOpen != true ){
	    		if ( key == 37 && nav.horizontal != "left")
	    			nav.left();
	    		if ( key == 38 && nav.vertical != "top")
	    			nav.top();
	    		if ( key == 39 && nav.horizontal != "right")
	    			nav.right();
	    		if ( key == 40 && nav.vertical != "bottom")
	    			nav.bottom();
	    	}
		}
		nav.bindEvent = function(){
			window.addEventListener("keydown", nav.preventArrowKey, false);
			nav.leftArrow.addEventListener("click", nav.left, false);
			nav.rightArrow.addEventListener("click", nav.right, false);
			nav.topArrow.addEventListener("click", nav.top, false);
			nav.bottomArrow.addEventListener("click", nav.bottom, false);
			document.body.addEventListener("keydown", nav.keyboard, false);
			var presentation = document.getElementById("presentationMenu");
			var bibliographie = document.getElementById("bibliographieMenu");
			var theatre = document.getElementById("theatreMenu");
			var contact = document.getElementById("contactMenu");
			presentation.addEventListener("click", nav.top, false);
			presentation.addEventListener("click", nav.left, false);
			bibliographie.addEventListener("click", nav.top, false);
			bibliographie.addEventListener("click", nav.right, false);
			theatre.addEventListener("click", nav.bottom, false);
			theatre.addEventListener("click", nav.right, false);
			contact.addEventListener("click", nav.bottom, false);
			contact.addEventListener("click", nav.left, false);
   		}
   		nav.preventArrowKey = function(e){
		    if( key == 37 || key == 38 || key == 39 || key == 40 || key == 32)
		        e.preventDefault();
		}

		nav.init();