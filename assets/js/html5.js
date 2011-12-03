(function(win, doc) {
	if ( !window.attachEvent || !doc.createStyleSheet || !(function(){ var elem = document.createElement("div"); elem.innerHTML = "<elem></elem>"; return elem.childNodes.length !== 1; })()) {
		return;
	}
	win.iepp = win.iepp || {};
	var iepp = win.iepp,
		elems = iepp.html5elements || 'abbr|article|aside|audio|canvas|datalist|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|subline|summary|time|video',
		elemsArr = elems.split('|'),
		elemsArrLen = elemsArr.length,
		elemRegExp = new RegExp('(^|\\s)('+elems+')', 'gi'), 
		tagRegExp = new RegExp('<(\/*)('+elems+')', 'gi'),
		filterReg = /^\s*[\{\}]\s*$/,
		ruleRegExp = new RegExp('(^|[^\\n]*?\\s)('+elems+')([^\\n]*)({[\\n\\w\\W]*?})', 'gi'),
		docFrag = doc.createDocumentFragment(),
		html = doc.documentElement,
		head = doc.getElementsByTagName('script')[0].parentNode,
		bodyElem = doc.createElement('body'),
		styleElem = doc.createElement('style'),
		printMedias = /print|all/,
		body;

	function shim(doc) {
		var a = -1;
		while (++a < elemsArrLen) {
			doc.createElement(elemsArr[a]);
		}
	}
	
	iepp.getCSS = function(styleSheetList, mediaType) {
		try {
			if(styleSheetList+'' === undefined){
				return '';
			}
		} catch(er){
			return '';
		}
		var a = -1,
			len = styleSheetList.length,
			styleSheet,
			cssTextArr = [];
		while (++a < len) {
			styleSheet = styleSheetList[a];
			if(styleSheet.disabled){
				continue;
			}
			mediaType = styleSheet.media || mediaType;
			if (printMedias.test(mediaType)){
				cssTextArr.push(iepp.getCSS(styleSheet.imports, mediaType), styleSheet.cssText);
			}
			mediaType = 'all';
		}
		return cssTextArr.join('');
	};
	
	iepp.parseCSS = function(cssText) {
		var cssTextArr = [],
			rule;
		while ((rule = ruleRegExp.exec(cssText)) != null){
			cssTextArr.push(( (filterReg.exec(rule[1]) ? '\n' : rule[1]) + rule[2] + rule[3]).replace(elemRegExp, '$1.iepp-$2') + rule[4]);
		}
		return cssTextArr.join('\n');
	};
	
	iepp.writeHTML = function() {
		var a = -1;
		body = body || doc.body;
		while (++a < elemsArrLen) {
			var nodeList = doc.getElementsByTagName(elemsArr[a]),
				nodeListLen = nodeList.length,
				b = -1;
			while (++b < nodeListLen){
				if (nodeList[b].className.indexOf('iepp-') < 0){
					nodeList[b].className += ' iepp-'+elemsArr[a];
				}
			}
				
		}
		docFrag.appendChild(body);
		html.appendChild(bodyElem);
		bodyElem.className = body.className;
		bodyElem.id = body.id;
		bodyElem.innerHTML = body.innerHTML.replace(tagRegExp, '<$1font');
	};
	
	iepp._beforePrint = function() {
		if(iepp.disablePP){return;}
		styleElem.styleSheet.cssText = iepp.parseCSS(iepp.getCSS(doc.styleSheets, 'all'));
		iepp.writeHTML();
	};
	
	iepp.restoreHTML = function() {
		if(iepp.disablePP){return;}
		// Undo everything done in onbeforeprint
		bodyElem.swapNode(body);
	};
	
	iepp._afterPrint = function() {
		// Undo everything done in onbeforeprint
		iepp.restoreHTML();
		styleElem.styleSheet.cssText = '';
	};
	
	// Shim the document and iepp fragment
	shim(doc);
	shim(docFrag);
	
	//
	if(iepp.disablePP){
		return;
	}
	
	// Add iepp custom print style element
	head.insertBefore(styleElem, head.firstChild);
	styleElem.media = 'print';
	styleElem.className = 'iepp-printshim';
	win.attachEvent(
		'onbeforeprint',

		iepp._beforePrint
	);
	win.attachEvent(
		'onafterprint',
		iepp._afterPrint
	);
})(this, document);