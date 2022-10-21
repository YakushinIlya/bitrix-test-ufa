
//MATCH MEDIA POINTS
function isMatchMediaArr(arr) {
  if ( !Array.isArray(arr) ) return {};
  var res = {};
  arr.forEach(function(el, i) {
    res[el] = {
    	min: window.matchMedia('(min-width:'+parseInt(el, 10)+'px)').matches,
    	max: window.matchMedia('(max-width:'+parseInt(el, 10)+'px)').matches
    }
  });
  return res;
} 
var matchMediaArr = isMatchMediaArr([430, 576, 768, 992, 1250]);
// console.log(matchMediaArr);

function scroll_to(link){
	var scroll_el = $(link).attr('href');
	if ($(scroll_el).length != 0) {
		$('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 600);
	}
}


$(document).ready(function(){

	svg4everybody();//supports svg-sprites in IE/edge

	//CLICK ON NAV__BURGER
	$('.nav__burger').on('click', function() {
		event.preventDefault();
		let btn = $(this),
				nav = $(this).siblings('.nav__menu');

		$(btn).toggleClass('nav__burger_active');
		$(nav).slideToggle(500);
		$('.nav__submenu').slideUp(500);
		$('.nav__li').removeClass('nav__li_active');
	});


	//CLICK ON NAV__LINK
	if ( matchMediaArr[992].max ) {
		$('.nav__link').on('click', function(event) {
			let link = $(this),
					submenu = $(link).siblings('.nav__submenu'),
					parent = $(link).parent('.nav__li');

			if ( submenu.length ) {
				event.preventDefault();

				$(submenu).slideToggle(500);
				$(parent).toggleClass('nav__li_active');
			}
		});

		// $(document).mouseup(function (e){
		// 	var div = $(".nav");
		// 	if (!div.is(e.target)
		// 	    && div.has(e.target).length === 0) {

		// 		$(div).find('.nav__burger').removeClass('nav__burger_active');
		// 		$('.nav__menu').slideUp(500);
		// 		$('.nav__submenu').slideUp(500);
		// 		$('.nav__li').removeClass('nav__li_active');
		// 	}
		// });
	}


	//scroll smooth
	$(document).on('click', '.down', function(){
		scroll_to(this);
		return false;
	});


	
	//SHOW/HIDE ASIDE-MENU
	const aside = $('#aside'),
			windowH = $(window).height();
	$(window).on('load scroll', function() {
		let top = $(this).scrollTop();
		if ( top > windowH / 3 ) {
			$(aside).addClass('aside_show');
		} else {
			$(aside).removeClass('aside_show');
		}
	});


	//INPUT ONLI NUMBERS
	$('.onli-numbers').on("change keyup input click", function() {
		if (this.value.match(/[^0-9]/g)) {
			this.value = this.value.replace(/[^0-9]/g, '');
		}
	});


	//STICKY
	//documentation https://github.com/rgalus/sticky-js
	const stickyWrap = $('#sticky');
	let sticky = new Sticky('#sticky');

	$(document).on('click', '.sticky-scroll-up', function(){

		if (matchMediaArr[1250].min) {
			let wrapper = $(this).closest('.sticky');
			if ( $(wrapper).css('position') == 'fixed' ) {
				scroll_to(this);
			}
			
		} else {
			scroll_to(this);
		}
		
		return false;
	});

	//Костыль - меняем класс у ссылки по requestAnimationFrame
	if (matchMediaArr[1250].min && stickyWrap.length) {
		var requestId = requestAnimationFrame(function checkSticky(time){
			if ( $(stickyWrap).css('position') == 'fixed' ) {
				$(stickyWrap).find('.sticky-scroll-up').removeClass('sticky-scroll-up_disabled');
			} else {
				$(stickyWrap).find('.sticky-scroll-up').addClass('sticky-scroll-up_disabled');
			}

			requestAnimationFrame(checkSticky);
		});
	}


	//MANAGERS
	$('.managers').on('click', '.managers__btn', function(event) {
		event.preventDefault();
		$(this).closest('.managers').find('.managers__more').fadeIn(500);
		$(this).fadeOut(200);
	});


	//BTNS
	let cartCount = 0;// для демнострации корзины
	$('.btn1__order').on('click', function(event) {
		event.preventDefault();
		$(this).addClass('btn1_added');
		$(this).text('В корзине');

		AnimatioAddToDart(++cartCount);	//для демнострации корзины
	});


	//CART
	$('.cart__del').on('click', function(event) {
		event.preventDefault();
		$(this).closest('.cart__box').slideUp(500);
	});
	$('.cart__clear').on('click', function(event) {
		event.preventDefault();
		$('.cart').find('.cart__box').slideUp(500);
	});


	//MODALS
	//documentation - https://github.com/jsor/lity
	//close modal if (lityModal) lityModal.close()
	let lityModal;

	$('.top__btn, .phone__btn, .order__btn').on('click', function(event) {
		event.preventDefault();
		const href = $(this).attr('href');
		lityModal = lity(href);
	});

	// lityModal = lity('#modal-thanks');

	// setTimeout(function(){
	// 	if (lityModal) lityModal.close()
	// }, 5000);


	//Анимация корзины при добавлении товара
	function AnimatioAddToDart(count) {
		const wrap = $('.nav__cart');
		const box = $('.nav__cart').find('.nav__cart-count');
		const asideCart = $('.aside__cart');

		$(wrap).addClass('animated bounce');
		$(asideCart).addClass('aside__cart_show');

		setTimeout(function() {
	    $(box).html('('+count+')');
	  }, 500);

		$(wrap).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
	    $(wrap).removeClass('animated bounce');
	    clearMessageTimeout();
	  });

		// setTimeout(function(){
		// 	$(asideCart).removeClass('aside__cart_show');
		// 	$(wrap).removeClass('cart_anim');
		// }, 5000);
	}

	function clearMessageTimeout() {
	  _messageTimeout = setTimeout(function() {
	    if ($('.aside__cart').hasClass('aside__cart_show')) {
	      $('.aside__cart').removeClass('aside__cart_show');
	    }
	  }, 3000);
	}
});