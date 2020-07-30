var secnum=9;

var num=Number(prompt("enter any number"));

if(num===secnum){
	alert("your guess is right");
}
else if(num<secnum){
	alert("too less,try again!");

}
else
{
	alert("high number,try again!");
}