//Carousel
$('.carousel.carousel-slider').carousel({
            fullWidth: true,
            indicators: true
        });
        setInterval(function(){
            //$('.carousel.carousel-slider').carousel('next');
        },5000)
//Fin-Carousel
//
//

$(document).ready(function(){
    $('.datepicker').datepicker({
    	format: 'dd-mm-yyyy',
        firstDay: 1,
        i18n: ({
    		cancel: "cancelar",
    		months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
    		monthsShort: [ 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
    		weekdays: [ 'Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
    		weekdaysShort: [ 'Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
            weekdaysAbbrev:  ['D','L','M','M','J','V','S']

    	})
    });
  });

$(document).ready(function(){
    $('.collapsible').collapsible();
  });

$(document).ready(function(){
    $('select').formSelect();
  });