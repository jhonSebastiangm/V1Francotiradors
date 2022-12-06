$(document).ready(function() {
  let Nivel=0;


  CargarFrancotiradores();

console.log("ejecutand");

  function CargarFrancotiradores() {
    console.log("ejecutand");
    $.ajax({
      url: '../php/CargarFrancotiradores.php',
      type: 'GET',
      success: function(response) {
        console.log(response);
        const ContenedorFrancotiradores = JSON.parse(response);
        
        let template = '';
        ContenedorFrancotiradores.forEach(franco => {
          template += `
          
        <div class="col-lg-4 mb-4">
          <div class="custom-media d-block">
            <div class="img mb-4">
              <a href="single.html"><img src="${franco.ruta}" alt="Image" class="img-fluid"></a>
            </div>
            <div class="text" francoId="${franco.id}">
              <!--<span class="meta">May 20, 2020</span> -->
              <h3 class="mb-4"><a  href="#">${franco.nombre}</a></h3>
              <div id="graficos">
              <h2>Aciertos.</h2>
              <figure class="horizontal">85%</figure>
              </div>
               <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
             <p><a href="#">Read more</a></p> -->
              <button id="ObtenerPronosticosDelFrancotirador" class="btn btn-primary">Ingresar</button>
              <!--<a href="#" class="btn btn-primary">Ingresar</a> -->
            </div>
          </div>
        </div>
                `
                //CargarItemsBasico(franco.id);
                $('#contenedorFrancotiradores').html(template);
        });
        
      }
    });
  }


  $(document).on('click', '.ObtenerPronosticosDelFrancotirador', (e) => {
    if(confirm('Esta seeguro que quiere ver los pronosticos de este francotirador')) {
      const element = $(this)[0].activeElement.parentElement.parentElement;
      const id = $(element).attr('francoId');
      //$.post('task-delete.php', {id}, (response) => {
       // fetchTasks();
      //});
      console.log("este es el id del francotirador"+id);
    }
  });

  

  ConsultarNivelSesion();
  function ConsultarNivelSesion() {
    $.ajax({
      url: '../php/ConsultarNivelSesion.php',
      type: 'GET',
      async: false,
      dataType: 'html',
      success: function(response) {
        const MiNivel = JSON.parse(response);
        MiNivel.forEach(lvl => {
          Nivel = lvl.nivel;
        });
      }
    });
  }if (Nivel==1) {
    BuscarPronosticoBasico();
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
       
   

       $('#date-countdown').countdown(fecha, function(event) {
         var $this = $(this).html(event.strftime(''
           + '<span class="countdown-block"><span class="label">%w</span> Semana </span>'
           + '<span class="countdown-block"><span class="label">%d</span> Dias </span>'
           + '<span class="countdown-block"><span class="label">%H</span> hr </span>'
           + '<span class="countdown-block"><span class="label">%M</span> min </span>'
           + '<span class="countdown-block"><span class="label">%S</span> sec</span>'));
       });
               
   };
   siteCountDown();

  }else if (Nivel==2) {

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
       
   

       $('#date-countdown').countdown(fecha, function(event) {
         var $this = $(this).html(event.strftime(''
           + '<span class="countdown-block"><span class="label">%w</span> Semana </span>'
           + '<span class="countdown-block"><span class="label">%d</span> Dias </span>'
           + '<span class="countdown-block"><span class="label">%H</span> hr </span>'
           + '<span class="countdown-block"><span class="label">%M</span> min </span>'
           + '<span class="countdown-block"><span class="label">%S</span> sec</span>'));
       });
               
   };
   siteCountDown();
    BuscarPronosticoBasico();
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
       
   

       $('#date-countdown1').countdown(fecha1, function(event) {
         var $this = $(this).html(event.strftime(''
           + '<span class="countdown-block"><span class="label">%w</span> Semana </span>'
           + '<span class="countdown-block"><span class="label">%d</span> Dias </span>'
           + '<span class="countdown-block"><span class="label">%H</span> hr </span>'
           + '<span class="countdown-block"><span class="label">%M</span> min </span>'
           + '<span class="countdown-block"><span class="label">%S</span> sec</span>'));
       });
               
   };
   siteCountDown1();
    BuscarPronosticoSuperior1();
    
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

    BuscarPronosticoSuperior2();
    
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



    BuscarPronosticoSuperior3();
  }
  
  function BuscarPronosticoBasico() {
      $.ajax({
        url: '../php/BuscarPronosticoBasico.php',
        type: 'GET',
        success: function(response) {
          console.log(response);
          const PronosticoBasico = JSON.parse(response);
          let template = '';
          PronosticoBasico.forEach(basico => {
            template += `
            <div class="container">
            
            <div class="row">
              <div class="col-12 title-section">
                <h2 class="heading">PRONOSTICO BASICO</h2>
              </div>
              <div class="col-lg-12 mb-12">
                <div class="bg-light p-4 rounded">
                  <div class="widget-body">
                      <div class="widget-vs">
                        <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                          <div class="team-1 text-center">
                            <img src="images/logo_1.png" alt="Image">
                            <h3>${basico.equipo1}</h3>
                          </div>
                          <div>
                            <span class="vs"><span>VS</span></span>
                          </div>
                          <div class="team-2 text-center">
                            <img src="images/logo_2.png" alt="Image">
                            <h3>${basico.equipo2}</h3>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="text-center widget-vs-contents mb-4">
                      <h4>${basico.Liga}</h4>
                      <p class="mb-12">
                        <span class="d-block">${basico.fechaJuego}</span>
                        <div id="itemsBasico${basico.id}"></div>
                        <strong class="text-primary">${basico.Estadio}</strong>
                      </p>

                    </div>
                  
                </div>
              </div>        
                
            </div>
          </div>
                  `
                  CargarItemsBasico(basico.id);
                  
          });
          $('#PronosticBasico').html(template);
        }
      });
}


function CargarItemsBasico(id) {
  $.ajax({
    url: '../php/CargarItemsBasico.php',
    data:{id},
    type: 'GET',
    success: function(response) {
      console.log(response);
      const ItemsPronosticoBasico = JSON.parse(response);
      let templateItemsBasico = '';
      ItemsPronosticoBasico.forEach(itembasico => {
        templateItemsBasico += `<span class="d-block">${itembasico.Descripcion}(${itembasico.Resutado})</span>` 
      });
      $("#itemsBasico"+id).html(templateItemsBasico);
    }
  });

}
  function BuscarPronosticoSuperior1() {
    $.ajax({
      url: '../php/BuscarPronosticoSuperior1.php',
      type: 'GET',
      success: function(response) {
        console.log(response);
        const PronosticoSuperior1 = JSON.parse(response);
        let template = '';
        PronosticoSuperior1.forEach(Super1 => {
          template += `
          <div class="container">
          
          <div class="row">
            <div class="col-12 title-section">
              <h2 class="heading">PRONOSTICO SUPERIOR #1</h2>
            </div>
            <div class="col-lg-12 mb-12">
              <div class="bg-light p-4 rounded">
                <div class="widget-body">
                    <div class="widget-vs">
                      <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                        <div class="team-1 text-center">
                          <img src="images/logo_1.png" alt="Image">
                          <h3>${Super1.equipo1}</h3>
                        </div>
                        <div>
                          <span class="vs"><span>VS</span></span>
                        </div>
                        <div class="team-2 text-center">
                          <img src="images/logo_2.png" alt="Image">
                          <h3>${Super1.equipo2}</h3>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="text-center widget-vs-contents mb-4">
                    <h4>${Super1.Liga}</h4>
                    <p class="mb-12">
                      <span class="d-block">${Super1.fechaJuego}</span>
                      <div id="itemsSuper1${Super1.id}"></div>
                      <strong class="text-primary">${Super1.Estadio}</strong>
                    </p>

                  </div>
                
              </div>
            </div>        
              
          </div>
        </div>
                `
                CargarItemsSuper1(Super1.id);
                
        });
        $('#PronosticSuper1').html(template);
      }
    });
  }


  function CargarItemsSuper1(id) {
    $.ajax({
    url: '../php/CargarItemsSuper1.php',
    data:{id},
    type: 'GET',
    success: function(response) {
      console.log(response);
      const ItemsPronosticoSuperior1 = JSON.parse(response);
      let templateItemsSuperior1 = '';
      ItemsPronosticoSuperior1.forEach(itemSuerior1 => {
        templateItemsSuperior1 += `<span class="d-block">${itemSuerior1.Descripcion}(${itemSuerior1.Resutado})</span>` 
      });
      $("#itemsSuper1"+id).html(templateItemsSuperior1);
    }
    });

  }

  function BuscarPronosticoSuperior2() {
    $.ajax({
      url: '../php/BuscarPronosticoSuperior2.php',
      type: 'GET',
      success: function(response) {
        console.log(response);
        const PronosticoSuperior2 = JSON.parse(response);
        let template = '';
        PronosticoSuperior2.forEach(Super2 => {
          template += `
          <div class="container">
          
          <div class="row">
            <div class="col-12 title-section">
              <h2 class="heading">PRONOSTICO SUPERIOR #2</h2>
            </div>
            <div class="col-lg-12 mb-12">
              <div class="bg-light p-4 rounded">
                <div class="widget-body">
                    <div class="widget-vs">
                      <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                        <div class="team-1 text-center">
                          <img src="images/logo_1.png" alt="Image">
                          <h3>${Super2.equipo1}</h3>
                        </div>
                        <div>
                          <span class="vs"><span>VS</span></span>
                        </div>
                        <div class="team-2 text-center">
                          <img src="images/logo_2.png" alt="Image">
                          <h3>${Super2.equipo2}</h3>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="text-center widget-vs-contents mb-4">
                    <h4>${Super2.Liga}</h4>
                    <p class="mb-12">
                      <span class="d-block">${Super2.fechaJuego}</span>
                      <div id="itemsSuper2${Super2.id}"></div>
                      <strong class="text-primary">${Super2.Estadio}</strong>
                    </p>

                  </div>
                
              </div>
            </div>        
              
          </div>
        </div>
                `
                CargarItemsSuper2(Super2.id);
                
        });
        $('#PronosticSuper2').html(template);
      }
    });
  }


  function CargarItemsSuper2(id) {
    $.ajax({
    url: '../php/CargarItemsSuper2.php',
    data:{id},
    type: 'GET',
    success: function(response) {
      console.log(response);
      const ItemsPronosticoSuperior2 = JSON.parse(response);
      let templateItemsSuperior2 = '';
      ItemsPronosticoSuperior2.forEach(itemSuerior2 => {
        templateItemsSuperior2 += `<span class="d-block">${itemSuerior2.Descripcion}(${itemSuerior2.Resutado})</span>` 
      });
      $("#itemsSuper2"+id).html(templateItemsSuperior2);
    }
    });

  }

  function BuscarPronosticoSuperior3() {
    $.ajax({
      url: '../php/BuscarPronosticoSuperior3.php',
      type: 'GET',
      success: function(response) {
        console.log(response);
        const PronosticoSuperior3 = JSON.parse(response);
        let template = '';
        PronosticoSuperior3.forEach(Super3 => {
          template += `
          <div class="container">
          
          <div class="row">
            <div class="col-12 title-section">
              <h2 class="heading">PRONOSTICO SUPERIOR #3</h2>
            </div>
            <div class="col-lg-12 mb-12">
              <div class="bg-light p-4 rounded">
                <div class="widget-body">
                    <div class="widget-vs">
                      <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                        <div class="team-1 text-center">
                          <img src="images/logo_1.png" alt="Image">
                          <h3>${Super3.equipo1}</h3>
                        </div>
                        <div>
                          <span class="vs"><span>VS</span></span>
                        </div>
                        <div class="team-2 text-center">
                          <img src="images/logo_2.png" alt="Image">
                          <h3>${Super3.equipo2}</h3>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="text-center widget-vs-contents mb-4">
                    <h4>${Super3.Liga}</h4>
                    <p class="mb-12">
                      <span class="d-block">${Super3.fechaJuego}</span>
                      <div id="itemsSuper3${Super3.id}"></div>
                      <strong class="text-primary">${Super3.Estadio}</strong>
                    </p>

                  </div>
                
              </div>
            </div>        
              
          </div>
        </div>
                `
                CargarItemsSuper3(Super3.id);
                
        });
        $('#PronosticSuper3').html(template);
      }
    });
  }


  function CargarItemsSuper3(id) {
    $.ajax({
    url: '../php/CargarItemsSuper3.php',
    data:{id},
    type: 'GET',
    success: function(response) {
      console.log(response);
      const ItemsPronosticoSuperior3 = JSON.parse(response);
      let templateItemsSuperior3 = '';
      ItemsPronosticoSuperior3.forEach(itemSuerior3 => {
        templateItemsSuperior3 += `<span class="d-block">${itemSuerior3.Descripcion}(${itemSuerior3.Resutado})</span>` 
      });
      $("#itemsSuper3"+id).html(templateItemsSuperior3);
    }
    });

  }


});