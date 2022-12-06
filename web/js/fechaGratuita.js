AOS.init({
    duration: 800,
    easing: 'slide',
    once: true
});

jQuery(document).ready(function($) {
  
  $('#NuevoPronostico').submit(e => {
    e.preventDefault();
    const postDataFechaPronosticoGratuito = {
      fechaNuevoPronostico: $('#fechaNuevoPronostico').val()
    };
    const url ='../php/AgregarFechaPronosticoGratuito.php';
    console.log(postDataFechaPronosticoGratuito, url);
    $.post(url, postDataFechaPronosticoGratuito, (response) => {
     location.reload();
    });
  });



    let fecha="";
    buscarFechGratis();
    function buscarFechGratis() {
        $.ajax({
          url: '../php/buscarFechGratis.php',
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