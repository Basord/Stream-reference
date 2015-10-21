function($){
	
	$('#header__icon').click(function(e){
        e.preventDefault();
        $('body').toggleClass('with--sidebar');
    });
})(jQuery);
function(){
	alert('test');
}