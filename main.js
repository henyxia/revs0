/*
*/
function activateElements(elem)
{
	$("html, body").animate({ scrollTop: $('#page').offset().top }, 500);
	list = $("#projectList")[0];
	for(i=1; i<(list.childNodes.length-1);i++)
		if(!list.childNodes[i].childNodes[0].hasAttribute(elem))
			list.childNodes[i].childNodes[0].className = "disabled";
		else
			list.childNodes[i].childNodes[0].className = "";
}

function switchToSubject(url)
{
	$("#page").fadeOut(500, "swing", function (){return true;});
	$("#portfolio-wrapper").fadeOut(500, "swing", function (){return true;});
	$("html, body").animate({ scrollTop: $('#menu-wrapper').offset().top }, 500);
	$("#homeButton").removeClass("current_page_item");
	$("#projectButton").addClass("current_page_item");
	$("#project").html('<div id="loadingContent" class="content" align="center"><p>Content is loading ...</p><img src="img/loading.gif" /></div>');
	var jqxhr = $.ajax("example.php")
	.done(function()
	{
		alert("success");
	})
	.fail(function()
	{
		$("#project").html('<div id="loadingContent" class="content" align="center"><p>The content is not available yet ...</p></div>');
	})/*
	.always(function()
	{
		alert( "complete" );
	});*/
}

function goBackToHome()
{
	$("#page").fadeOut(500, "swing", function (){return true;});
	$("#portfolio-wrapper").fadeIn(500, "swing", function (){return true;});
	$("html, body").animate({ scrollTop: $('#wrapper').offset().top }, 500);
	$("#homeButton").addClass("current_page_item");
	$("#projectButton").removeClass("current_page_item");
	$("#project").hide();
}