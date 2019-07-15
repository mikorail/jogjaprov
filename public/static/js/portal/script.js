$(function(){
    $('.navbar-toggle').on('click',function(){
		if($('.navigation').hasClass('in')){
			$('body').removeClass('noscroll');
		} else {
			$('body').addClass('noscroll');
		}
	});
	$('[data-toggle="tooltip"]').tooltip();

	/*$(".fancybox").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
        padding:0,
        openEffect  : 'elastic',
        closeEffect : 'elastic',
        helpers: {
		    overlay: {
		      locked: false
		    }
		  }
    });*/
	$('.social a').click(function(){
		window.open($(this).attr('href'),"mywindow","menubar=1,resizable=1,width=500,height=250");
		return false;
	});
	if (parseInt($(window).width()) < 768){
		
	}
});
$(function floatHeader(){
   if (parseInt($(window).width()) > 768){
      var stickyHeaderTop = parseInt($('.header').offset().top);
       if($(window).scrollTop() > 0){
           $('.header').addClass('float');
       }
       $(window).scroll(function(){
           if( $(window).scrollTop() > 0 ) {
               $('.header').addClass('float');
           } else {
               $('.header').removeClass('float');
           }
       });
   }
});
function noticeSuccess(message){
	var message = message || 'Proses Berhasil';

    sweetAlert({
    	title 	: 'Success',
    	text 	: message,
    	type	: 'success',
    	timer	: 2000,
    	showCancelButton : false,
    	showConfirmButton : false
    });
}
function noticeFailed(message){
	var message = message || 'Proses Gagal';

    sweetAlert({
    	title 	: 'Error',
    	text 	: message,
    	type	: 'error',
    	timer	: 2000,
    	showCancelButton : false,
    	showConfirmButton : false
    });
}