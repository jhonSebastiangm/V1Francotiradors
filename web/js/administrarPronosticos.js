$(document).ready(function() {
    
  
    // Testing Jquery
    console.log('jquery is working!');
    buscarPronosticosBasicos();
    $('#divItem').hide();
    $('#divResultado').hide();
    $('#ItemsResultados').hide();
    let idPronostico=0;
    $('#PronosticoBasico').submit(e => {
      e.preventDefault();
      const postDataPronosticoBasico = {
        Equipo1: $('#Equipo1').val(),
        Equipo2: $('#Equipo2').val(),
        fechaJuego: $('#fechaJuego').val(),
        Liga: $('#Liga').val(),
        Estadio: $('#Estadio').val(),
        cuota: $('#cuota').val()
      };
      const url ='../../aplicacion/php/AgregarPronosticoBasico.php';
      console.log(postDataPronosticoBasico, url);
      $.post(url, postDataPronosticoBasico, (response) => {
        console.log(response);
        $('#divPronostico').hide();
        $('#divItem').show();
      });
    });

    $('#ItemsPronosticoBasico').submit(e => {
      e.preventDefault();
      const postDataItemsPronosticoBasico = {
        Descripcion: $('#Descripcion').val(),
        Resutado: $('#Resutado').val()
      };
      const url ='../../aplicacion/php/AgregarItemsPronosticoBasico.php';
      console.log(postDataItemsPronosticoBasico, url);
      $.post(url, postDataItemsPronosticoBasico, (response) => {
        console.log(response);
        $('#divPronostico').hide();
        $('#divItem').show();
        $('#ItemsPronosticoBasico').trigger('reset');
      });
    });

    $('#PronosticoBasicoCrearResultado').submit(e => {
      e.preventDefault();
      const postData = {
        IdPronosticoResultado: $('#IdPronosticoResultado').val()
      };
      const url ='../../aplicacion/php/ModificarEstadoPronosticoBasico.php';
      console.log(postData, url);
      $.post(url, postData, (response) => {
        console.log(response);
        location.reload();
      });
    });
  
    
    function buscarPronosticosBasicos() {
      $.ajax({
        url: '../../aplicacion/php/buscarPronosticosBasicos.php',
        type: 'GET',
        success: function(response) {
          if (response=='') {
            console.log("vacio");
          }else{
            const PronosticosBasicos = JSON.parse(response);
            let template = '';
            PronosticosBasicos.forEach(Pronostico => {
              template += `
                      <tr pronosticoId="${Pronostico.id}">
                      <td>
                      <a href="#" class="task-item">
                        ${Pronostico.equipo1} 
                      </a>
                      </td>
                      <td>${Pronostico.equipo2}</td>
                      <td>${Pronostico.fechaJuego}</td>
                      <td>${Pronostico.Liga}</td>
                      <td>
                        <button class="Resultado btn btn-danger">
                         RESULTADO 
                        </button>
                      </td>
                      </tr>
                    `
            });
            $('#pronosticos').html(template);
          }

        }
      });
    }
  
    
    $(document).on('click', '.Resultado', function()  {
      let  element = $(this)[0].parentElement.parentElement;
      let id = $(element).attr('pronosticoId');
      console.log(id);
      $.post('../../aplicacion/php/ConsultarPronosticoBasicoId.php', {id}, (response) => {
        
        console.log(response);
        const pronosticos = JSON.parse(response);
        idPronostico = pronosticos.id;
        $('#descripcionResultado').val(pronosticos.equipo1+' vs '+ pronosticos.equipo2+' , Dia: '+pronosticos.fechaJuego+' , Por: '+pronosticos.Liga+' En: '+pronosticos.Estadio);
        $('#IdPronosticoResultado').val(pronosticos.id);
        $('#divPronostico').hide();
        $('#divItem').hide();
        $('#divResultado').show();
      });
      
      $.post('../../aplicacion/php/buscarItemsDePronosticosPorResultadoBasico.php', {id}, (response) => {
        console.log(response);
        const itemsPronosticosBasicos = JSON.parse(response);

        let template = '';
        let Desc = '';
        itemsPronosticosBasicos.forEach(itemsPronosticosBasico => {
          Desc = itemsPronosticosBasico.Descripcion+' '+itemsPronosticosBasico.Resutado;
          template += `
                  <tr desc="${itemsPronosticosBasico.Descripcion}" resultadoInicial="${itemsPronosticosBasico.Resutado}" idItemResultado="${itemsPronosticosBasico.id}">
                  <td>${Desc}</td>
                  <td><input type="text" id="resultadofinal${itemsPronosticosBasico.id}" style="width: 80px;"></td>
                  <td><input type="radio" id="si${itemsPronosticosBasico.id}"   value="yes">
                  <label for="yes">Yes</label>
                  <input type="radio" id="no${itemsPronosticosBasico.id}"  value="no">
                  <label for="no">No</label></td>
                  <td><input type="button" class="Guardar btn btn-danger" value="Guardar" id="guardar${itemsPronosticosBasico.id}"></td>
                  </tr>
               
                `
        });
        $('#resultadoItemsPronosticos').html(template);
        $('#divPronostico').hide();
        $('#divItem').hide();
        $('#divResultado').show();
        $('#ItemsResultados').show();
      });


    });
  
   
    $(document).on('click', '.Guardar',function() {
    console.log("entra en esta linea");
        let element = $(this)[0].parentElement.parentElement;
        let idItemResultado = $(element).attr('idItemResultado');
        console.log(idItemResultado);
        let valorFinal = $("#resultadofinal"+idItemResultado).val();
        console.log(valorFinal);
        let resultadoInicial = $(element).attr('resultadoInicial');
        console.log(resultadoInicial);
        let desc = $(element).attr('desc');
        console.log(desc);
        let cumple="";
        if ($("#si"+idItemResultado).is(':checked')) {
          cumple = 1;
        }else if ($("#no"+idItemResultado).is(':checked')) {
          cumple = 0;
        }
        console.log(cumple);
        $.post('../../aplicacion/php/GuardarItemPronosticoResultadoBasico.php', {idItemResultado,desc,resultadoInicial,cumple,valorFinal,idPronostico}, (response) => {
          alert(response);
          $("#resultadofinal"+idItemResultado).attr('disabled',true);
          $("#no"+idItemResultado).attr('disabled',true);
          $("#si"+idItemResultado).attr('disabled',true);
          $("#guardar"+idItemResultado).attr('disabled',true);
          
        });
     
    });
  });
  