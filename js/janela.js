/*!
  * Janela Modal v1.0.0 (https://getbootstrap.com/)
  * Copyright 2018 The Bootstrap Authors (https://github.com/crdigital/web_dicas/tree/master/janelaModal)
*/

$(document).ready(function(){

	$("a[rel=modal]").click(function(ev){
		ev.preventDefault();
		var id = $(this).attr("href");
		var alturaTela  = $(document).height();
		var larguraTela = $(window).width();

		$(".search-field").val("")
		$('#mascara').css({'width':larguraTela, 'height':alturaTela});
		$('#mascara').fadeIn(1000);
		$('#mascara').fadeTo("slow", 0.9);

		var left = ($(window).width() / 2 ) - ($(id).width() / 2 );
		var top  = ($(window).height() / 2 ) - ($(id).height() / 2 );

		$(id).css({'left':left, 'top':top});
		$(id).show();
		$("body").css("overflow", "hidden");
	});

	$('#mascara').click(function(){

		$(this).fadeOut("slow");
		$('.window').fadeOut("slow");
		$("body").css("overflow", "visible");
		
	});

	$('.fechar').click(function(ev){
		ev.preventDefault();
		$('#mascara').fadeOut(1000, "linear");
		$('.window').fadeOut(1000, "linear");
		$("body").css("overflow", "visible");
	});

});