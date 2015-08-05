/* Base 64 Stuff */
var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9\+\/\=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/\r\n/g,"\n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}};

/* Other stuff */
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
	$("#project").fadeOut(500, "swing", function (){return true;});
	$("#about").fadeOut(500, "swing", function (){return true;});
	$("#contact").fadeOut(500, "swing", function (){return true;});

	$("html, body").animate({ scrollTop: $('#wrapper').offset().top }, 500);

	$("#homeButton").addClass("current_page_item");
	$("#projectButton").removeClass("current_page_item");
	$("#aboutButton").removeClass("current_page_item");
	$("#contactButton").removeClass("current_page_item");

	window.history.pushState({home: "/"}, "Revs0", "/");
	document.title = "Revs0";
}

function goBackToProjects()
{
	$("#page").fadeIn(500, "swing", function (){return true;});
	$("#portfolio-wrapper").fadeIn(500, "swing", function (){return true;});
	$("#project").fadeOut(500, "swing", function (){return true;});
	$("#about").fadeOut(500, "swing", function (){return true;});
	$("#contact").fadeOut(500, "swing", function (){return true;});

	$("html, body").animate({ scrollTop: $('#page').offset().top }, 500);

	$("#homeButton").addClass("current_page_item");
	$("#projectButton").removeClass("current_page_item");
	$("#aboutButton").removeClass("current_page_item");
	$("#contactButton").removeClass("current_page_item");

	window.history.pushState({home: "/"}, "Revs0", "/");
	document.title = "Revs0";
}

function goToAboutPage()
{
	$("#page").fadeOut(500, "swing", function (){return true;});
	$("#portfolio-wrapper").fadeOut(500, "swing", function (){return true;});
	$("#project").fadeOut(500, "swing", function (){return true;});
	$("#about").fadeIn(500, "swing", function (){return true;});
	$("#contact").fadeOut(500, "swing", function (){return true;});

	$("html, body").animate({ scrollTop: $('#page').offset().top }, 500);

	$("#homeButton").removeClass("current_page_item");
	$("#projectButton").removeClass("current_page_item");
	$("#aboutButton").addClass("current_page_item");
	$("#contactButton").removeClass("current_page_item");

	window.history.pushState({home: "/"}, "Revs0", "/");
	document.title = "Revs0 - About";

}

function goToSendingForm()
{
	$("#page").fadeOut(500, "swing", function (){return true;});
	$("#portfolio-wrapper").fadeOut(500, "swing", function (){return true;});
	$("#project").fadeOut(500, "swing", function (){return true;});
	$("#about").fadeOut(500, "swing", function (){return true;});
	$("#contact").fadeIn(500, "swing", function (){return true;});

	$("html, body").animate({ scrollTop: $('#wrapper').offset().top }, 500);

	$("#homeButton").removeClass("current_page_item");
	$("#projectButton").removeClass("current_page_item");
	$("#aboutButton").removeClass("current_page_item");
	$("#contactButton").addClass("current_page_item");

	window.history.pushState({contact: "/"}, "Revs0 - Contact", "/");
	document.title = "Revs0 - Contact";
}

function sendEmail()
{
	var sender = $("#senderMail")[0].value;
	var content = $("#contentMail")[0].textContent;
	$("#sendButton")[0].disabled=true;

	var jqxhr = $.ajax(
	{
		url: "sendMail",
		type: 'POST',
		data: {sender: Base64.encode(sender), content: Base64.encode(content)}
	})
	.done(function(data)
	{
		if(data == "success")
			$("#sendButton")[0].value="The message has succefully been sended ! Thank you !";
		else
			$("#sendButton")[0].value="The message could not be delivred, please try again later";
	})
	.fail(function()
	{
		$("#sendButton")[0].value="The message could not be delivred, please try again later";
	});
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

/*
List of regex
h1	^[\=]{1}([ \w]+)\={1}
h2	^[\=]{2}([ \w]+)\={2}
h3	^[\=]{3}([ \w]+)\={3}
li1	^[\*]{1}\ ([ \w\']+)
li2	^[\*]{2}\ ([ \w\']+)
li3	^[\*]{3}\ ([ \w\']+)
url	\[((http\:\/\/|https\:\/\/|ftp\:\/\/)([\w\.\/\-\?\=]*))([\ \w]+)?\]	1 url 4 name
p	/^([\w\ \:\[\.\]\'\,\(\)\-\/]+)[\r\n]/gm
*/
