AOS.init({
    duration: 800,
    easing: 'slide',
    once: true
});

jQuery(document).ready(function($) {

    $('#NuevoPronostico').submit(e => {
        e.preventDefault();
        const postDataFechaPronosticoBasico = {
          fechaNuevoPronostico: $('#fechaNuevoPronostico').val()
        };
        const url ='../php/AgregarFechaPronosticoBasico.php';
        console.log(postDataFechaPronosticoBasico, url);
        $.post(url, postDataFechaPronosticoBasico, (response) => {
        location.reload();
        });
      });


    let fecha="";
    buscarFechBasico();
    function buscarFechBasico() {
        $.ajax({
          url: '../php/buscarFechBasico.php',
          type: 'GET',
          async: false,
          dataType: 'html',
          success: function(response) {
            console.log(response);
            const Fechas = JSON.parse(response);
            Fechas.forEach(fch => {
                fecha= fch.fecha;
            });
            console.log(fecha.replace(/-/g,'/'));
            
          }
        });
    }


   var siteCountDown = function() {
       
   

       $('#date-countdown, #date-countdown2').countdown(fecha, function(event) {
         var $this = $(this).html(event.strftime(''
           + '<span class="countdown-block"><span class="label">%w</span> Semana </span>'
           + '<span class="countdown-block"><span class="label">%d</span> Dias </span>'
           + '<span class="countdown-block"><span class="label">%H</span> hr </span>'
           + '<span class="countdown-block"><span class="label">%M</span> min </span>'
           + '<span class="countdown-block"><span class="label">%S</span> sec</span>'));
       });
               
   };
   siteCountDown();

   

});