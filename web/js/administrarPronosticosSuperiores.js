$(document).ready(function() {
    
  
    // Testing Jquery
    console.log('jquery is working!');
    buscarPronosticosSuperiores1();
    buscarPronosticosSuperiores2();
    buscarPronosticosSuperiores3();
    $('#divItem1').hide();
    $('#divResultado1').hide();
    $('#ItemsResultados1').hide();
    $('#divItem2').hide();
    $('#divResultado2').hide();
    $('#ItemsResultados2').hide();
    $('#divItem3').hide();
    $('#divResultado3').hide();
    $('#ItemsResultados3').hide();
    
    let idPronostico1=0;
    let idPronostico2=0;
    let idPronostico3=0;
    $('#PronosticoSuperior1').submit(e => {
      e.preventDefault();
      const postDataPronosticoSuperior1 = {
        Equipo1Superior1: $('#Equipo1Superior1').val(),
        Equipo2Superior1: $('#Equipo2Superior1').val(),
        fechaJuegoSuperior1: $('#fechaJuegoSuperior1').val(),
        LigaSuperior1: $('#LigaSuperior1').val(),
        EstadioSuperior1: $('#EstadioSuperior1').val()
      };
      const url ='../php/AgregarPronosticoSuperior1.php';
      console.log(postDataPronosticoSuperior1, url);
      $.post(url, postDataPronosticoSuperior1, (response) => {
        console.log(response);
        $('#divPronostico1').hide();
        $('#divItem1').show();
      });
    });

    $('#ItemsPronosticoSuperior1').submit(e => {
      e.preventDefault();
      const postDataItemsPronosticoSuperior1 = {
        DescripcionSuperior1: $('#DescripcionSuperior1').val(),
        ResutadoSuperior1: $('#ResutadoSuperior1').val()
      };
      const url ='../php/AgregarItemsPronosticoSuperior1.php';
      console.log(postDataItemsPronosticoSuperior1, url);
      $.post(url, postDataItemsPronosticoSuperior1, (response) => {
        console.log(response);
        $('#divPronostico1').hide();
        $('#divItem1').show();
        $('#ItemsPronosticoSuperior1').trigger('reset');
      });
    });

    $('#PronosticoSuperiorCrearResultado1').submit(e => {
      e.preventDefault();
      const postData = {
        IdPronosticoResultado1: $('#IdPronosticoResultado1').val()
      };
      const url ='../php/ModificarEstadoPronosticoSuperior1.php';
      console.log(postData, url);
      $.post(url, postData, (response) => {
        console.log(response);
        location.reload();
      });
    });


    $('#PronosticoSuperior2').submit(e => {
      e.preventDefault();
      const postDataPronosticoSuperior2 = {
        Equipo1Superior2: $('#Equipo1Superior2').val(),
        Equipo2Superior2: $('#Equipo2Superior2').val(),
        fechaJuegoSuperior2: $('#fechaJuegoSuperior2').val(),
        LigaSuperior2: $('#LigaSuperior2').val(),
        EstadioSuperior2: $('#EstadioSuperior2').val()
      };
      const url ='../php/AgregarPronosticoSuperior2.php';
      console.log(postDataPronosticoSuperior2, url);
      $.post(url, postDataPronosticoSuperior2, (response) => {
        console.log(response);
        $('#divPronostico2').hide();
        $('#divItem2').show();
      });
    });

    $('#ItemsPronosticoSuperior2').submit(e => {
      e.preventDefault();
      const postDataItemsPronosticoSuperior2 = {
        DescripcionSuperior2: $('#DescripcionSuperior2').val(),
        ResutadoSuperior2: $('#ResutadoSuperior2').val()
      };
      const url ='../php/AgregarItemsPronosticoSuperior2.php';
      console.log(postDataItemsPronosticoSuperior2, url);
      $.post(url, postDataItemsPronosticoSuperior2, (response) => {
        console.log(response);
        $('#divPronostico2').hide();
        $('#divItem2').show();
        $('#ItemsPronosticoSuperior2').trigger('reset');
      });
    });

    $('#PronosticoSuperiorCrearResultado2').submit(e => {
      e.preventDefault();
      const postData = {
        IdPronosticoResultado2: $('#IdPronosticoResultado2').val()
      };
      const url ='../php/ModificarEstadoPronosticoSuperior2.php';
      console.log(postData, url);
      $.post(url, postData, (response) => {
        console.log(response);
        location.reload();
      });
    });


    $('#PronosticoSuperior3').submit(e => {
      e.preventDefault();
      const postDataPronosticoSuperior3 = {
        Equipo1Superior3: $('#Equipo1Superior3').val(),
        Equipo2Superior3: $('#Equipo2Superior3').val(),
        fechaJuegoSuperior3: $('#fechaJuegoSuperior3').val(),
        LigaSuperior3: $('#LigaSuperior3').val(),
        EstadioSuperior3: $('#EstadioSuperior3').val()
      };
      const url ='../php/AgregarPronosticoSuperior3.php';
      console.log(postDataPronosticoSuperior3, url);
      $.post(url, postDataPronosticoSuperior3, (response) => {
        console.log(response);
        $('#divPronostico3').hide();
        $('#divItem3').show();
      });
    });

    $('#ItemsPronosticoSuperior3').submit(e => {
      e.preventDefault();
      const postDataItemsPronosticoSuperior3 = {
        DescripcionSuperior3: $('#DescripcionSuperior3').val(),
        ResutadoSuperior3: $('#ResutadoSuperior3').val()
      };
      const url ='../php/AgregarItemsPronosticoSuperior3.php';
      console.log(postDataItemsPronosticoSuperior3, url);
      $.post(url, postDataItemsPronosticoSuperior3, (response) => {
        console.log(response);
        $('#divPronostico3').hide();
        $('#divItem3').show();
        $('#ItemsPronosticoSuperior3').trigger('reset');
      });
    });

    $('#PronosticoSuperiorCrearResultado3').submit(e => {
      e.preventDefault();
      const postData = {
        IdPronosticoResultado3: $('#IdPronosticoResultado3').val()
      };
      const url ='../php/ModificarEstadoPronosticoSuperior3.php';
      console.log(postData, url);
      $.post(url, postData, (response) => {
        console.log(response);
        location.reload();
      });
    });

    function buscarPronosticosSuperiores3() {
      $.ajax({
        url: '../php/buscarPronosticosSuperiores3.php',
        type: 'GET',
        success: function(response) {
          if (response=='') {
            console.log("vacio");
          }else{
            const PronosticosSuperiores3 = JSON.parse(response);
            let template = '';
            PronosticosSuperiores3.forEach(PronosticoSuperior3 => {
              template += `
                      <tr pronosticoId3="${PronosticoSuperior3.id}">
                      <td>
                      <a href="#" class="task-item">
                        ${PronosticoSuperior3.equipo1} 
                      </a>
                      </td>
                      <td>${PronosticoSuperior3.equipo2}</td>
                      <td>${PronosticoSuperior3.fechaJuego}</td>
                      <td>${PronosticoSuperior3.Liga}</td>
                      <td>
                        <button class="ResultadoPronosticoSuperior3 btn btn-danger">
                         RESULTADO 
                        </button>
                      </td>
                      </tr>
                    `
            });
            $('#pronosticos3').html(template);
          }

        }
      });
    }

    $(document).on('click', '.ResultadoPronosticoSuperior3', function()  {
      let  element = $(this)[0].parentElement.parentElement;
      let id = $(element).attr('pronosticoId3');
      console.log(id);
      $.post('ConsultarPronosticoSuperior3Id.php', {id}, (response) => {
        
        console.log(response);
        const pronosticos3 = JSON.parse(response);
        idPronostico3 = pronosticos3.id;
        $('#descripcionResultado3').val(pronosticos3.equipo1+' vs '+ pronosticos3.equipo2+' , Dia: '+pronosticos3.fechaJuego+' , Por: '+pronosticos3.Liga+' En: '+pronosticos3.Estadio);
        $('#IdPronosticoResultado3').val(pronosticos3.id);
        $('#divPronostico3').hide();
        $('#divItem3').hide();
        $('#divResultado3').show();
      });
      
      $.post('buscarItemsDePronosticosPorResultadoSuperior3.php', {id}, (response) => {
        console.log(response);
        const itemsPronosticosSuperior3 = JSON.parse(response);

        let template = '';
        let Desc = '';
        itemsPronosticosSuperior3.forEach(itemPronosticosSuperior3 => {
          Desc = itemPronosticosSuperior3.Descripcion+' '+itemPronosticosSuperior3.Resutado;
          template += `
                  <tr desc3="${itemPronosticosSuperior3.Descripcion}" resultadoInicial2="${itemPronosticosSuperior3.Resutado}" idItemResultado2="${itemPronosticosSuperior3.id}">
                  <td>${Desc}</td>
                  <td><input type="text" id="resultadofinal2${itemPronosticosSuperior3.id}" style="width: 80px;"></td>
                  <td><input type="radio" id="si2${itemPronosticosSuperior3.id}"   value="yes">
                  <label for="yes">Yes</label>
                  <input type="radio" id="no2${itemPronosticosSuperior3.id}"  value="no">
                  <label for="no">No</label></td>
                  <td><input type="button" class="GuardarSuperiores3 btn btn-danger" value="Guardar" id="guardar${itemsPronosticosSuperior3.id}"></td>
                  </tr>
               
                `
        });
        $('#resultadoItemsPronosticos3').html(template);
        $('#divPronostico3').hide();
        $('#divItem3').hide();
        $('#divResultado3').show();
        $('#ItemsResultados3').show();
      });


    });
  
    
    function buscarPronosticosSuperiores2() {
      $.ajax({
        url: '../php/buscarPronosticosSuperiores2.php',
        type: 'GET',
        success: function(response) {
          if (response=='') {
            console.log("vacio");
          }else{
            const PronosticosSuperiores2 = JSON.parse(response);
            let template = '';
            PronosticosSuperiores2.forEach(PronosticoSuperior2 => {
              template += `
                      <tr pronosticoId2="${PronosticoSuperior2.id}">
                      <td>
                      <a href="#" class="task-item">
                        ${PronosticoSuperior2.equipo1} 
                      </a>
                      </td>
                      <td>${PronosticoSuperior2.equipo2}</td>
                      <td>${PronosticoSuperior2.fechaJuego}</td>
                      <td>${PronosticoSuperior2.Liga}</td>
                      <td>
                        <button class="ResultadoPronosticoSuperior2 btn btn-danger">
                         RESULTADO 
                        </button>
                      </td>
                      </tr>
                    `
            });
            $('#pronosticos2').html(template);
          }

        }
      });
    }

    $(document).on('click', '.ResultadoPronosticoSuperior2', function()  {
      let  element = $(this)[0].parentElement.parentElement;
      let id = $(element).attr('pronosticoId2');
      console.log(id);
      $.post('ConsultarPronosticoSuperior2Id.php', {id}, (response) => {
        
        console.log(response);
        const pronosticos2 = JSON.parse(response);
        idPronostico2 = pronosticos2.id;
        $('#descripcionResultado2').val(pronosticos2.equipo1+' vs '+ pronosticos2.equipo2+' , Dia: '+pronosticos2.fechaJuego+' , Por: '+pronosticos2.Liga+' En: '+pronosticos2.Estadio);
        $('#IdPronosticoResultado2').val(pronosticos2.id);
        $('#divPronostico2').hide();
        $('#divItem2').hide();
        $('#divResultado2').show();
      });
      
      $.post('buscarItemsDePronosticosPorResultadoSuperior2.php', {id}, (response) => {
        console.log(response);
        const itemsPronosticosSuperior2 = JSON.parse(response);

        let template = '';
        let Desc = '';
        itemsPronosticosSuperior2.forEach(itemPronosticosSuperior2 => {
          Desc = itemPronosticosSuperior2.Descripcion+' '+itemPronosticosSuperior2.Resutado;
          template += `
                  <tr desc2="${itemPronosticosSuperior2.Descripcion}" resultadoInicial2="${itemPronosticosSuperior2.Resutado}" idItemResultado2="${itemPronosticosSuperior2.id}">
                  <td>${Desc}</td>
                  <td><input type="text" id="resultadofinal2${itemPronosticosSuperior2.id}" style="width: 80px;"></td>
                  <td><input type="radio" id="si2${itemPronosticosSuperior2.id}"   value="yes">
                  <label for="yes">Yes</label>
                  <input type="radio" id="no2${itemPronosticosSuperior2.id}"  value="no">
                  <label for="no">No</label></td>
                  <td><input type="button" class="GuardarSuperiores2 btn btn-danger" value="Guardar" id="guardar${itemsPronosticosSuperior2.id}"></td>
                  </tr>
               
                `
        });
        $('#resultadoItemsPronosticos2').html(template);
        $('#divPronostico2').hide();
        $('#divItem2').hide();
        $('#divResultado2').show();
        $('#ItemsResultados2').show();
      });


    });
    
    function buscarPronosticosSuperiores1() {
      $.ajax({
        url: '../php/buscarPronosticosSuperiores1.php',
        type: 'GET',
        success: function(response) {
          if (response=='') {
            console.log("vacio");
          }else{
            const PronosticosSuperiores = JSON.parse(response);
            let template = '';
            PronosticosSuperiores.forEach(PronosticoSuperior1 => {
              template += `
                      <tr pronosticoId="${PronosticoSuperior1.id}">
                      <td>
                      <a href="#" class="task-item">
                        ${PronosticoSuperior1.equipo1} 
                      </a>
                      </td>
                      <td>${PronosticoSuperior1.equipo2}</td>
                      <td>${PronosticoSuperior1.fechaJuego}</td>
                      <td>${PronosticoSuperior1.Liga}</td>
                      <td>
                        <button class="ResultadoPronosticoSuperior1 btn btn-danger">
                         RESULTADO 
                        </button>
                      </td>
                      </tr>
                    `
            });
            $('#pronosticos1').html(template);
          }

        }
      });
    }
  
    
    $(document).on('click', '.ResultadoPronosticoSuperior1', function()  {
      let  element = $(this)[0].parentElement.parentElement;
      let id = $(element).attr('pronosticoId');
      console.log(id);
      $.post('ConsultarPronosticoSuperior1Id.php', {id}, (response) => {
        
        console.log(response);
        const pronosticos = JSON.parse(response);
        idPronostico1 = pronosticos.id;
        $('#descripcionResultado1').val(pronosticos.equipo1+' vs '+ pronosticos.equipo2+' , Dia: '+pronosticos.fechaJuego+' , Por: '+pronosticos.Liga+' En: '+pronosticos.Estadio);
        $('#IdPronosticoResultado1').val(pronosticos.id);
        $('#divPronostico1').hide();
        $('#divItem1').hide();
        $('#divResultado1').show();
      });
      
      $.post('buscarItemsDePronosticosPorResultadoSuperior1.php', {id}, (response) => {
        console.log(response);
        const itemsPronosticosSuperior1 = JSON.parse(response);

        let template = '';
        let Desc = '';
        itemsPronosticosSuperior1.forEach(itemPronosticosSuperior1 => {
          Desc = itemPronosticosSuperior1.Descripcion+' '+itemPronosticosSuperior1.Resutado;
          template += `
                  <tr desc1="${itemPronosticosSuperior1.Descripcion}" resultadoInicial1="${itemPronosticosSuperior1.Resutado}" idItemResultado1="${itemPronosticosSuperior1.id}">
                  <td>${Desc}</td>
                  <td><input type="text" id="resultadofinal1${itemPronosticosSuperior1.id}" style="width: 80px;"></td>
                  <td><input type="radio" id="si1${itemPronosticosSuperior1.id}"   value="yes">
                  <label for="yes">Yes</label>
                  <input type="radio" id="no1${itemPronosticosSuperior1.id}"  value="no">
                  <label for="no">No</label></td>
                  <td><input type="button" class="GuardarSuperiores1 btn btn-danger" value="Guardar" id="guardar1${itemPronosticosSuperior1.id}"></td>
                  </tr>
               
                `
        });
        $('#resultadoItemsPronosticos1').html(template);
        $('#divPronostico1').hide();
        $('#divItem1').hide();
        $('#divResultado1').show();
        $('#ItemsResultados1').show();
      });


    });
  
   
    $(document).on('click', '.GuardarSuperiores3',function() {
    
        let element = $(this)[0].parentElement.parentElement;
        let idItemResultado3 = $(element).attr('idItemResultado3');
        console.log(idItemResultado3);
        let valorFinal = $("#resultadofinal3"+idItemResultado3).val();
        console.log(valorFinal);
        let resultadoInicial = $(element).attr('resultadoInicial3');
        console.log(resultadoInicial);
        let desc = $(element).attr('desc3');
        console.log(desc);
        let cumple="";
        if ($("#si3"+idItemResultado3).is(':checked')) {
          cumple = 1;
        }else if ($("#no3"+idItemResultado3).is(':checked')) {
          cumple = 0;
        }
        console.log(cumple);
        $.post('GuardarItemPronosticoResultadoSuperior3.php', {idItemResultado3,desc,resultadoInicial,cumple,valorFinal,idPronostico3}, (response) => {
          alert(response);
          $("#resultadofinal3"+idItemResultado3).attr('disabled',true);
          $("#no3"+idItemResultado3).attr('disabled',true);
          $("#si3"+idItemResultado3).attr('disabled',true);
          $("#guardar3"+idItemResultado3).attr('disabled',true);
          
        });
     
    });

    $(document).on('click', '.GuardarSuperiores2',function() {
    
      let element = $(this)[0].parentElement.parentElement;
      let idItemResultado2 = $(element).attr('idItemResultado2');
      console.log(idItemResultado2);
      let valorFinal = $("#resultadofinal2"+idItemResultado2).val();
      console.log(valorFinal);
      let resultadoInicial = $(element).attr('resultadoInicial2');
      console.log(resultadoInicial);
      let desc = $(element).attr('desc2');
      console.log(desc);
      let cumple="";
      if ($("#si2"+idItemResultado2).is(':checked')) {
        cumple = 1;
      }else if ($("#no2"+idItemResultado2).is(':checked')) {
        cumple = 0;
      }
      console.log(cumple);
      $.post('GuardarItemPronosticoResultadoSuperior2.php', {idItemResultado2,desc,resultadoInicial,cumple,valorFinal,idPronostico2}, (response) => {
        alert(response);
        $("#resultadofinal2"+idItemResultado2).attr('disabled',true);
        $("#no2"+idItemResultado2).attr('disabled',true);
        $("#si2"+idItemResultado2).attr('disabled',true);
        $("#guardar2"+idItemResultado2).attr('disabled',true);
        
      });
   
  });

  $(document).on('click', '.GuardarSuperiores1',function() {
    
    let element = $(this)[0].parentElement.parentElement;
    let idItemResultado1 = $(element).attr('idItemResultado1');
    console.log(idItemResultado1);
    let valorFinal = $("#resultadofinal1"+idItemResultado1).val();
    console.log(valorFinal);
    let resultadoInicial = $(element).attr('resultadoInicial1');
    console.log(resultadoInicial);
    let desc = $(element).attr('desc1');
    console.log(desc);
    let cumple="";
    if ($("#si1"+idItemResultado1).is(':checked')) {
      cumple = 1;
    }else if ($("#no1"+idItemResultado1).is(':checked')) {
      cumple = 0;
    }
    console.log(cumple);
    $.post('GuardarItemPronosticoResultadoSuperior1.php', {idItemResultado1,desc,resultadoInicial,cumple,valorFinal,idPronostico1}, (response) => {
      alert(response);
      $("#resultadofinal1"+idItemResultado1).attr('disabled',true);
      $("#no1"+idItemResultado1).attr('disabled',true);
      $("#si1"+idItemResultado1).attr('disabled',true);
      $("#guardar1"+idItemResultado1).attr('disabled',true);
    });
 
  });
  });
  