var chess=document.getElementById('chess')
var context=chess.getContext('2d')
var me=true;
var borad=[];
if($(window).width()<480){
	chess.width=300
	chess.height=300
}else{
	chess.width=450
	chess.height=450
}

var width = $(chess).width();
var len;
var margin;

// if(width==600){
// 	len=width/30;
// 	margin=len/2;
// }else if(width==450){

// }else{
// 	len=width/15;
// 	margin=len/2;
// }
for (var i = 0; i <15; i++) {
	borad[i]=[];
	for (var j = 0; j <15; j++) {
		borad[i][j]=0
	}
}
context.strokeStyle='#BFBFBF'
var img=new Image()
img.src="Public/Uploads/2016-07-26/57972481b395e.jpg"
img.onload=function(){
	if($(window).width()<480){
		len=width/15;
		margin=len/2;
		context.drawImage(img,0,0,width,width)
		for (var i = 0; i <15; i++) {
			context.moveTo(margin+len*i,margin)
			context.lineTo(margin+len*i,(width-margin))
			context.stroke()
			context.moveTo(margin,(margin+len*i))
			context.lineTo(width-margin,(margin+len*i))
			context.stroke()
		}
	}else{
		len=width/15;
		margin=len/2;
		context.drawImage(img,0,0,width,width)
		for (var i = 0; i <15; i++) {
			context.moveTo(margin+len*i,margin)
			context.lineTo(margin+len*i,(width-margin))
			context.stroke()
			context.moveTo(margin,(margin+len*i))
			context.lineTo(width-margin,(margin+len*i))
			context.stroke()
		}
	}
	
}


function oneStep(x,y,me){
	context.beginPath()
	context.arc(x,y,margin-2,0,2*Math.PI)
	var grad=context.createRadialGradient(x,y,margin-2,x,y,0)
	if(me){
		grad.addColorStop(0,"#0A0A0A")
		grad.addColorStop(1,"#636363")
	}else{
		grad.addColorStop(0,"#D1D1D1")
		grad.addColorStop(1,"#F9F9F9")
	}
	context.fillStyle=grad
	context.fill()
	context.closePath()
}
chess.onclick=function(e){
	var x=e.offsetX;
	var y=e.offsetY;
	var i=Math.floor(x/len);
	var j=Math.floor(y/len);
	// console.log(x);
	// console.log(y);
	// console.log(i);
	// console.log(j);
	if(borad[i][j]==0){
		oneStep((len*i+margin),(len*j+margin),me)
		me=!me;
		borad[i][j]=1;
	}
}
