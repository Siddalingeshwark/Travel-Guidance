
var colors= generaterandomcolor(6);
var select=document.querySelectorAll(".color");
var selected= randcolor();
var display=document.getElementById("select");
var mgdis=document.getElementById("msg");

display.innerHTML=selected;

for(var i=0;i<colors.length;i++)
{
	select[i].style.background=colors[i];

	select[i].addEventListener("click", function(){
		var clicked=(this.style.background);
		console.log(clicked,selected);
		if(clicked === selected)
		{
			allbox(clicked);
			mgdis.innerHTML="correct!"

		}
		else{
			this.style.background = "rgb(0, 0, 0)";
			mgdis.innerHTML= "try again!"
		}

	});
}
function allbox(col){
	for(var i=0;i<colors.length ;i++)
	{
		select[i].style.background = col;
	}
}
function randcolor(){
	var num = Math.floor(Math.random() * colors.length);
	return colors[num];
}
function generaterandomcolor(num){
	//creare aarray
	var arr =[];
	// repeate it num times
	for(var i=0; i<num ;i++)
	{
		arr.push(random())
	}

	//return the arr
	return arr

}
function random(){
	var r= Math.floor(Math.random() * 256);

	var g= Math.floor(Math.random() * 256);

	var b= Math.floor(Math.random() * 256);

	return "rgb("+r+", "  + g+", " + b+")";
}