(function($) {

	// MAIN VARIABLES INITIALIZATION
	var showMobileMenuWidth = 1200;
	var body = $('body');
	var wrapper = $('#wrapper');
	var toggleMenu = $('.toggle-menu');
	var topnav = $('.main-nav-wrapper');
	var header = $('#header');
	var headerHeight = header.height();
	var headerScrollHeight = header.data( 'scroll-height' );
	var topnavHeight = $('#main-navigation').height();
	var pageTitleResized		= false;
	if ( $('.bottom-nav-wrapper').length > 0 ) {
		topnavHeight = $('.bottom-nav-wrapper').height();
	}

	var topbarHeight = $('#topbar').height() + 1;
	var headerTopHeight = $('.header-top').height();
	var windowWidth = $(window).width();
	var windowHeight = $(window).height();
	var scrollPos = $(window).scrollTop();
	var lastScrollTop = 0;
	var fullPageCreated = false;
	var isOpera = (!!window.opr && !!opr.addons) || !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;
	var isFirefox = typeof InstallTrigger !== 'undefined';
	var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0;
	var isIE = false || !!document.documentMode;
	var isEdge = !isIE && !!window.StyleMedia;
	var isChrome = !!window.chrome && !!window.chrome.webstore;
	var isBlink = (isChrome || isOpera) && !!window.CSS;
	var headerMobileSkin = false;
	var headerSkin = 'header-' + header.data('skin');
	var headerScrollSkin = 'header-' + header.data ('scroll-skin');
	var windowWidth = $(window).width();
	var sideHeader = false;


	$(window).scroll(function() {
		'use strict';
		scrollPos = $(window).scrollTop();

		if ( header.hasClass('header-sticky') ) {
			
			navbarScroll();
			
			if ( $('.upper-nav-wrapper').length > 0 ) {
				handleTopNav();
			}
		}
		stickyNav();
		headerNoSticky();
		handleTopbar();
	});
	
	$(window).resize(function() {
		'use strict';
		windowWidth = $(window).width();
		handleMenus();
		if (headerSkin != headerScrollSkin) {
			headerMobile();
		}
	});
	(function() {
	'use strict';
	if ($('#aside-nav').length > 0) sideHeader = true;
	var isMobile = {
		Android: function () {
			return navigator.userAgent.match(/Android/i);
		},
			BlackBerry: function () {
			return navigator.userAgent.match(/BlackBerry/i);
		},
			iOS: function () {
			return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		},
			Opera: function () {
			return navigator.userAgent.match(/Opera Mini/i);
		},
			Windows: function () {
			return navigator.userAgent.match(/IEMobile/i);
		},
			any: function () {
			return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
		}
	};

		handleMobileMenu();
		asideNavSubmenus();
		handleFullscreenMenu();
		pageTitle();
	}
());

	function headerMobile() {
		if (windowWidth <= 1000 && headerMobileSkin == false) {
			header.removeClass( headerSkin ).addClass( headerScrollSkin );
			headerMobileSkin = true;
		} else if (windowWidth > 1000 && headerMobileSkin == true) {
			header.removeClass( headerScrollSkin ).addClass( headerSkin );
			headerMobileSkin = false;
		}
	}

	// Handle StretchRows
	function handleStretchRows() {
		$(document).on("vc-full-width-row", function( event ) {
		if ($('#wrapper').hasClass('aside-menu-open') && $('#wrapper').hasClass('header-aside-push')) {
			var navWidth = $('#aside-nav').width();
			var contentWidth = $(window).width();
			var $el = $('.vc_row-stretch');
			var el_margin_left = parseInt($el.css("margin-left"), 10);
			var $el_full = $el.next(".vc_row-full-width");
			var offset = 0 - $el_full.offset().left + navWidth - el_margin_left;
			var left = offset;
			$('.vc_row-stretch').css({
			'width': contentWidth,
			'left': left
			});
		} else if ($('#wrapper').hasClass('aside-menu-open')) {
			var navWidth = $('#aside-nav').width();
			var contentWidth = $(window).width() - navWidth;
			var $el = $('.vc_row-stretch');
			var el_margin_left = parseInt($el.css("margin-left"), 10);
			var $el_full = $el.next(".vc_row-full-width");
			var offset = 0 - $el_full.offset().left + navWidth - el_margin_left;
			$('.vc_row-stretch').css({
			'width': contentWidth,
			'left': offset
			});
		}
		});
	}

	// SUBMENUS LATERAL NAVIGATION 
	function asideNavSubmenus() {
		var timer = null;
		$('#main-aside-menu li').each(function() {
		if ($(this).hasClass('menu-item-has-children')) {
			$(this).find('a').append('<span class="open-child-menu"></span>');
		}
		});
		$('#main-aside-menu > ul li > a').on('click', function(e) {
			
			if ($(this).closest('li').hasClass('menu-item-has-children')) {
			e.preventDefault();
			e.stopPropagation();
			var $parent = $(this).closest('a');
			if ($parent.hasClass('is-open')) {
				$parent.removeClass('is-open');
				$parent.next().slideUp(300);
			} else {
				$parent.parent('li.menu-item-has-children').parent().find('.is-open').next().slideUp(300);
				$parent.parent('li.menu-item-has-children').parent().find('.is-open').removeClass('is-open');
				if ($parent.parent().hasClass('menu-item-has-children')) $parent.addClass('is-open');
				$parent.next().slideDown(300);
			}
				if ($('body').hasClass('one-page') || $('body').hasClass('slider-page')) {
				
				}
		}
		});
	}

	// HANDLE MENUS 
	function handleMenus() {
		windowWidth = $(window).width();
		if (!$('#off-fullscreen-menu').length && !$('#off-aside-menu').length && !$('.left-nav').length && !$('.right-nav').length && !$('.aside-right').length) {
			if (windowWidth < showMobileMenuWidth) {
				  //wrapper.addClass('menu-mobile').removeClass('top-menu-open');
				  //toggleMenu.removeClass('active');
				  $('#main-menu, .main-menu').removeClass('main-menu-open');
			} else {
				  //wrapper.removeClass('menu-mobile mobile-menu-open');
			}
		} else {
			//wrapper.removeClass('menu-mobile mobile-menu-open');
		}
		
		if (windowWidth > 1000 && sideHeader == false) {
			$('#mobile-nav').hide();
			toggleMenu.removeClass('active');
		}
	}
	if ( $('#wrapper').hasClass( 'type-onepager' ) ) {
		$( '#main-menu > ul > li:first-child' ).addClass( 'current' );
	}
    
    // Header appear after scroll

    if ( !header.hasClass( 'header-not-sticky' ) ) {
        
        if ( header.hasClass( 'header-sticky-appear' ) ) {
            
            var $navbarClone = $( "#main-navigation" ).clone();
            
            if ( header.data( 'skin' ) != header.data( 'skin-scroll' ) ) {
                $navbarClone.attr( 'style', '' );
            }
            
            $navbarClone.attr( 'id', 'sticky-nav' ).attr( 'data-scroll-amount', header.data( 'scroll-amount' ) );
            $navbarClone.addClass( 'sticky-nav' );
            $navbarClone.insertAfter( "#main-navigation" );
            
            stickyNav();
            
        } else {
            navbarScroll();
        }
    }

	if ( headerSkin != headerScrollSkin ) {
		headerMobile();
	}

	// OFF MOBILE MENU
	function handleMobileMenu() {
		var $mobileNav;
		if (sideHeader == true) {
			$mobileNav = $('.aside-nav-main');
		} else {
			$mobileNav = $('#mobile-nav');
		}
		
		$('#mobile-menu-toggle').on('click', function(e) {
			if ($(this).hasClass('active')) {
				$(this).removeClass('active');
				$mobileNav.slideUp();
			} else {
				$(this).addClass('active');
				$mobileNav.slideDown();
			}
		});
		  
		// Mobile dropdown menus
		  
		$('.mobile-nav li.menu-item-has-children > a').append('<span class="mobile-dropdown-toggle"></span>');
		  
		$('html').on( 'click', 'body .mobile-dropdown-toggle', function(e) {
			e.preventDefault();
			if ($(this).hasClass('dropdown-menu-open')) {
				$(this).removeClass('dropdown-menu-open');
				$(this).closest('a').next('.sub-menu').slideUp();
			} else {
				$(this).addClass('dropdown-menu-open');
				$(this).closest('a').next('.sub-menu').slideDown();
			}
		});
		
		if ( $('#header').hasClass( 'mobile-dropdown-parent' ) ) {
			$('#mobile-nav .menu-item-has-children > a').on( 'click', function(e) {
				var $dropdown = $(this).closest( 'li' ).find( '> .sub-menu' );
				
				if ( $dropdown.length > 0 ) {
					e.preventDefault();
					if ( $dropdown.hasClass( 'dropdown-menu-open' ) ) {
						$dropdown.removeClass( 'dropdown-menu-open' );
						$dropdown.slideUp();
					} else {
						$dropdown.addClass( 'dropdown-menu-open' );
						$dropdown.slideDown();
					}
				}

			});
		}

	}

	// OFF FULLSCREEN OVERLAY MENU
	function handleFullscreenMenu() {
		$('#off-fullscreen-menu li').each(function() {
			if ($(this).hasClass('menu-item-has-children')) {
				$(this).children().first().attr('href', '#');
				if ($(this).hasClass('mega-menu')) {
					$(this).removeClass('mega-menu');
				}
			}
		});

		$('#off-fullscreen-menu li.menu-item-has-children > a').append('<span class="fullscreen-dropdown-toggle"></span>');

		$('body').on('click', '[data-toggle="fullscreen-menu"]', function(e) {
			e.preventDefault();
			e.stopPropagation();
			$('body').toggleClass('full-menu-open');
			$('#off-fullscreen-menu').toggleClass('full-menu-open');
			$('body').on('click', '#off-fullscreen-menu nav > ul li > a', function(e) {
				e.preventDefault();
				e.stopPropagation();
				var targetLink = $(this).attr('href');
				if (targetLink != '#' && targetLink != '') {
					$('body').fadeOut(350, function() {
					window.location.href = targetLink;
					});
				}
				
				if ($(this).hasClass('is-open')) {
					$(this).removeClass('is-open');
					$(this).next().slideUp(300);
				} else {
					$(this).parent('.submenu').parent().find('.is-open').next().slideUp(300);
					$(this).parent('.submenu').parent().find('.is-open').removeClass('is-open');
					$(this).addClass('is-open');
					$(this).next().slideDown(300);
				}
			});
		});
	}

	// MANAGE NAVIGATION LOGO / BACKGROUND COLOR
	// Header on Scroll

	function navbarScroll() {
		
		if ( windowWidth > 1000 && topnav.length > 0 ) {
			
			var topScroll = $(window).scrollTop();
			var logoImg = $('body').find('#logo a img');
			var logoLight = $('body').find('#logo a').data('logo-light');
			var logoDark = $('body').find('#logo a').data('logo-dark');
			var $navSelectors = $('.main-nav,.main-nav ul.nav > li > a,.main-nav .nav-tools li a');
			
			if ( wrapper.hasClass('onepage-special') ) return;
			if ( wrapper.hasClass('header-light') ) {
				logoImg.attr('src', logoDark);
			}
			
			if ( wrapper.hasClass('header-dark') ) {
				logoImg.attr('src', logoLight);
			}
			
			if ( wrapper.hasClass('transparent-dark') ) {
				logoImg.attr('src', logoDark);
			}
			
			if ( wrapper.hasClass('nav-bottom') ) {
				return;
			}
			
			if ( wrapper.hasClass('header-transparent') && wrapper.hasClass('transparent-dark') ) {
				logoImg.attr('src', logoDark);
			}

			var scrollHeight = header.data('scroll-height');
			
			var finalScroll = topnavHeight - headerScrollHeight;
			var zeroScroll = 0;
			
			if ( $('#topbar').length > 0 ) {
				finalScroll = finalScroll + topbarHeight;
				zeroScroll = topbarHeight;
			}

			if ( topScroll > zeroScroll && topScroll <= finalScroll ) {
				$navSelectors.css({ 'height' : topnavHeight - ( topScroll - zeroScroll ) });
				
			} else if ( topScroll > finalScroll ) {
				
				if ( !wrapper.hasClass( 'header-scroll-full' ) ) {
					$navSelectors.css({ 'height' : scrollHeight });
					wrapper.addClass('header-scroll-full');
					header.removeClass( headerSkin ).addClass( headerScrollSkin );
					wrapper.removeClass('topnav-top');
				}
				
			} else { // Initial State
				$navSelectors.css({ 'height' : '' });
				wrapper.addClass('topnav-top');
				wrapper.removeClass('header-scroll-full');
				header.removeClass( headerScrollSkin ).addClass( headerSkin );
			}
			
			if (wrapper.hasClass('dark-skin')) {
				if (wrapper.hasClass('header-light')) {
					wrapper.removeClass('header-light').addClass('header-dark');
				} else {
					logoImg.attr('src', logoLight);
				}
			}
		}
	}

	// TOPBAR HIDE ON SCROLL
	function handleTopNav() {

		var $upperNav = $('.upper-nav-wrapper');
		var upperNavHeight;
		var classOut = 'nav-out';
		
		if ( $upperNav.length && $(window).width() > 768 ) {
				
			upperNavHeight = $upperNav.height();
			
			if ( scrollPos > 0 && scrollPos <= upperNavHeight ) {
				$upperNav.css( 'margin-top',  - scrollPos );
				$upperNav.removeClass( classOut );
				//$('#main-navigation').css('top', 0);
			} else if ( scrollPos > topbarHeight ) {
				
				if ( !$upperNav.hasClass( classOut ) ) {
					$upperNav.addClass( classOut );
					$upperNav.css('margin-top',  - upperNavHeight );
				}
				
			} else {
				$upperNav.removeClass( classOut );
				$upperNav.css('margin-top', 0);
				//$('#main-navigation').css('top', topbarHeight);
			}
		}
	}

	// NAVIGATION VISIBLE ONLY ON SCROLL TO TOP
	function stickyNav() {
		if ( $( '#sticky-nav' ).length ) {
			
			var stickyNav = $('#sticky-nav');
			var windowScrollTop = $(window).scrollTop();
			
			if ( windowScrollTop >= stickyNav.data( 'scroll-amount' ) ) {
				stickyNav.addClass( 'sticky-nav-visible' );
			} else {
				stickyNav.removeClass('sticky-nav-visible');
			}
			
			if ( windowScrollTop >= stickyNav.data( 'scroll-amount' ) - 250 ) {
				header.removeClass( 'header-' + header.data( 'skin' ) ).addClass( 'header-' + header.data( 'scroll-skin' ) );
				$('#wrapper').removeClass( 'topnav-top' );
			} else {
				header.removeClass( 'header-' + header.data( 'scroll-skin' ) ).addClass( 'header-' + header.data( 'skin' ) ).addClass( 'topnav-top' );
				$('#wrapper').addClass( 'topnav-top' );
			}
		}
	}

	/* HEADER NO STICKY EFFECT */
	function headerNoSticky() {
		scrollPos = $(window).scrollTop();
		if ($('.header-no-sticky #main-navigation:not(.header-2)').length) {
			var st = $(this).scrollTop();
			if (st > lastScrollTop) {
				$('.header-no-sticky #main-navigation').removeClass('nav-visible');
			} else {
				$('.header-no-sticky #main-navigation').addClass('nav-visible');
			}
			
			if (st > 0) {
				$('#main-navigation .main-nav-wrapper').css('background', '#fff');
			} else {
				$('#main-navigation .main-nav-wrapper').css('background', '');
			}
			
			lastScrollTop = st;
		}
	}

	// TOPBAR HIDE ON SCROLL
	function handleTopbar() {

		if ($('#topbar').length && $(window).width() > 768 && !wrapper.hasClass('header-no-sticky')) {
			if ($('#header').hasClass('header-2')) {
				var header2Height = $('.header-2 .main-nav-wrapper').height();
				var windowScrollTop = $(window).scrollTop();
				if (windowScrollTop >= topbarHeight + header2Height) {
					$('.header-2 .main-nav-wrapper').css('position', 'fixed').css('width', '100%').css('top', 0);
				} else {
					$('.header-2 .main-nav-wrapper').attr('style', '');
				}
			} else {
				if (scrollPos > 0 && scrollPos <= topbarHeight) {
					$('#topbar').css('margin-top',  - scrollPos);
					$('#topbar').removeClass( 'topbar-out' );
					//$('#main-navigation').css('top', 0);
				} else if (scrollPos > topbarHeight ) {
					
					if ( !$('#topbar').hasClass( 'topbar-out' ) ) {
						$('#topbar').addClass( 'topbar-out' );
						$('#topbar').css('margin-top',  - topbarHeight);
					}
					
				} else {
					$('#topbar').removeClass( 'topbar-out' );
					$('#topbar').css('margin-top', 0);
					//$('#main-navigation').css('top', topbarHeight);
				}
			}
		}
	}

	// Page Title Vertical Align
	
	function pageTitle(){
		if ( $(window).width() >= 1000 && pageTitleResized == false ) {
		    $('#ins-page-title').each(function() {
		    	var marginTop = 55;
		    	var extra = 0;
		    	var titleInner = $(this).find( '.ins-page-title-inner' );
		    	var titleInnerHeight = titleInner.height();
		    	
		    	if( $('#header').length ) {
		    		extra = 80 / 2;
		    	}
		    	if( $('#topbar').length ) {
		    		extra += $('#topbar').height() / 2;
		    	}
		    	if( $('.bottom-nav-wrapper').length ) {
		    		extra += $('.bottom-nav-wrapper').height() / 2;
		    	}

		    	marginTop =  extra;
		        $(this).find( '.ins-page-title-inner' ).css( 'margin-top', marginTop );
		        
		        pageTitleResized = true;
		    });
		}
	}

	$(".header-search-icon").on('click', function(e)  {

		search = $('body');
		search.addClass('ins-header-search-opened');

		$('.search-close').on('click', function(e)  {
			e.preventDefault();
			search.removeClass('ins-header-search-opened');
		});

		$('body').on('click', function(e) {
			if ( $(e.target).parents('.search-tool').length || $(e.target).parents('form').length || $(e.target).parents('.btn').length || $(e.target).is('a') ) {
				return;
			}
			if (search.hasClass('ins-header-search-opened') === true) {
				search.removeClass('ins-header-search-opened');
			}
		});
	});

	// ------------------------------------------------------------------------
	// Fixed Footer
	// ------------------------------------------------------------------------
	if ($("#footer.fixed-footer").length) {
		var footerHeight = $("#footer.fixed-footer").outerHeight();
		$("#wrapper").css("margin-bottom", footerHeight);
	}
	if ($(".ins-team-popup-main").length) {
		$('.ins-team-popup-main').appendTo("body") 
	}

}) ( jQuery );