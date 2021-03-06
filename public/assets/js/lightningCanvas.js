var sublines = [];
var subline = {
	life: null,
	baseLife: null,
	x: null,
	y: null,
	newX: null,
	newY: null,
	lineLength: null,
	dirRight: null,
	dirTop: null,
	interval: null,

	init : function(){
		var scope = this;
		this.interval = setInterval(function(){ scope.draw(); }, 201-App.controls.Speed);
	},
	draw: function(){
		if (App.controls.Directionnal == 'true'){
			if (this.dirRight == 1){
				this.newX = this.x + ( Math.floor( ( Math.random() * this.lineLength ) ) );
			}
			else if (this.dirRight == 0){
				this.newX = this.x - ( Math.floor( ( Math.random() * this.lineLength ) ) );
			}
			if (this.dirTop == 1){
				this.newY = this.y - ( Math.floor( ( Math.random() * this.lineLength ) ) );
			}
			else if (this.dirTop == 0){
				this.newY = this.y + ( Math.floor( ( Math.random() * this.lineLength ) ) );
			}
		}
		else{
			this.dirRight = Math.round(Math.random());
			this.dirTop = Math.round(Math.random());
			if (this.dirRight == 1){
				this.newX = this.x + ( Math.floor( ( Math.random() * this.lineLength ) ) );
			}
			else if (this.dirRight == 0){
				this.newX = this.x - ( Math.floor( ( Math.random() * this.lineLength ) ) );
			}
			if (this.dirTop == 1){
				this.newY = this.y - ( Math.floor( ( Math.random() * this.lineLength ) ) );
			}
			else if (this.dirTop == 0){
				this.newY = this.y + ( Math.floor( ( Math.random() * this.lineLength ) ) );
			}
		}

		App.ctx.beginPath();
		App.ctx.moveTo(this.x, this.y);
		App.ctx.lineTo(this.newX, this.newY);
		App.ctx.stroke();
		App.ctx.closePath();
		if (this.life == null)
			this.life = this.baseLife;
		else
			this.life--;

		if (App.controls.MultiGenerating == 'true')
			App.generate(this.newX, this.newY, this.x, this.y, Math.floor(this.baseLife/2), this.lineLength);

		if(this.life == 0)
			clearInterval(this.interval);

		this.x = this.newX;
		this.y = this.newY;
	}
};


var App={
	canvas:null,
	ctx:null,
	drawing:null,
	canX:null,
	canY:null,

	controls:{
		Life:10,
		Length:30,
		Speed:180,
		Random:15,
		Directionnal:'true',
		MultiGenerating:'true',
		Red:255,
		Green:255,
		Blue:60,
		Clear:function(){
			App.Clear();
		}
	},

	endDraw:function(){
	 	App.drawing = false;
	 	App.ctx.closePath();
	},

	mouseDown:function(ev){
		App.canX = ev.offsetX;
		App.canY = ev.offsetY;
		App.drawing = true;
	},

	mouseMove:function(ev){
	 	if(App.drawing)
	 		App.Draw(ev.offsetX, ev.offsetY);
	},

	Draw:function(x, y){

		App.ctx.lineWidth = 2;
		App.ctx.strokeStyle = "rgba(" + App.controls.Red + ", " + App.controls.Green + ", " + App.controls.Blue + ", " + 1 +")";

	 	App.ctx.beginPath();
		App.ctx.moveTo(App.canX, App.canY);
		App.ctx.lineTo(x, y);
		App.ctx.stroke();

		App.generate(x, y, App.canX, App.canY, App.controls.Life, App.controls.Length);

		App.canX = x;
		App.canY = y;
	},

	generate:function(x, y, oldX, oldY, life, lineLength){
		if ( life > 0){
			var random = (Math.random()*App.controls.Random);

			if ( Math.floor(random) == 0 ){
				var newSubline = Object.create(subline);

				if (oldX < x)
					var dirRight = 1;
				else if (oldX > x)
					var dirRight = 0;
				else if ( oldX == x )
					var dirRight = Math.round(Math.random());

				if (oldY > y)
					var dirTop = 1;
				else if (oldY < y)
					var dirTop = 0;
				else if ( oldY == y )
					var dirTop = Math.round(Math.random());

				newSubline.x = x;
				newSubline.y = y;
				newSubline.baseLife = life;
				newSubline.lineLength = lineLength;
				newSubline.dirRight = dirRight;
				newSubline.dirTop = dirTop;

				sublines.push(newSubline);
				newSubline.init();
			}
		}
	},			

	Clear:function(){
	 	App.ctx.clearRect(0,0,App.canvas.width,App.canvas.height);
	 	sublines = [];
	},

	bindEvent:function(){
		App.canvas.addEventListener('mouseup', App.endDraw, false);
		App.canvas.addEventListener('mouseout', App.endDraw, false);
		App.canvas.addEventListener('mousedown', App.mouseDown, false)
		App.canvas.addEventListener('mousemove', App.mouseMove, false);
	},

	init:function(id){
		App.canvas = document.getElementById("canvas");
		App.ctx = App.canvas.getContext('2d');

		App.bindEvent();

		var gui=new dat.GUI();
		gui.add(App.controls,'Life',1,200).step(1);
		gui.add(App.controls,'Length',1,200).step(1);
		gui.add(App.controls,'Speed',1,200).step(1);
		gui.add(App.controls,'Random',0,50).step(1);
		gui.add(App.controls, 'Directionnal',['true', 'false']);
		gui.add(App.controls, 'MultiGenerating',['true', 'false']);
		gui.add(App.controls,'Red',0,255).step(1);
		gui.add(App.controls,'Green',0,255).step(1);
		gui.add(App.controls,'Blue',0,255).step(1);
		gui.add(App.controls,'Clear');
	}
}

App.init();