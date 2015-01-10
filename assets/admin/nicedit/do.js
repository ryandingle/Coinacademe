bkLib.onDomLoaded(function() {	
	new nicEditor().panelInstance('article-content');
	new nicEditor({fullPanel : true}).panelInstance('article-content');
	new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html']}).panelInstance('article-content');
	new nicEditor({maxHeight : 200}).panelInstance('article-content');
});
