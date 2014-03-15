var url_ajax = '/boda/wp-content/plugins/helper/helper-ajax.php', anchoWindowv;
var util;
var idioma;
$(document).ready(function(){
	init();
	initMenu();
});

var initialize = {
	'home' : initHome,
	'confirmar-asistencia' : initConfirmarAsitencia
}


function init () {

	util = new Utiles();
	idioma = new Idioma(lang,'#idiomas-section');

	//init
	var id = $('body').attr('id');	
	(initialize[id]!=undefined) ? initialize[id]() : null;
	(is_single) ? initSingle() : null;

	//change idioma
	$('.btn-idioma').on('click',idioma.changeIdioma);
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













// CONFIRMAR ASISTENCIA
function initConfirmarAsitencia () {
	var confirmar = new ConfirmarAsistencia('#confirmar-form','#asistentes-ul','#asistentes-select');
	$('#asistentes-select').on('change',confirmar.add_asistentes);
}


//CONFIRMAR ASISTENCIA
function ConfirmarAsistencia (_form_id,_asistentes_ul,_asistentes_select) {
	var $this = this;
	this.form_id = _form_id;
	this.asistentes_ul = _asistentes_ul;
	this.asistentes_select = _asistentes_select;


	this.fill_select = function(num){
		var option_box = '';
		for (var i = 0; i < num; i++) {
			option_box += '<option value="'+(i+1)+'">'+(i+1)+'</option>';	
		};
		$($this.asistentes_select).html(option_box);
	}

	this.add_asistentes = function(){
		var num_asistentes = $($this.asistentes_select).val();
		var li_box = '';
		for (var i = 0; i < num_asistentes; i++) {
			li_box += ''+
			'<li id="asistente'+(i+1)+'">'+
				'<h3>'+(i+1)+'º Asistente</h3>'+
				'<label class="n-input">'+
					'<span>Nombre y Appellido *</span>'+
					'<input class="required" type="text" id="nombre'+(i+1)+'" name="nombre'+(i+1)+'" placeholder="Escribe el nombre y apellido del Asistente '+(i+1)+'">'+
				'</label>'+
			    '<div class="checkContainer blanco">'+
			        '<div class="status"></div>'+
			        '<input id="pre-boda'+(i+1)+'" type="checkbox" name="pre-boda'+(i+1)+'">'+
			        '<label for="pre-boda'+(i+1)+'">'+
			            '<span class="checkSquare"><span></span></span>'+
			            '<p class="name">Asistirá a la pre-boda</p>'+
			        '</label>'+
			    '</div>'+
			'</li>';
		};
	$($this.asistentes_ul).html(li_box);
	//validar formulario
	var validate_instance = new Form(this.form_id);
	validate_instance.validation();
	}

	this.fill_select(10);
	this.add_asistentes();

}

function confirm_asistencia (data) {
  console.log(data);

}
function error1 (data) {
  console.log(data);
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

//FORM
function Form (_form_id) {
	var $this = this;
	this.form_id = _form_id; 
	this.validation = function() {
	    $(this.form_id).validate({
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
	        	$this.sendMail(form)
	        }
	    });	
	}
	this.sendMail = function(form) {
   	    var asistentes = [];

	    for (var i = 0; i < $('#asistentes-select').val(); i++) {
	    	asistentes.push( 
	    		{
	    			"name" : $('#nombre'+(i+1)).val(), 
	    			"pre-boda" : $('#pre-boda'+(i+1)).is(':checked'),
	    			"post-boda" : $('#post-boda'+(i+1)).is(':checked')
	    		}
	    	);
	    };

	    var datos = {
	    	"asistentes" : asistentes,
	    	"email" : $('#email-confirmar').val(),
	    	"tel" : $('#phone-confirmar').val(),
	    	"key" : $('#key').val()
	    }


		var ajax_object1 = {
		  url: url_ajax, //required
		  dataType : 'html', //required
		  typeMethod : 'POST', //required
		  data : datos,
		  success : confirm_asistencia, //required
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



