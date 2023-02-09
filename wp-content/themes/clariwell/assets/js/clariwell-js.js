jQuery(document).ready(function($){
    
     'use strict'; 

	jQuery(".post-image-gallery").slick({
			dots: false,
			arrows: true,
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			speed: 500,
			cssEase: 'linear',
	responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			dots: false,
			arrows: true,
		  }
		},
		{
		  breakpoint: 600,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
	dots: false,
			arrows: true
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
	dots: false,
			arrows: true
		  }
		}
	  ],
		focusOnSelect: false
		  }); 	
	

	   jQuery('a[href=\'#\']').on('click', function(e)  {
	        e.preventDefault();
	   });

	// SUBMENUS MAIN NAVIGATION 
	(function($) {
		var wrapper = $('#wrapper');
		mainNavSubmenus();
		function mainNavSubmenus() {
			if ( $.fn.superfish ) {
				if ( !$('#off-aside-menu').length && !wrapper.hasClass('left-nav') && !wrapper.hasClass('right-nav') && !wrapper.hasClass('overview') && !wrapper.hasClass('split-screen') ) {
				$('.main-nav #main-menu ul, .main-nav .main-menu ul,#main-navigation .nav-tools').superfish({
					delay: 100,
					speed: 250,
					animation: {
						opacity:'show'
					},
					animationOut: {
						opacity: 'hide'
					},
					cssArrows: !1,
					autoArrows: false,
					disableHI: true,
					onShow: function () {
						// keep off screen momentarily
						$(this).css('top','-1000px');
				
						// calculate position of submenu
						var winWidth = $(window).width();
						var outerWidth = $(this).outerWidth();
						var rightEdge = $(this).offset().left + outerWidth;
				
						// if difference is greater than zero, then add class to menu item
						if( rightEdge > winWidth ) {
							// CSS:
							// .submenu--right { left: auto; right: 0; }
							$(this).addClass('submenu--right');
						}
						// remove top value so menu appears
						$(this).css('top','');
					},
					onHide: function () {
					}
				});
					$('.topbar-menu > ul').superfish({
					popUpSelector: 'ul',
					delay: 100,
					speed: 300,
					animation: {
						opacity: 'show',
						height: 'show'
					},
					animationOut: {
						opacity: 'hide',
						height: 'hide'
					},
					cssArrows: !1,
					autoArrows: false
					});
				}
			}
		}
	}) ( jQuery );

	/**** Back to top ****/

	jQuery(window).scroll(function(){
		if (jQuery(this).scrollTop() < 200) {
			jQuery('#smoothup') .fadeOut('slow');
		} else {
			jQuery('#smoothup') .fadeIn('slow');
		}
		});
	jQuery('#smoothup').on('click', function(){
		jQuery('html, body').animate({scrollTop:0}, '700');
		return false;
		});

	// ------------------------------------------------------------------------
	// Contact Form Buttons
	// ------------------------------------------------------------------------
	jQuery(document).on("click", "span.wpcf7-not-valid-tip", function() {
		jQuery(this).fadeOut();
	});

	/*** Page Loader ***/
	jQuery(window).load(function() {
		if ( jQuery('.page-loader-wrapper').length > 0 ) {
			var timeout = 100;
			
			setTimeout( function() {
				jQuery('.page-loader-wrapper').addClass('loaded');
			}, timeout ); // give it few more miliseconds for a better effect

		}
	});

	/*sidemenu*/
	jQuery(".sidearea-menu-close").on('click', function(e) {
		e.stopPropagation();
		jQuery("#insignia-sidearea").removeClass("insignia-sidearea-open");
		jQuery('body').removeClass("insignia-sidebar-body");
	});
	jQuery(".sidearea-toggle").on('click', function(e) {
		e.stopPropagation();
		jQuery("#insignia-sidearea").addClass("insignia-sidearea-open");
		jQuery('body').addClass("insignia-sidebar-body");
	});
	jQuery(".insignia-sidearea").on('click', function(e) {
		e.stopPropagation();
	});
	jQuery("body,html").on('click', function(e) {
		jQuery("#insignia-sidearea").removeClass("insignia-sidearea-open");
		jQuery('body').removeClass("insignia-sidebar-body");
	});


	/*Twitter*/
	jQuery(".twitter-carousel-slider").slick({
			dots: false,
			arrows: false,
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			fade: true,
			cssEase: 'linear',
		responsive: [
			{
			  breakpoint: 1024,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true,
				dots: false,
				arrows: true,
			  }
			},
			{
			  breakpoint: 600,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
		dots: false,
				arrows: true
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
		dots: false,
				arrows: true
			  }
			}
		  ],
		focusOnSelect: false
		  }); 

	/** counter section **/
			  
	jQuery('.ins-counter').counterUp({
		delay: 10,
		time: 3000
	});

	jQuery( '.inv-popup-gallery' ).swipebox();
	jQuery( '.insignia-video-popup' ).swipebox();
	jQuery( '.portfolio-image-lightbox' ).swipebox();
	jQuery( '.inv-video-lightbox-element' ).swipebox();

	var isLateralNavAnimating = false;
		
	$('.cd-nav-trigger').on('click', function(event){
		event.preventDefault();

		if( !isLateralNavAnimating ) {
			if(jQuery(this).parents('.csstransitions').length > 0 ) isLateralNavAnimating = true; 
			
			jQuery('body').toggleClass('navigation-is-open');
			jQuery('.cd-navigation-wrapper').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
				//animation is over
				isLateralNavAnimating = false;
			});
		}
	});
});


	/*Heade search form*/
	jQuery(function () {

	jQuery(document).on( 'click', 'a[href="#search"]', function() {
		jQuery("#search").addClass("open-search-form");
		jQuery('#search > form > input[type="search"]').focus();
	});

	jQuery('#search, #search button.close').on('click keyup', function(event) {
		if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
			jQuery(this).removeClass('open-search-form');
		}
		});
	});

/*Masonry layout*/
if(jQuery('#ms-container').length>0){	
	jQuery(window).load(function() {
			var container = document.querySelector('#ms-container');
			var msnry = new Masonry( container, {
			itemSelector: '.ms-item',
			columnWidth: '.ms-item',
			percentPosition: true,
			transitionDuration: '0.1s',               
		  });  
	});
	function reload(){    
			var container = document.querySelector('#ms-container');
			var msnry = new Masonry( container, {
			itemSelector: '.ms-item',
			columnWidth: '.ms-item', 
			percentPosition: true,
			transitionDuration: '2s'           
	  });        
	msnry.layout();
    }
}

jQuery( function($) {
	jQuery(document).on('click', 'li.vc_tta-tab a', function( e ){
		jQuery('html, body').stop();
	});
	jQuery(document).on('click', '.vc_tta-panel-title', function( e ){
		jQuery('html, body').stop();
	});
});

jQuery(document).ready(function($){

	var $blog_masonry = jQuery('.inv-blog-element-masonry-wrapper').imagesLoaded( function() {

	  // init Isotope after all images have loaded
	  $blog_masonry.isotope({
			itemSelector: '.inv-post-masonry-item-holder',
			percentPosition: true,
			masonry: {
			columnWidth: '.grid-sizer'
			}
	  });
	});

	var $port_grid = jQuery('.portfolio-grid-inner-holder').imagesLoaded( function() {
	  // init Isotope after all images have loaded
		$port_grid.isotope({
			itemSelector: '.inv-portfolio-item-holder',
			layoutMode: 'fitRows'
	  });
	});

	var $gridd = jQuery('.portfolio-masonry-inner-holder');
	$gridd.isotope({
		itemSelector: '.inv-portfolio-item-holder',
		percentPosition: true,
		masonry: {
		columnWidth: '.grid-sizer'
	  }
	});
	 
	if (jQuery('.inv-portfolio-filter-enabled').length) {
		var iso = new Isotope( '.inv-portfolio-filter-enabled', {
		itemSelector: '.inv-portfolio-item-holder',
		hiddenStyle: {
			opacity: 0
			},
		visibleStyle: {
			opacity: 1
			}
		});
	}
	// layout Isotope after each image loads
	$gridd.imagesLoaded().progress( function() {
		$gridd.isotope('layout');
	}); 

	// filter functions
	var filterFns = {
		// show if number is greater than 50
		numberGreaterThan50: function( itemElem ) {
			var number = itemElem.querySelector('.number').textContent;
			return parseInt( number, 10 ) > 50;
		},
		// show if name ends with -ium
		ium: function( itemElem ) {
			var name = itemElem.querySelector('.name').textContent;
			return name.match( /ium$/ );
		}
	};

	/**/
	jQuery(function() {

		jQuery(document).on( 'click', '.inv-portfolio-filter-button-inner', function() {
			jQuery(".inv-portfolio-filter-button-inner").removeClass("active-filter-button");
			jQuery(this).addClass("active-filter-button");
			jQuery(".inv-portfolio-item-holder").removeClass("ins-animate");
			jQuery(".inv-portfolio-item-holder").removeAttr("data-animation-delay");
		});
	});


	// bind filter button click
	var filtersElem = document.querySelector('.inv-portfolio-filter-button-holder');
	if(filtersElem){
		filtersElem.addEventListener( 'click', function( event ) {
			// only work with buttons
			if ( !matchesSelector( event.target, 'button' ) ) {
				return;
			}
			var filterValue = event.target.getAttribute('data-filter');
			// use matching filter function
			filterValue = filterFns[ filterValue ] || filterValue;
			iso.arrange({ filter: filterValue });
	});
	}

	// change is-checked class on buttons
	var buttonGroups = document.querySelectorAll('.button-group');
	for ( var i=0, len = buttonGroups.length; i < len; i++ ) {
		var buttonGroup = buttonGroups[i];
		radioButtonGroup( buttonGroup );
	}

	function radioButtonGroup( buttonGroup ) {
		buttonGroup.addEventListener( 'click', function( event ) {
		// only work with buttons
		if ( !matchesSelector( event.target, 'button' ) ) {
			return;
		}
		buttonGroup.querySelector('.is-checked').classList.remove('is-checked');
		event.target.classList.add('is-checked');
		});
	}

});

	(function($){
		jQuery(window).on("load",function(){

			/* Page Scroll to id fn call */
			jQuery("#menu-main-navigation a").mPageScroll2id({
			highlightSelector:"#menu-main-navigation a"
			});

			jQuery("#menu-main-mobile-navigation a").mPageScroll2id({
			highlightSelector:"#menu-main-mobile-navigation a"
			});

			jQuery(".header-menu-button .scroll-section").mPageScroll2id({
			highlightSelector:".header-menu-button .scroll-section"
			});

			jQuery(".ins-pagetitle-scroll-link").mPageScroll2id({
			highlightSelector:".ins-pagetitle-scroll-link"
			});
		});
	})(jQuery);
		
	/*view more toggle*/
	( function ( $ ) { 
		$('.ins-toggle').each(function () {
			var $this=$(this);
			var uid= $(this).data('uid');
			$('.'+uid+' .ins_toggle_button').on('click', function()  {
			$('#'+uid).slideToggle('3000',"swing");
			});
		});
	} ( jQuery ) );


/*before after*/

jQuery(document).ready(function($){
	var dragging = false,
	scrolling = false,
	resizing = false;
	var imageComparisonContainers = $('.before-after-image-section');
	checkPosition(imageComparisonContainers);
	$(window).on('scroll', function(){
		if( !scrolling) {
			scrolling =  true;
			( !window.requestAnimationFrame )
			? setTimeout(function(){checkPosition(imageComparisonContainers);}, 100)
			: requestAnimationFrame(function(){checkPosition(imageComparisonContainers);});
		}
	});
	imageComparisonContainers.each(function(){
		var actual = $(this);
		drags(actual.find('.before-after-handle'), actual.find('.resize-img'), actual, actual.find('.image-label[data-type="original"]'), actual.find('.image-label[data-type="modified"]'));
	});

	$(window).on('resize', function(){
		if( !resizing) {
			resizing =  true;
			( !window.requestAnimationFrame )
			? setTimeout(function(){checkLabel(imageComparisonContainers);}, 100)
			: requestAnimationFrame(function(){checkLabel(imageComparisonContainers);});
		}
	});

	function checkPosition(container) {
		container.each(function(){
			var actualContainer = $(this);
			if( $(window).scrollTop() + $(window).height()*0.5 > actualContainer.offset().top) {
				actualContainer.addClass('is-visible');
			}
		});
		scrolling = false;
	}

	function checkLabel(container) {
		container.each(function(){
			var actual = $(this);
			updateLabel(actual.find('.image-label[data-type="modified"]'), actual.find('.cd-resize-img'), 'left');
			updateLabel(actual.find('.image-label[data-type="original"]'), actual.find('.cd-resize-img'), 'right');
		});
		resizing = false;
	}

	function drags(dragElement, resizeElement, container, labelContainer, labelResizeElement) {
		dragElement.on("mousedown vmousedown", function(e) {
			dragElement.addClass('draggable');
			resizeElement.addClass('resizable');

			var dragWidth = dragElement.outerWidth(),
			xPosition = dragElement.offset().left + dragWidth - e.pageX,
			containerOffset = container.offset().left,
			containerWidth = container.outerWidth(),
			minLeft = containerOffset + 10,
			maxLeft = containerOffset + containerWidth - dragWidth - 10;

			dragElement.parents().on("mousemove vmousemove", function(e) {
				if( !dragging) {
					dragging =  true;
					( !window.requestAnimationFrame )
					? setTimeout(function(){animateDraggedHandle(e, xPosition, dragWidth, minLeft, maxLeft, containerOffset, containerWidth, resizeElement, labelContainer, labelResizeElement);}, 100)
					: requestAnimationFrame(function(){animateDraggedHandle(e, xPosition, dragWidth, minLeft, maxLeft, containerOffset, containerWidth, resizeElement, labelContainer, labelResizeElement);});
				}
			}).on("mouseup vmouseup", function(e){
				dragElement.removeClass('draggable');
				resizeElement.removeClass('resizable');
			});
			e.preventDefault();
		}).on("mouseup vmouseup", function(e) {
			dragElement.removeClass('draggable');
			resizeElement.removeClass('resizable');
		});
	}

	function animateDraggedHandle(e, xPosition, dragWidth, minLeft, maxLeft, containerOffset, containerWidth, resizeElement, labelContainer, labelResizeElement) {
		var leftValue = e.pageX + xPosition - dragWidth;   
		if(leftValue < minLeft ) {
			leftValue = minLeft;
		} else if ( leftValue > maxLeft) {
			leftValue = maxLeft;
		}

		var widthValue = (leftValue + dragWidth/2 - containerOffset)*100/containerWidth+'%';

		$('.draggable').css('left', widthValue).on("mouseup vmouseup", function() {
			$(this).removeClass('draggable');
			resizeElement.removeClass('resizable');
		});

		$('.resizable').css('width', widthValue); 
		updateLabel(labelResizeElement, resizeElement, 'left');
		updateLabel(labelContainer, resizeElement, 'right');
		dragging =  false;
	}

	function updateLabel(label, resizeElement, position) {
		if(position == 'left') {
			( label.offset().left + label.outerWidth() < resizeElement.offset().left + resizeElement.outerWidth() ) ? label.removeClass('is-hidden') : label.addClass('is-hidden') ;
			} else {
			( label.offset().left > resizeElement.offset().left + resizeElement.outerWidth() ) ? label.removeClass('is-hidden') : label.addClass('is-hidden') ;
		}
	}
});

(function($, win) {
	$.fn.inViewport = function(cb) {
		return this.each(function(i, el) {
			function visPx() {
				var H = $(this).height(),
				r = el.getBoundingClientRect(),
				t = r.top,
				b = r.bottom;
				return cb.call(el, Math.max(0, t > 0 ? H - t : (b < H ? b : H)));
			}
			visPx();
			$(win).on("resize scroll", visPx);
		});
	};
}(jQuery, window));

jQuery(window).load(function() {
	jQuery(".ins-animated").inViewport(function(px) {
		if (px) jQuery(this).addClass("ins-animate");
	});
});