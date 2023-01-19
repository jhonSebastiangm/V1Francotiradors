$(document).ready(function () {
  let Nivel = 0;
  console.log("ejecutando");

  BuscarPronostico();
  // function CargarFrancotiradores() {
  //   console.log("ejecutand");
  //   $.ajax({
  //     url: '../../php/CargarFrancotiradores.php',
  //     type: 'GET',
  //     success: function(response) {
  //       console.log(response);
  //       const ContenedorFrancotiradores = JSON.parse(response);

  //       let template = '';
  //       ContenedorFrancotiradores.forEach(franco => {
  //         template += `

  //       <div class="col-lg-4 mb-4">
  //         <div class="custom-media d-block">
  //           <div class="img mb-4">
  //             <a href="single.html"><img src="${franco.ruta}" alt="Image" class="img-fluid"></a>
  //           </div>
  //           <div class="text" francoId="${franco.id}">
  //             <!--<span class="meta">May 20, 2020</span> -->
  //             <h3 class="mb-4"><a  href="#">${franco.nombre}</a></h3>
  //             <div id="graficos">
  //             <h2>Aciertos.</h2>
  //             <figure class="horizontal">85%</figure>
  //             </div>
  //              <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
  //            <p><a href="#">Read more</a></p> -->
  //             <button id="ObtenerPronosticosDelFrancotirador" class="btn btn-primary">Ingresar</button>
  //             <!--<a href="#" class="btn btn-primary">Ingresar</a> -->
  //           </div>
  //         </div>
  //       </div>
  //               `
  //               //CargarItemsBasico(franco.id);
  //               $('#contenedorFrancotiradores').html(template);
  //       });

  //     }
  //   });
  // }


  // $(document).on('click', '.ObtenerPronosticosDelFrancotirador', (e) => {
  //   if(confirm('Esta seeguro que quiere ver los pronosticos de este francotirador')) {
  //     const element = $(this)[0].activeElement.parentElement.parentElement;
  //     const id = $(element).attr('francoId');
  //     //$.post('task-delete.php', {id}, (response) => {
  //      // fetchTasks();
  //     //});
  //     console.log("este es el id del francotirador"+id);
  //   }
  // });

  let Banco = 0;
  let apuesta1 = 0;
  let apuesta2 = 0;
  let apuesta3 = 0;
  let apuesta4 = 0;
  let apuesta5 = 0;
  let apuesta6 = 0;
  let apuesta7 = 0;
  let apuesta8 = 0;
  let apuesta9 = 0;
  let apuestaFinal = 0;


  $('#Banco').keyup(function() {

    console.log("entra");
    if ($('#Banco').val()) {
      Banco = $('#Banco').val();
      apuesta1 = Banco * 0.00396;
      apuesta2 = apuesta1 * 1.8;
      apuesta3 = apuesta2 * 1.8;
      apuesta4 = apuesta3 * 1.8;
      apuesta5 = apuesta4 * 1.8;
      apuesta6 = apuesta5 * 1.8;
      apuesta7 = apuesta6 * 1.8;
      apuesta8 = apuesta7 * 1.8;
      apuesta9 = apuesta8 * 1.8;
      $.ajax({
        url: '../../php/CargarNumeroApuesta.php',
        type: 'GET',
        success: function (response) {
          console.log(response);
          const numeroPerdidas = JSON.parse(response);
          numeroPerdidas.forEach(perdidas => {
            let numeroPerdida = perdidas.numero;
            if (numeroPerdida == 0) {
              apuestaFinal = apuesta1;
            }
            if (numeroPerdida == 1) {
              apuestaFinal = apuesta2;
            }
            if (numeroPerdida == 2) {
              apuestaFinal = apuesta3;
            }
            if (numeroPerdida == 3) {
              apuestaFinal = apuesta4;
            }
            if (numeroPerdida == 4) {
              apuestaFinal = apuesta5;
            }
            if (numeroPerdida == 5) {
              apuestaFinal = apuesta6;
            }
            if (numeroPerdida == 6) {
              apuestaFinal = apuesta7;
            }
            if (numeroPerdida == 7) {
              apuestaFinal = apuesta8;
            }
            if (numeroPerdida == 8) {
              apuestaFinal = apuesta9;
            }
          });
          console.log(apuestaFinal);
          $('#ValorApuesta').val(apuestaFinal);
        }
      });


      

    }
  });


  $('#Banco').change(function () {
    console.log("entra");
    if ($('#Banco').val()) {
      Banco = $('#Banco').val();
      apuesta1 = Banco * 0.00396;
      apuesta2 = apuesta1 * 1.8;
      apuesta3 = apuesta2 * 1.8;
      apuesta4 = apuesta3 * 1.8;
      apuesta5 = apuesta4 * 1.8;
      apuesta6 = apuesta5 * 1.8;
      apuesta7 = apuesta6 * 1.8;
      apuesta8 = apuesta7 * 1.8;
      apuesta9 = apuesta8 * 1.8;
      $.ajax({
        url: '../../php/CargarNumeroApuesta.php',
        type: 'GET',
        success: function (response) {
          console.log(response);
          const numeroPerdidas = JSON.parse(response);
          numeroPerdidas.forEach(perdidas => {
            let numeroPerdida = perdidas.numero;
            if (numeroPerdida == 0) {
              apuestaFinal = apuesta1;
            }
            if (numeroPerdida == 1) {
              apuestaFinal = apuesta2;
            }
            if (numeroPerdida == 2) {
              apuestaFinal = apuesta3;
            }
            if (numeroPerdida == 3) {
              apuestaFinal = apuesta4;
            }
            if (numeroPerdida == 4) {
              apuestaFinal = apuesta5;
            }
            if (numeroPerdida == 5) {
              apuestaFinal = apuesta6;
            }
            if (numeroPerdida == 6) {
              apuestaFinal = apuesta7;
            }
            if (numeroPerdida == 7) {
              apuestaFinal = apuesta8;
            }
            if (numeroPerdida == 8) {
              apuestaFinal = apuesta9;
            }
          });
          console.log(apuestaFinal);
          $('#ValorApuesta').val(apuestaFinal);
        }
      });


      

    }
  });




  function CargarItemsBasico(id) {
    $.ajax({
      url: '../../php/CargarItemsBasico.php',
      data: { id },
      type: 'GET',
      success: function (response) {
        console.log(response);
        const ItemsPronosticoBasico = JSON.parse(response);
        let templateItemsBasico = '';
        ItemsPronosticoBasico.forEach(itembasico => {
          templateItemsBasico += `<span class="d-block">${itembasico.Descripcion}(${itembasico.Resutado})</span>`
        });
        $("#pronosticos" + id).html(templateItemsBasico);
      }
    });
  }



  function BuscarPronostico() {
    console.log("consultando pronosticos basicos");
    $.ajax({
      url: '../../php/BuscarPronosticoBasico.php',
      type: 'GET',
      success: function (response) {
        console.log(response);
        const PronosticoBasico = JSON.parse(response);
        let template = '';
        PronosticoBasico.forEach(basico => {
          template += `
          <tr>
          <div id="itemsBasico${basico.id}"></div>
          <td data-label="Descripcion">${basico.tipoPronostico} liga: ${basico.Liga} fecha:${basico.fechaJuego} </td>
          <td data-label="Cuota" id="pronosticos${basico.id}"></td>
          <td data-label="Cuota">${basico.cuota}</td>
          <td data-label="Estado">${basico.Estado}</td>
          <td data-label="ejemplo"><iframe width="270" height="150" src="${basico.url}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" X-Frame-Options:SAMEORIGIN allowfullscreen></iframe></td>
        </tr>
        `
          CargarItemsBasico(basico.id);

        });
        $('#pronosticos').html(template);
      }
    });
  }


});