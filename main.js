/*
*/
function activateElements(elem)
{
	list = $("#projectList")[0];
	
	for(i=1; i<(list.childNodes.length-1);i++)
		if(list.childNodes[i].childNodes[0].hasAttribute(elem))
			list.childNodes[i].childNodes[0].className = "disabled";
		else
			list.childNodes[i].childNodes[0].className = "";
}