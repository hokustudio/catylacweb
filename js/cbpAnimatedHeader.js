/**
 * cbpAnimatedHeader.js v1.0.0
 * http://www.codrops.com
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 
 * Copyright 2013, Codrops
 * http://www.codrops.com
 */
var cbpAnimatedHeader = (function() {

	var docElem = document.documentElement,
		header = document.querySelector( '.navbar-fixed-top'),
		menu = document.querySelector('.navbar-fixed-top-menu' ),
		headerColor = document.querySelector('.headerColor'),
		bodyColor = document.querySelector('.bodyColor'),
		footerColor = document.querySelector('.footerColor'),

		didClickRed = document.getElementById("redS").onclick = function() {switchRed()},
		didClickGreen = document.getElementById("greenS").onclick = function() {switchGreen()},
		didClickBlue = document.getElementById("blueS").onclick = function() {switchBlue()},
		didClickYellow = document.getElementById("yellowS").onclick = function() {switchYellow()},
		didScroll = false,
		changeHeaderOn = 50;


	function init() {
		window.addEventListener( 'scroll', function( event ) {
			if( !didScroll ) {
				didScroll = true;
				setTimeout( scrollPage, 50 );
			}
		}, false );
	}

	function scrollPage() {
		var sy = scrollY();
		if ( sy >= changeHeaderOn ) {
			classie.add( header, 'navbar-shrink' );
			classie.add( menu, 'navbar-shrink');
		}
		else {
			classie.remove( header, 'navbar-shrink' );
			classie.remove( menu, 'navbar-shrink');
		}
		didScroll = false;
	}

	function scrollY() {
		return window.pageYOffset || docElem.scrollTop;
	}

	function switchRed(){
		classie.add( headerColor, 'headerRed');
		classie.remove( headerColor, 'headerGreen');
		classie.remove( headerColor, 'headerBlue');
		classie.remove( headerColor, 'headerYellow');

		classie.add( bodyColor, 'bodyRed');
		classie.remove( bodyColor, 'bodyGreen');
		classie.remove( bodyColor, 'bodyBlue');
		classie.remove( bodyColor, 'bodyYellow');

		classie.add( footerColor, 'footerRed');
		classie.remove( footerColor, 'footerGreen');
		classie.remove( footerColor, 'footerBlue');
		classie.remove( footerColor, 'footerYellow');
	}

	function switchBlue(){
		classie.add( headerColor, 'headerBlue');
		classie.remove( headerColor, 'headerGreen');
		classie.remove( headerColor, 'headerRed');
		classie.remove( headerColor, 'headerYellow');

		classie.add( bodyColor, 'bodyBlue');
		classie.remove( bodyColor, 'bodyGreen');
		classie.remove( bodyColor, 'bodyRed');
		classie.remove( bodyColor, 'bodyYellow');

		classie.add( footerColor, 'footerBlue');
		classie.remove( footerColor, 'footerGreen');
		classie.remove( footerColor, 'footerRed');
		classie.remove( footerColor, 'footerYellow');
	}

	function switchYellow(){
		classie.add( headerColor, 'headerYellow');
		classie.remove( headerColor, 'headerGreen');
		classie.remove( headerColor, 'headerBlue');
		classie.remove( headerColor, 'headerRed');

		classie.add( bodyColor, 'bodyYellow');
		classie.remove( bodyColor, 'bodyGreen');
		classie.remove( bodyColor, 'bodyBlue');
		classie.remove( bodyColor, 'bodyRed');

		classie.add( footerColor, 'footerYellow');
		classie.remove( footerColor, 'footerGreen');
		classie.remove( footerColor, 'footerBlue');
		classie.remove( footerColor, 'footerRed');
	}

	function switchGreen(){
		classie.add( headerColor, 'headerGreen');
		classie.remove( headerColor, 'headerRed');
		classie.remove( headerColor, 'headerBlue');
		classie.remove( headerColor, 'headerYellow');

		classie.add( bodyColor, 'bodyGreen');
		classie.remove( bodyColor, 'bodyRed');
		classie.remove( bodyColor, 'bodyBlue');
		classie.remove( bodyColor, 'bodyYellow');

		classie.add( footerColor, 'footerGreen');
		classie.remove( footerColor, 'footerRed');
		classie.remove( footerColor, 'footerBlue');
		classie.remove( footerColor, 'footerYellow');
	}

	init();

})();