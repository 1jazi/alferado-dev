var isMobile = {
	Android: function() {
		return navigator.userAgent.match(/Android/i);
	},
	BlackBerry: function() {
		return navigator.userAgent.match(/BlackBerry/i);
	},
	iOS: function() {
		return navigator.userAgent.match(/iPhone|iPad|iPod/i);
	},
	Opera: function() {
		return navigator.userAgent.match(/Opera Mini/i);
	},
	Windows: function() {
		return navigator.userAgent.match(/IEMobile/i);
	},
	any: function() {
		return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
	}
};

jQuery(document).ready(function($){
    
    if ($('.woocommerce-MyAccount-navigation').length > 0) {
		$('.woocommerce-MyAccount-navigation li').each(function(){
			var woo_my_nav = $(this).find('a');
			woo_my_nav.attr('href', woo_my_nav.attr('href') + "#main-my-account-section"); 
		});
	}
	
	if ($('.woocommerce-MyAccount-navigation-link--vendor-add-product').length > 0) {
		$('.woocommerce-MyAccount-navigation-link--vendor-add-product').before('<h6 class="font-weight-medium font-size-7 mb-5 mb-lg-7 seller-acc" style="margin-top: 20px;">Seller Account</h6>');
	}
	
	if (document.URL.indexOf('/checkout/') > -1) {
		let _create_account = $('.woocommerce-form-login a.btn').parent();
		_create_account.html('');
		_create_account.html('<a href="/my-account/" class="js-animation-link btn btn-block py-3 rounded-0 btn-outline-dark font-weight-medium active">Create Account</a>');
	}
	
	if (document.URL.indexOf('/my-account/') > -1) {
		$('#registerLoginForm a[data-target="#signup"]').hide();
		$('#signup').html('');
	} 
	
	if ($('#wpwc_custom_registration_field_34528_field').length > 0) {
		$(document).on('change', '#wpwc_custom_registration_field_34528_field select', function(){
			let _form = $(this).parents('form');
			_form.removeClass('uae-school uae-university jordan-school jordan-university uae-city jordan-city');
			
			$('#wpwc_custom_registration_field_34551_field select').prop('selectedIndex',0);
			$('#wpwc_custom_registration_field_34529_field select').prop('selectedIndex',0);
			$('#wpwc_custom_registration_field_34530_field select').prop('selectedIndex',0);
			$('#wpwc_custom_registration_field_34531_field select').prop('selectedIndex',0);
			$('#wpwc_custom_registration_field_34532_field select').prop('selectedIndex',0);
			$('#wpwc_custom_registration_field_34533_field select').prop('selectedIndex',0);
			
			if ("uae" == $(this).val()) {
				_form.addClass('uae-city');
			} else {				
				_form.addClass('jordan-city');
			}		
		});
	}
	
	if ($('#wpwc_custom_registration_field_34551_field').length > 0) {
		$(document).on('change', '#wpwc_custom_registration_field_34551_field select', function(){
			let _city = $('#wpwc_custom_registration_field_34528_field select').val();	
			let _form = $(this).parents('form');	
			let _status = $(this).val();
			let _school = false;
			let _university = false;
			
			_form.removeClass('uae-school uae-university jordan-school jordan-university');
			$('#wpwc_custom_registration_field_34530_field select').prop('selectedIndex',0);
			$('#wpwc_custom_registration_field_34531_field select').prop('selectedIndex',0);
			$('#wpwc_custom_registration_field_34532_field select').prop('selectedIndex',0);
			$('#wpwc_custom_registration_field_34533_field select').prop('selectedIndex',0);
			
			if (_status.indexOf('School') > -1){
				_school = true;
			}
			
			if (_status.indexOf('University') > -1){
				_university = true;
			}
		
			if ("uae" == _city && _school) {
				_form.toggleClass('uae-school');
			}	

			if ("uae" == _city && _university) {
				_form.toggleClass('uae-university');
			}

			if ("jordan" == _city && _school) {
				_form.toggleClass('jordan-school');
			}
			
			if ("jordan" == _city && _university) {
				_form.toggleClass('jordan-university');
			}			
		});
	}
	
	if (isMobile.any() && $('body').hasClass('tax-product_cat')) {
		if ($('.sidebar').length > 0 && $('.sidebar .widget_nav_menu').length > 0) {
			if (!$('.sidebar .widget-head a').hasClass('collapsed')) {
				$('.sidebar .widget-head a').addClass('collapsed');					
				$('.sidebar .widget-head a').attr('aria-expanded', 'false');					
			}
			
			if ($('.sidebar .widget-content.collapse').hasClass('show')) {
				$('.sidebar .widget-content.collapse').removeClass('show');	
			}
		}
	}
	
	if ($('#tab-title-additional_information').length > 0) {
		$('#tab-title-additional_information a').text('Additional Information');
	}
	
	if ($('.sidebar .widget-content ul.menu').length > 0) {
		if ($('.sidebar .widget-content ul.menu').find('.sub-menu').length > 0) {
			$('.sidebar .widget-content ul.menu > .sub-menu').before('<span class="child-toggle-sign">+</span>');		
		}
		$('.sidebar .widget-content ul.menu li').click(function(){
			if ($(this).find('.sub-menu').length > 0) {				
				$(this).find('.sub-menu').slideToggle(function(){
					if ($('.child-toggle-sign').hasClass('minus')) {
						$('.child-toggle-sign').text('+');
						$('.child-toggle-sign').removeClass('minus');
					} else {
						$('.child-toggle-sign').text('-');
						$('.child-toggle-sign').addClass('minus');
					}
				});
			}
		});
	}
});