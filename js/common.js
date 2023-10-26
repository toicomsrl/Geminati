
// BOTTONE TORNA SU
jQuery(document).ready(function () {	
    
	function fx() {
		if (jQuery(document).scrollTop() < 800) {							
				jQuery('#btn-top').css('display', 'none');			
		} else {			
				jQuery('#btn-top').css('display', 'block');			
		}
	}
    jQuery(document).scroll(function(event){fx(); });  
});



// MENU MOBILE

function mostra() {
	document.getElementById("nav-mobile").style.display="block";
	document.getElementById("btn-01").style.display="none";
	document.getElementById("btn-02").style.display="block";
};
function nascondi() {
	document.getElementById("nav-mobile").style.display="none";
	document.getElementById("btn-01").style.display="block";
	document.getElementById("btn-02").style.display="none";
    document.getElementById("menusec").style.display="none";
	document.getElementById("mostramobile").style.display="block";
	document.getElementById("nascondimobile").style.display="none";
};

function mostrasub() {
	document.getElementById("menusec").style.display="block";
	document.getElementById("mostramobile").style.display="none";
	document.getElementById("nascondimobile").style.display="block";
};
function chiudisub() {
	document.getElementById("menusec").style.display="none";
	document.getElementById("mostramobile").style.display="block";
	document.getElementById("nascondimobile").style.display="none";
};

function mostraporte() {
	document.getElementById("menuporte").style.display="block";
	document.getElementById("mostraporte").style.display="none";
	document.getElementById("nascondiporte").style.display="block";
};
function chiudiporte() {
	document.getElementById("menuporte").style.display="none";
	document.getElementById("mostraporte").style.display="block";
	document.getElementById("nascondiporte").style.display="none";
};
// SCROLLA FINO AD UN DIV
function scroll_to(div){
    $('html, body').animate({scrollTop: $(div).offset().top-50},800);
};






    function mostra_terzo(sub_ul, li)
    {
        if($("#"+sub_ul).css('display') == 'block')
        {  
            $("#"+li+" .ico-arrow").addClass('left'); 
        }
        else
        {
           
            $("#"+li+" .ico-arrow").removeClass('left'); 
        }
        $("#"+sub_ul).slideToggle();       
        
       
    }



// GALLERY
$(function(){
		var $gallery = $('.gallery a').simpleLightbox();
	});
	




          
        $(document).on('ready', function() {
            
            $(".slider").slick({
            dots: true,
            infinite: true,
            arrows: false,
            autoplay: true,
            autoplaySpeed:3300,
            pauseOnFocus:false,
            pauseOnHover:false,
            speed:1500,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [
                {
                breakpoint: 1000,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                     }
                },
                {
                breakpoint: 750,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
            });
            
            $(".carusel").slick({
            dots: true,
            infinite: true,
            arrows: false,
            autoplay: true,
            autoplaySpeed:3500,
            speed:1500,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [
                {
                breakpoint: 1000,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                     }
                },
                {
                breakpoint: 750,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
            });
        });
        



// CHIUDI POP UP
               
                function setCookie(nome, valore, ggScadenza, path) {
                  if (path == undefined) {
                    path = "/";
                  }
                  var d = new Date();
                  d.setTime(d.getTime() + (ggScadenza * 1 * 60 * 60 * 1000));
                  var expires = "expires=" + d.toUTCString();
                  document.cookie = nome + "=" + valore + "; " + expires + "; path=" + path;
                }

                function getCookie(nome) {
                  var name = nome + "=";
                  var ca = document.cookie.split(';');
                  for (var i = 0; i < ca.length; i++) {
                    var c = ca[i];
                    while (c.charAt(0) == ' ')
                      c = c.substring(1);
                    if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
                  }
                  return "";
                }
                
                 function chiudipop() {
                    document.getElementById("popup").style.display="none";
                    setCookie('ilMioCookie', "chiuso", 1, '/');                    
                }