var url_ajax = '/wp-content/plugins/boda/boda_ajax.php', anchoWindowv;
var util;
var idioma;
$(document).ready(function(){
	init();
	initMenu();
});

var initialize = {
	'home' : initHome
}


function init () {

	util = new Utiles();
	idioma = new Idioma(lang,'#idiomas-section');

	//change idioma
	$('.btn-idioma').on('click',idioma.changeIdioma);

	var id = $('body').attr('id');	
	(initialize[id]!=undefined) ? initialize[id]() : null;
	(is_single) ? initSingle() : null;
}

function initMenu(){

}

//MENU
function Menu (_aside_header, _header_blur,_hero_img) {
	$this = this;
	this.aside_header = _aside_header;
	this.header_blur = _header_blur;
	this.hero_img = _hero_img;
	this.animando = true;

	this.show_menu = function(){
		$(this).addClass('activo');
		$($this.aside_header +','+ $this.header_blur).addClass('activo');	
	}
	this.hide_menu = function(){
		$('#btn-menu').removeClass('activo');
		$($this.aside_header +','+ $this.header_blur).removeClass('activo');	
	}
}



//FORM
function Form (_formE) {
	var formE = this;
	this.formE = _formE; 
	this.validation = function() {
	    $(this.formE).validate({
	        rules: {
	            '.required': {
	                required: true
	            },
	            'email':{
	                email:true
	            },
	            'url':{
	                url:true
	            },
	        },
	        errorPlacement: function(error,element) {
	            return true;
	        },
	        highlight: function(element) {
	            $(element).parent().addClass("error");
	        },
	        unhighlight: function(element) {
	            $(element).parent().removeClass("error");
	        },        
	        submitHandler: function(form) {
	        	formE.sendMail(form)
	        }
	    });	
	}
	this.sendMail = function(form) {
	    var srt = $(form).serialize();
		var ajax_object1 = {
		  url: url_ajax, //required
		  dataType : 'html', //required
		  typeMethod : 'POST', //required
		  data : srt,
		  success : callback1, //required
		  errorf : error1, //required
		}
		var ajax = new Ajax(ajax_object1);
		ajax.get_ajax();  
	};
}


//AJAX
function Ajax (obj) {
     var $this = this;
     this.url = obj["url"];
     this.dataType = obj["dataType"];
     this.typeMethod = obj["typeMethod"];
     this.success = obj["success"];
     this.errorf = obj["errorf"];
     this.data = obj["data"];
     this.get_ajax = function(){
         var ajaxRequest = $.ajax({
             url: this.url,
             dataType: this.dataType,
             type: this.typeMethod,
             data: this.data
         })
         ajaxRequest.success(function(data) {
              $this.ajax_done(data);
         });
         ajaxRequest.error(function(data) {
              $this.ajax_error(data);
         });
     }
     this.ajax_done = function (data) {
        this.success(data);
     }
     this.ajax_error = function (data) {
        this.errorf(data);
     }
}
function callback1 (data) {
  console.log(data);
}
function error1 (data) {
  console.log(data);
} 




// HOME
var lista_escenas = [
	{ "name": "Intro"},
	{ "name": "París"},
	{ "name": "Colegio"},
	{ "name": "Marruecos"},
	{ "name": "Fútbol"},
	{ "name": "Estudiar"},
]
function initHome () {
	util.setAlto('#idiomas-section');
	util.setAlto('.anima-section');
	var s = skrollr.init({
		easing: {
	        //This easing will sure drive you crazy
	        wtf: Math.random,
	        inverted: function(p) {
	            return 1 - p;
	        }
	    },	
	});
	var home = new Home(lista_escenas,'#aside-ul');
	$('#btn-scroll').on('click',home.scroll_to);
	$('#aside-ul li').on('click',home.scroll_to);
}




function Home (_lista_escenas,_nav) {
	var $this = this;
	this.lista_escenas = _lista_escenas;
	this.nav = _nav;
	this.doc = $(document);
	this.scroll_to = function () {
		var scrollTotal = $this.doc.scrollTop();
		var posY = $('#anima-section'+$(this).data('scroll_to')).offset().top;
		var diferencia = Math.round(Math.abs((posY - scrollTotal)/util.altoW()));

		var time = (diferencia!=0) ? diferencia*750 : 750;

		$('html,body').animate({ scrollTop : posY},time);
	}
	this.pinta_nav = function () {
		var lista = "";
		for (var i = 0; i < this.lista_escenas.length; i++) {
			lista+="<li data-scroll_to ="+i+"><p>"+this.lista_escenas[i]["name"]+"</p><span></span></li>";
		};
		$(this.nav).html(lista);
	}

	this.pinta_nav();

}


// SINGLE
function initSingle () {
}


//SINGLE
function Single (_list,_article) {
}

function Idioma (_lang,_section) {
	var $this = this;
	this.lang = _lang;
	this.section = _section;


	this.changeIdioma = function(){
		($this.lang != $(this).data('lang')) ? window.location = $(this).attr('href') : $this.removeIdiomaSection();
		return false;
	}
	this.removeIdiomaSection = function () {
		$($this.section).transition({y:'-100%'},500);
	}



}

function Utiles(){
	var $this = this;
	this.preload = function(list,callback){
		var call = callback;
		for (var i = 0; i < list.length; i++) {
	    	var src = list[i];
	        $('<img/>')[0].src = src;			
	        if (i == len-1) {
	        	callback();
	        };			
		};
	}
	// ALTO ANCHO WINDOW, get y set
	this.anchoW = function(){
		return (window.innerWidth) ? window.innerWidth : $(window).width();
	}
	this.altoW = function(){
		return (window.innerHeight) ? window.innerHeight : $(window).height();
	}
	this.redidensiona = function(who){
		window.onresize = function () {
			$(who).height($this.altoW);
		}
	}
	this.setAncho = function(who){
		$(who).width($this.anchoW);
	}
	this.setAlto = function(who){
		$(who).height($this.altoW);
		this.redidensiona(who);
	}



	// MANIPULACIÓN
	this.dosnumeros = function(value){
		return (value < 10) ? "0"+value : value;
	}

}


