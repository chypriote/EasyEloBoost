	var cpt=1;
function changeimage()
{
	document.getElementById("slider").src="images/slide/slide"+cpt+".jpg";
	cpt++;
	if(cpt == 14) {cpt=1;}
	setTimeout("changeimage()",4000);
}