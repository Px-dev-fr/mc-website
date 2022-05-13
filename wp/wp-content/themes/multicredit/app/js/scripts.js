/* Custom theme scripts */


/* Translations */
var $cg = 'en';
var $cgtitle = 'General terms and conditions';
var $visitpage = 'Visit page';

if (jQuery('body').hasClass('fr')) {
	 	$cg = 'fr';
		$cgtitle = 'Conditions générales';
		$visitpage = 'Visiter la page';
	} else if (jQuery('body').hasClass('de'))  {
		$cg = 'de';
		$cgtitle = 'Allgemeine Geschäftsbedingungen';
		$visitpage = 'Besuchen Sie die Seite';
	} else if (jQuery('body').hasClass('it'))  {
		$cg = 'it';
		$cgtitle = 'Condizioni generali di contratto';
		$visitpage = 'Visita la pagina';
	} else if (jQuery('body').hasClass('es'))  {
		$cg = 'es';
		$cgtitle = 'Términos y condiciones generales';
		$visitpage = 'Visitar la página';
	} else if (jQuery('body').hasClass('pt-pt'))  {
		$cg = 'pt-pt';
		$cgtitle = 'Condições gerais';
		$visitpage = 'Visite a página';
	} else if (jQuery('body').hasClass('tr'))  {
		$cg = 'tr';
		$cgtitle = 'Genel şartlar ve koşullar';
		$visitpage = 'Sayfayı ziyaret edin';
	} else if (jQuery('body').hasClass('sq'))  {
		$cg = 'sq';
		$cgtitle = 'Kushtet e përgjithshme të biznesit';
		$visitpage = 'Vizitoni faqen';
}

/* END */

gsap.to(".footericon", {duration: 2, rotation: 360});

var animationheader = gsap.timeline();
animationheader.to(".hero h1", {duration: .75, opacity:1, y: 0});
animationheader.to(".hero h4", {duration: .75, opacity:1, y: 0}, "-=.5");
animationheader.to(".hero-check-image", {duration: .75, opacity:1, y: 0}, "-=.5");
animationheader.to(".hero-banner-image", {duration: .75, opacity:1, y: 0}, "-=.5");


jQuery(document).ready(function() {

	jQuery('.loader').fadeOut();

	/*----- Sub menu -----*/
	if (jQuery(window).width() <= 1024) {
		jQuery(".menu-item-has-children").unbind("mouseenter mouseleave");
	} else{
		jQuery('.menu-item-has-children').hover(
			function() {
				jQuery(this).find('ul').stop().slideDown();
			}, function() {
				jQuery(this).find('ul').stop().slideUp();
		});
	}

	jQuery(window).resize(function(){
		if (jQuery(window).width() <= 1024) {
			jQuery(".menu-item-has-children").unbind("mouseenter mouseleave");
		} else{
			jQuery('.menu-item-has-children').hover(
				function() {
					jQuery(this).find('ul').stop().slideDown();
				}, function() {
					jQuery(this).find('ul').stop().slideUp();
			});
		}
	});


	/*----- Mobile nav on click instead of hover -----*/
	jQuery('#GeneralWrapper .mobile-menu ul li.menu-item-has-children a').click(
		function(event) {

				var link = jQuery(this).attr('href');

				event.preventDefault();

				jQuery(this).parent('li').find('ul').stop().slideToggle();
		});

	jQuery('#GeneralWrapper .mobile-menu ul li.menu-item-has-children a').each(function() {
			var link = jQuery(this).attr('href');
			jQuery(this).parent('li').children('ul').prepend('<li><a href="' + link + '">' + $visitpage + '</a></li>');
	});

	jQuery('#GeneralWrapper .mobile-menu ul li.menu-item-has-children ul li a').click(
		function(event) {
			window.location = jQuery(this).attr('href');
		});

		jQuery('.menu-item a').click(function(){
			//jQuery('.loader').fadeIn();
		});

		jQuery('header .btn').click(function(){
			//jQuery('.loader').fadeIn();
		});

	/*----- scroll to anchor -----*/
	jQuery('.slideto').click(function(e) {
		e.preventDefault();
		var aid = jQuery(this).attr('href');
		jQuery('html,body').animate({scrollTop: jQuery(aid).offset().top},'slow');
	});

	/*----- scroll to top -----*/
	jQuery('#scrollTopBtn').click(function(e) {
		e.preventDefault();
		jQuery("html, body").animate({scrollTop: "0"}, 'fast');
	});

	jQuery(window).scroll(function() {
		if (jQuery(this).scrollTop() > 75) {
			jQuery('#scrollTopBtn').fadeIn();
		} else {
			jQuery('#scrollTopBtn').fadeOut();
		}
	})

	.trigger('scroll');

	/*----- mobile menu -----*/
	jQuery('#hamburger-trigger').click( function() {
		jQuery(this).toggleClass("is-active");
		jQuery('.mobile-menu').toggleClass("visible");
	});

	// Children
	jQuery('.mobile-menu .menu-item-has-children > a').click( function(e) {
		e.preventDefault();
		jQuery('.menu-item-has-children').removeClass("active");
		jQuery(this).parent().addClass("active");
	});

	/*----- search form -----*/
	jQuery(".search_icon").click(function() {
		 jQuery(".spicewpsearchform").slideToggle();
	 });

  jQuery(document).keydown(function(e) {
    if (e.keyCode == 27) {
      //$(modal_or_menu_element).closeElement();
      jQuery(".spicewpsearchform").hide();
    }
  });

	/*----- Terms of use modal -----*/

	var $cgurl = 'https://multicredit.ch/' + $cg + '/cg/';
	new jBox('Modal', {
	  attach: '#termsofusemodal, #menu-item-332, #menu-item-13027, #menu-item-13025, #menu-item-13029, #menu-item-13461, #menu-item-13465, #menu-item-13882, #menu-item-13881',
	  title: $cgtitle,
		width: '70%',
		height: '80%',
		content:'<iframe src="'+$cgurl+'" width="100%" height="100%" style="border:none;"></iframe>'
	});

	jQuery('#menu-item-332, #menu-item-13027, #menu-item-13025, #menu-item-13029, #menu-item-13461, #menu-item-13465, #menu-item-13882, #menu-item-13881').click(function(e){
		e.preventDefault();
		jQuery('.loader').fadeOut();
	});

	jQuery('.countAnim h3').each(function () {
	  var $this = jQuery(this);
	  jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
	    duration: 1500,
	    easing: 'swing',
	    step: function () {
	      $this.text(Math.ceil(this.Counter));
	    }
	  });
	});


	/*----- Rachat Pret Form send

	#typeCredit4
	#typeCredit4 span

	*/

	function sendrachatform() {
		let $Credit = jQuery('#MCredit').text();
		let $DCredit = jQuery('#DCredit').text();
		let $Credit1 = jQuery('#typeCredit1').text();
		let $Credit2 = jQuery('#typeCredit2').text();
		let $Credit3 = jQuery('#typeCredit3').text();
		let $Credit4 = jQuery('#typeCredit4').text();

		jQuery('#rachatpretform #montantCredit-field').val($Credit);
		jQuery('#rachatpretform #dureeCredit-field').val($DCredit);
		jQuery('#rachatpretform #typeCredit1-field').val($Credit1);
		jQuery('#rachatpretform #typeCredit2-field').val($Credit2);
		jQuery('#rachatpretform #typeCredit3-field').val($Credit3);
		jQuery('#rachatpretform #typeCredit4-field').val($Credit4);

	}

	sendrachatform();


// Budget Calculator

	var montant='';
	var duree='';

	function calculbudget(){
	  var salaire = $('#salaire').val();
	  var revenuconjoint = $('#revenuconjoint').val();
	  var autresrevenus = $('#autresrevenus').val();

	  var loyer = $('#loyer').val();
	  var fraismenage = $('#fraismenage').val();
	  var fraisdeplacement = $('#fraisdeplacement').val();
	  var fraisassurance = $('#fraisassurance').val();
	  var autresfrais = $('#autresfrais').val();
	  var nombreenfants = $('#nombreenfants').val();
		var fraisenfants = (1 * nombreenfants) * 200;

	  var excedantbudget = 0;

	  var calcul = ((1 * salaire) + (1 * revenuconjoint) + (1 * autresrevenus)) - ((1 * loyer) + (1 * fraismenage) + (1 * fraisdeplacement) + (1 * fraisassurance) + (1 * autresfrais) + fraisenfants);
		var capaciteemprunt = (calcul * 36);

	  jQuery("#budgetTotal").html(calcul + " CHF");
		jQuery("#borrowCapacity").html(capaciteemprunt + " CHF");
	}

	jQuery("#calculatebudgetbtn").click(function(){
		calculbudget();
	});

	// Calculator
	function nombre(n) {
		return n.toFixed().replace(/\d(?=(\d{3})+$)/g, '$&\'')+" Chf";
	}

	function getMens(montant, duree, taux){
		var taux_e = Math.pow(1+taux/100, 1/12) -1;
		var facture = montant * ((taux_e) / (1- (Math.pow((1+(taux_e)), - duree))));
		var interet = duree * facture - montant;
		return facture;
	}

	function getInteret(montant, duree, taux){
		var taux_e = Math.pow(1+taux/100, 1/12) -1;
		var facture = montant * ((taux_e) / (1- (Math.pow((1+(taux_e)), - duree))));
		var interet = duree * facture - montant;
		return interet;
	}

  var montant = '';
	var montantcredit1 = '';
	var montantcredit2 = '';
	var montantcredit3 = '';
	var montantcredit4 = '';
	var montantrachat = '';
	var dureerachat = '';
	var duree = '';

	function recalc(){
		 montant = $('#montant').val();
		 duree = $('#duree').val();

		var montant49 = getMens(montant, duree, '4.5');
		$('#mensualite49').html(nombre(montant49));

		/*
		var montant99 = getMens(montant, duree, '9.9');
		$('#mensualite99').html(nombre(montant99));

		var montant6 = getMens(montant, duree, '6');
		$('#mensualite6').html(nombre(montant6));

		var interet49 = getInteret(montant, duree, '4.9');
		$('#interet49').html(nombre(interet49));

		var interet6 = getInteret(montant, duree, '6');
		$('#interet6').html(nombre(interet6));

		var interet99 = getInteret(montant, duree, '9.9');
		$('#interet99').html(nombre(interet99));

		var total49 = (1 * montant) + (1* interet49);
		$('#total49').html(nombre(total49));

		var total6 = (1 * montant) + (1* interet6);
		$('#total6').html(nombre(total6));

		var total99 = (1 * montant) + (1* interet99);
		$('#total99').html(nombre(total99));
		*/

		// $('#montantrachat').html(nombre(montantrachat));

		//$('.summary-amount').html(montant);
		//$('.summary-duration').html(duree);

		//$('.montanthiddenfield').attr('value', montant);
		//$('.dureehiddenfield').attr('value', duree);

	}	// Config

	function recalcRachat(){
		 montantcredit1 = $('#montantcredit1').val();
		 montantcredit2 = $('#montantcredit2').val();
		 montantcredit3 = $('#montantcredit3').val();
		 montantcredit4 = $('#montantcredit4').val();
		 montantrachat = (1 * montantcredit1) + (1 * montantcredit2) + (1 * montantcredit3) + (1 * montantcredit4);
		 dureerachat = $('#dureerachat').val();

		var montantrachat49 = getMens(montantrachat, dureerachat, '4.9');

		jQuery('#mensualiterachat49').html(nombre(montantrachat49));
		jQuery('#montantrachat').html(nombre(montantrachat));

	}	// Config


	//recalc();
	//recalcRachat();

	jQuery(montant).change(function(){
		recalc();
	});

	jQuery("#montantSlider").on("change mousemove", function(){
		recalc();
	});

	jQuery("#montantcredit1").on("change mousemove", function(){
		recalcRachat();
	});

	jQuery("#montantcredit2").on("change mousemove", function(){
		recalcRachat();
	});

	jQuery("#montantcredit3").on("change mousemove", function(){
		recalcRachat();
	});

	jQuery("#montantcredit4").on("change mousemove", function(){
		recalcRachat();
	});

	jQuery(duree).change(function(){
		recalc();
	});

	jQuery(dureerachat).change(function(){
		recalcRachat();
	});

	jQuery("#dureeSlider").on("change mousemove", function(){
		recalc();
	});

	jQuery("#dureerachatSlider").on("change mousemove", function(){
		recalcRachat();
	});

	jQuery('.secondary-menu .wpml-ls-current-language > a').click(function(e) {
		e.preventDefault();
		jQuery('.secondary-menu .sub-menu').css('display','block');
		console.log('done');
	});



/*
	jQuery('input[type="range"]').change(function () {
    var val = (jQuery(this).val() - jQuery(this).attr('min')) / (jQuery(this).attr('max') - jQuery(this).attr('min'));

    jQuery(this).css('background-image',
        '-webkit-gradient(linear, left top, right top, '
        + 'color-stop(' + val + ', #df003c), '
        + 'color-stop(' + val + ', #f0f0f0)'
        + ')'
        );
			});
*/
	AOS.init({
  // Global settings:
  //disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  //startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  //initClassName: 'aos-init', // class applied after initialization
  //animatedClassName: 'aos-animate', // class applied on animation
 // useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  //disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  //debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  //throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)

  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 120, // offset (in px) from the original trigger point
  //delay: 0, // values from 0 to 3000, with step 50ms
  //duration: 400, // values from 0 to 3000, with step 50ms
 // easing: 'ease', // default easing for AOS animations
  //once: false, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  //anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation
	});

    jQuery('.sticky').theiaStickySidebar({
      // Settings
     additionalMarginTop: 30
    });

});


function setCookie(a, d, b) {
	var c = new Date;
	c.setTime(c.getTime() + 864E5 * b);
	b = "; expires=" + c.toGMTString();
	document.cookie = a + "=" + d + b
}


// Fonctions pour sauvegarder le gclid dans le CRM
function getParam(a) {
	return (a = RegExp("[?&]" + a + "=([^&]*)").exec(window.location.search)) && decodeURIComponent(a[1].replace(/\+/g, " "))
}

function readCookie(c_name) {
	var c_value = document.cookie;
	var c_start = c_value.indexOf(" " + c_name + "=");
	if (c_start == -1) {
		c_start = c_value.indexOf(c_name + "=");
	}
	if (c_start == -1) {
		c_value = null;
	} else {
		c_start = c_value.indexOf("=", c_start) + 1;
		var c_end = c_value.indexOf(";", c_start);
		if (c_end == -1) {
			c_end = c_value.length;
		}
		c_value = unescape(c_value.substring(c_start, c_end));
	}
	return c_value;
}



var gclid = getParam("gclid");
if (gclid) {
	var gclsrc = getParam("gclsrc");
	(!gclsrc || -1 !== gclsrc.indexOf("aw")) && setCookie("gclid", gclid, 90)
};
