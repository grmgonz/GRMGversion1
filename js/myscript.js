var js_handle = $("<div class='js-handle'></div>").appendTo($("body"));
var fragments = js_handle.width();
js_handle.remove();
//http://stackoverflow.com/questions/10362445/passing-less-variable-to-javascript
var loader = $(".loader");
for(var i = 0; i < fragments; i++) {
	var fragment = $("\
	<div class='fragment-holder n" + (i+1) + "'>\
		<div class='fragment'></div>\
	</div>");
		loader.append(fragment);
}