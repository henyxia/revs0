/* Base 64 Stuff */
var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9\+\/\=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/\r\n/g,"\n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}};

/* Other stuff */
var username;
var password;

(function(){var D,h=10,u=[],w=[],q,p,B,v,A,f,e,b,a,G,F,s="\u1823\uc6E8\u87B8\u014F\u36A6\ud2F5\u796F\u9152\u60Bc\u9B8E\uA30c\u7B35\u1dE0\ud7c2\u2E4B\uFE57\u1577\u37E5\u9FF0\u4AdA\u58c9\u290A\uB1A0\u6B85\uBd5d\u10F4\ucB3E\u0567\uE427\u418B\uA77d\u95d8\uFBEE\u7c66\udd17\u479E\ucA2d\uBF07\uAd5A\u8333\u6302\uAA71\uc819\u49d9\uF2E3\u5B88\u9A26\u32B0\uE90F\ud580\uBEcd\u3448\uFF7A\u905F\u2068\u1AAE\uB454\u9322\u64F1\u7312\u4008\uc3Ec\udBA1\u8d3d\u9700\ucF2B\u7682\ud61B\uB5AF\u6A50\u45F3\u30EF\u3F55\uA2EA\u65BA\u2Fc0\udE1c\uFd4d\u9275\u068A\uB2E6\u0E1F\u62d4\uA896\uF9c5\u2559\u8472\u394c\u5E78\u388c\ud1A5\uE261\uB321\u9c1E\u43c7\uFc04\u5199\u6d0d\uFAdF\u7E24\u3BAB\ucE11\u8F4E\uB7EB\u3c81\u94F7\uB913\u2cd3\uE76E\uc403\u5644\u7FA9\u2ABB\uc153\udc0B\u9d6c\u3174\uF646\uAc89\u14E1\u163A\u6909\u70B6\ud0Ed\ucc42\u98A4\u285c\uF886";for(q=8;q-->0;){u[q]=[]}for(p=0;p<256;p++){B=s.charCodeAt(p/2);f=((p&1)==0)?B>>>8:B&255;e=f<<1;if(e>=256){e^=285}b=e<<1;if(b>=256){b^=285}a=b^f;G=b<<1;if(G>=256){G^=285}F=G^f;u[0][p]=[0,0];u[0][p][0]=(f<<24)|(f<<16)|(b<<8)|(f);u[0][p][1]=(G<<24)|(a<<16)|(e<<8)|(F);for(var q=1;q<8;q++){u[q][p]=[0,0];u[q][p][0]=(u[q-1][p][0]>>>8)|((u[q-1][p][1]<<24));u[q][p][1]=(u[q-1][p][1]>>>8)|((u[q-1][p][0]<<24))}}w[0]=[0,0];for(v=1;v<=h;v++){A=8*(v-1);w[v]=[0,0];w[v][0]=(u[0][A][0]&4278190080)^(u[1][A+1][0]&16711680)^(u[2][A+2][0]&65280)^(u[3][A+3][0]&255);w[v][1]=(u[4][A+4][1]&4278190080)^(u[5][A+5][1]&16711680)^(u[6][A+6][1]&65280)^(u[7][A+7][1]&255)}var z=[],y=[],n=0,j=0,d=[],o=[],m=[],l=[],g=[];var E=function(){var C,c,I,H,x;for(C=0,c=0;C<8;C++,c+=8){l[C]=[0,0];l[C][0]=((y[c]&255)<<24)^((y[c+1]&255)<<16)^((y[c+2]&255)<<8)^((y[c+3]&255));l[C][1]=((y[c+4]&255)<<24)^((y[c+5]&255)<<16)^((y[c+6]&255)<<8)^((y[c+7]&255))}for(C=0;C<8;C++){g[C]=[0,0];o[C]=[0,0];g[C][0]=l[C][0]^(o[C][0]=d[C][0]);g[C][1]=l[C][1]^(o[C][1]=d[C][1])}for(I=1;I<=h;I++){for(C=0;C<8;C++){m[C]=[0,0];for(x=0,H=56,c=0;x<8;x++,H-=8,c=H<32?1:0){m[C][0]^=u[x][(o[(C-x)&7][c]>>>(H%32))&255][0];m[C][1]^=u[x][(o[(C-x)&7][c]>>>(H%32))&255][1]}}for(C=0;C<8;C++){o[C][0]=m[C][0];o[C][1]=m[C][1]}o[0][0]^=w[I][0];o[0][1]^=w[I][1];for(C=0;C<8;C++){m[C][0]=o[C][0];m[C][1]=o[C][1];for(x=0,H=56,c=0;x<8;x++,H-=8,c=H<32?1:0){m[C][0]^=u[x][(g[(C-x)&7][c]>>>(H%32))&255][0];m[C][1]^=u[x][(g[(C-x)&7][c]>>>(H%32))&255][1]}}for(C=0;C<8;C++){g[C][0]=m[C][0];g[C][1]=m[C][1]}}for(C=0;C<8;C++){d[C][0]^=g[C][0]^l[C][0];d[C][1]^=g[C][1]^l[C][1]}};D=Whirlpool=function(c){return D.init().add(c).finalize()};D.version="3.0";D.init=function(){for(var c=32;c-->0;){z[c]=0}n=j=0;y=[0];for(c=8;c-->0;){d[c]=[0,0]}return D};var k=function(r){var c,x,t=r.toString();r=[];for(c=0;c<t.length;c++){x=t.charCodeAt(c);if(x>=256){r.push(x>>>8&255)}r.push(x&255)}return r};D.add=function(c,K){if(!c){return D}if(!K){c=k(c);K=c.length*8}var r=0,t=(8-(K&7))&7,C=n&7,x,H,J,I=K;for(x=31,J=0;x>=0;x--){J+=(z[x]&255)+(I%256);z[x]=J&255;J>>>=8;I=Math.floor(I/256)}while(K>8){H=((c[r]<<t)&255)|((c[r+1]&255)>>>(8-t));if(H<0||H>=256){return"Whirlpool requires a byte array"}y[j++]|=H>>>C;n+=8-C;if(n==512){E();n=j=0;y=[]}y[j]=((H<<(8-C))&255);n+=C;K-=8;r++}if(K>0){H=(c[r]<<t)&255;y[j]|=H>>>C}else{H=0}if(C+K<8){n+=K}else{j++;n+=8-C;K-=8-C;if(n==512){E();n=j=0;y=[]}y[j]=((H<<(8-C))&255);n+=K}return D};D.finalize=function(){var r,c,t,H="",C=[],x="0123456789ABCDEF".split("");y[j]|=128>>>(n&7);j++;if(j>32){while(j<64){y[j++]=0}E();j=0;y=[]}while(j<32){y[j++]=0}y.push.apply(y,z);E();for(r=0,c=0;r<8;r++,c+=8){t=d[r][0];C[c]=t>>>24&255;C[c+1]=t>>>16&255;C[c+2]=t>>>8&255;C[c+3]=t&255;t=d[r][1];C[c+4]=t>>>24&255;C[c+5]=t>>>16&255;C[c+6]=t>>>8&255;C[c+7]=t&255}for(r=0;r<C.length;r++){H+=x[C[r]>>>4];H+=x[C[r]&15]}return H}})();

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

function sendEditedProject()
{
	if(username == undefined || username == null)
	{
		username = prompt("Please enter your username", "");
		if(username == null)
			return;
		username = Base64.encode(username);
	}

	if(password == undefined || password == null)
	{
		password = prompt("Please enter your password", "");
		password = Whirlpool(password);
	}

	var jqxhr = $.ajax(
	{
		url: "editProject",
		type: 'POST',
		data:
		{
			sender: username,
			password: password,
			content: Base64.encode($("#projectContentEdit")[0].value)
		}
	})
	.done(function(data)
	{
		alert(data);
		console.debug(data);
	})
	.fail(function()
	{
		alert("failed");
	});


	var edit = $("#projectContentEdit")[0];
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
