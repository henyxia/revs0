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
	$("#project").show();
	var jqxhr = $.ajax(url.replace(/([a-zA-Z0-9]+)\/([a-zA-Z0-9]+)/, '$1_$2'))
	.done(function(data)
	{
		$("#project").html(data);
		title = $("#projectContent")[0].childNodes[1].innerText;
		window.history.pushState({project: title}, "Revs 0 - "+title, title.replace(/\ /g, "_"));
		document.title = "Revs0 - "+title;
	})
	.fail(function()
	{
		$("#project").html('<div id="loadingContent" class="content" align="center"><p>The content is not available yet ...</p></div>');
	});
}

function goBackToHome()
{
	$("#page").fadeIn(500, "swing", function (){return true;});
	$("#portfolio-wrapper").fadeIn(500, "swing", function (){return true;});
	$("html, body").animate({ scrollTop: $('#wrapper').offset().top }, 500);
	$("#homeButton").addClass("current_page_item");
	$("#projectButton").removeClass("current_page_item");
	$("#project").hide();
	window.history.pushState({home: "/"}, "Revs0", "/");
	document.title = "Revs0";
}

function startEditingContent()
{
	var content = $("#projectContentFinal")[0];
	var edit = $("#projectContentEdit")[0];
	edit.innerHTML = content.innerHTML;
	edit.style.display = "";
	edit.className = "textareaInputEdit";
	content.style.display = "none";
}

function htmlEncode(s)
{
	var map = {'&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;'};
	return text.replace(/[&<>"']/g, function(m) {return map[m];});
}

function publishContent()
{
	var preparedContent = htmlEncode($("#projectContentEdit")[0].innerHTML);

}
