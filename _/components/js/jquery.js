window.$ = window.jQuery = require('jquery');
require('bootstrap-sass');

$(document).ready(function(){
	// выделение активной вкладки
	$('#home a:contains("Home")').parent().addClass('active');


	// автоматическое развёртывание подменю в навигации
	$("ul.nav li.dropdown").hover(function(){
		$(".dropdown-menu", this).fadeIn();
	}, function(){
		$(".dropdown-menu", this).fadeOut("fast");
	});
});