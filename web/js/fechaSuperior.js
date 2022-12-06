AOS.init({
    duration: 800,
    easing: 'slide',
    once: true
});

jQuery(document).ready(function($) {

    $('#NuevoPronostico1').submit(e => {
        e.preventDefault();
        const postDataFechaPronosticoSuperior1 = {
          fechaNuevoPronostico1: $('#fechaNuevoPronostico1').val()
        };
        const url ='../php/AgregarFechaPronosticoSuperior1.php';
        console.log(postDataFechaPronosticoSuperior1, url);
        $.post(url, postDataFechaPronosticoSuperior1, (response) => {
        location.reload();
        });
      });


    let fecha1="";
    buscarFechSuperior1();
    function buscarFechSuperior1() {
        $.ajax({
          url: '../php/buscarFechSuperior1.php',
          type: 'GET',
          async: false,
          dataType: 'html',
          success: function(response) {
            console.log(response);
            const Fechas = JSON.parse(response);
            Fechas.forEach(fch => {
                fecha1= fch.fecha;
            });
            console.log(fecha1.replace(/-/g,'/'));
            
          }
        });
    }


   var siteCountDown1 = function() {
       
   

       $('#date-countdown').countdown(fecha1, function(event) {
         var $this = $(this).html(event.strftime(''
           + '<span class="countdown-block"><span class="label">%w</span> Semana </span>'
           + '<span class="countdown-block"><span class="label">%d</span> Dias </span>'
           + '<span class="countdown-block"><span class="label">%H</span> hr </span>'
           + '<span class="countdown-block"><span class="label">%M</span> min </span>'
           + '<span class="countdown-block"><span class="label">%S</span> sec</span>'));
       });
               
   };
   siteCountDown1();


   $('#NuevoPronostico2').submit(e => {
    e.preventDefault();
    const postDataFechaPronosticoSuperior2 = {
      fechaNuevoPronostico2: $('#fechaNuevoPronostico2').val()
    };
    const url ='../php/AgregarFechaPronosticoSuperior2.php';
    console.log(postDataFechaPronosticoSuperior2, url);
    $.post(url, postDataFechaPronosticoSuperior2, (response) => {
    location.reload();
    });
  });


    let fecha2="";
    buscarFechSuperior2();
    function buscarFechSuperior2() {
    $.ajax({
      url: '../php/buscarFechSuperior2.php',
      type: 'GET',
      async: false,
      dataType: 'html',
      success: function(response) {
        console.log(response);
        const Fechas = JSON.parse(response);
        Fechas.forEach(fch => {
            fecha2= fch.fecha;
        });
        console.log(fecha2.replace(/-/g,'/'));
        
      }
    });
}


var siteCountDown2 = function() {
   


   $('#date-countdown2').countdown(fecha2, function(event) {
     var $this = $(this).html(event.strftime(''
       + '<span class="countdown-block"><span class="label">%w</span> Semana </span>'
       + '<span class="countdown-block"><span class="label">%d</span> Dias </span>'
       + '<span class="countdown-block"><span class="label">%H</span> hr </span>'
       + '<span class="countdown-block"><span class="label">%M</span> min </span>'
       + '<span class="countdown-block"><span class="label">%S</span> sec</span>'));
   });
           
};
siteCountDown2();



$('#NuevoPronostico3').submit(e => {
    e.preventDefault();
    const postDataFechaPronosticoSuperior3 = {
      fechaNuevoPronostico3: $('#fechaNuevoPronostico3').val()
    };
    const url ='../php/AgregarFechaPronosticoSuperior3.php';
    console.log(postDataFechaPronosticoSuperior3, url);
    $.post(url, postDataFechaPronosticoSuperior3, (response) => {
    location.reload();
    });
  });


    let fecha3="";
    buscarFechSuperior3();
    function buscarFechSuperior3() {
    $.ajax({
      url: '../php/buscarFechSuperior3.php',
      type: 'GET',
      async: false,
      dataType: 'html',
      success: function(response) {
        console.log(response);
        const Fechas = JSON.parse(response);
        Fechas.forEach(fch => {
            fecha3= fch.fecha;
        });
        console.log(fecha3.replace(/-/g,'/'));
        
      }
    });
}


var siteCountDown3 = function() {
   


   $('#date-countdown3').countdown(fecha3, function(event) {
     var $this = $(this).html(event.strftime(''
       + '<span class="countdown-block"><span class="label">%w</span> Semana </span>'
       + '<span class="countdown-block"><span class="label">%d</span> Dias </span>'
       + '<span class="countdown-block"><span class="label">%H</span> hr </span>'
       + '<span class="countdown-block"><span class="label">%M</span> min </span>'
       + '<span class="countdown-block"><span class="label">%S</span> sec</span>'));
   });
           
};
siteCountDown3();




   

});