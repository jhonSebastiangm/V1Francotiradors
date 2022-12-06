$(document).ready(function() {
    
  
    // Testing Jquery
    console.log('jquery is working!');
    buscarPronosticosGratuitos();
    $('#divItem').hide();
    $('#divResultado').hide();
    $('#ItemsResultados').hide();
    let idPronostico=0;
    $('#PronosticoGratuito').submit(e => {
      e.preventDefault();
      const postDataPronosticoGratuito = {
        Equipo1: $('#Equipo1').val(),
        Equipo2: $('#Equipo2').val(),
        fechaJuego: $('#fechaJuego').val(),
        Liga: $('#Liga').val(),
        Estadio: $('#Estadio').val()
      };
      const url ='../php/AgregarPronosticoGratuito.php';
      console.log(postDataPronosticoGratuito, url);
      $.post(url, postDataPronosticoGratuito, (response) => {
        console.log(response);
        $('#divPronostico').hide();
        $('#divItem').show();
      });
    });

    $('#ItemsPronosticoGratuito').submit(e => {
      e.preventDefault();
      const postDataItemsPronosticoGratuito = {
        Descripcion: $('#Descripcion').val(),
        Resutado: $('#Resutado').val()
      };
      const url ='../php/AgregarItemsPronosticoGratuito.php';
      console.log(postDataItemsPronosticoGratuito, url);
      $.post(url, postDataItemsPronosticoGratuito, (response) => {
        console.log(response);
        $('#divPronostico').hide();
        $('#divItem').show();
        $('#ItemsPronosticoGratuito').trigger('reset');
      });
    });

    $('#PronosticoGratuitoCrearResultado').submit(e => {
      e.preventDefault();
      const postData = {
        IdPronosticoResultado: $('#IdPronosticoResultado').val()
      };
      const url ='../php/ModificarEstadoPronosticoGratuito.php';
      console.log(postData, url);
      $.post(url, postData, (response) => {
        console.log(response);
        location.reload();
      });
    });
  
    
    function buscarPronosticosGratuitos() {
      $.ajax({
        url: '../php/buscarPronosticosGratuitos.php',
        type: 'GET',
        success: function(response) {
          console.log(response);
          const PronosticosGratuitos = JSON.parse(response);
          let template = '';
          PronosticosGratuitos.forEach(Pronostico => {
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
      });
    }
  
    
    $(document).on('click', '.Resultado', function()  {
      let  element = $(this)[0].parentElement.parentElement;
      let id = $(element).attr('pronosticoId');
      console.log(id);
      $.post('ConsultarPronosticoGratuitoId.php', {id}, (response) => {
        
        console.log(response);
        const pronosticos = JSON.parse(response);
        idPronostico = pronosticos.id;
        $('#descripcionResultado').val(pronosticos.equipo1+' vs '+ pronosticos.equipo2+' , Dia: '+pronosticos.fechaJuego+' , Por: '+pronosticos.Liga+' En: '+pronosticos.Estadio);
        $('#IdPronosticoResultado').val(pronosticos.id);
        $('#divPronostico').hide();
        $('#divItem').hide();
        $('#divResultado').show();
      });
      
      $.post('buscarItemsDePronosticosPorResultado.php', {id}, (response) => {
        console.log(response);
        const itemsPronosticosGratuitos = JSON.parse(response);

        let template = '';
        let Desc = '';
        itemsPronosticosGratuitos.forEach(itemsPronosticosGratuito => {
          Desc = itemsPronosticosGratuito.Descripcion+' '+itemsPronosticosGratuito.Resutado;
          template += `
                  <tr id="identificador${itemsPronosticosGratuito.id}" desc="${itemsPronosticosGratuito.Descripcion}" resultadoInicial="${itemsPronosticosGratuito.Resutado}" idItemResultado="${itemsPronosticosGratuito.id}">
                  <td>${Desc}</td>
                  <td><input type="text" id="resultadofinal${itemsPronosticosGratuito.id}" style="width: 80px;"></td>
                  <td><input type="radio" id="si${itemsPronosticosGratuito.id}"   value="yes">
                  <label for="yes">Yes</label>
                  <input type="radio" id="no${itemsPronosticosGratuito.id}"  value="no">
                  <label for="no">No</label></td>
                  <td><input type="button" class="Guardar btn btn-danger" value="Guardar" id="guardar${itemsPronosticosGratuito.id}"></td>
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
        $.post('GuardarItemPronosticoResultado.php', {idItemResultado,desc,resultadoInicial,cumple,valorFinal,idPronostico}, (response) => {
          
          alert(response);
          $("#resultadofinal"+idItemResultado).attr('disabled',true);
          $("#no"+idItemResultado).attr('disabled',true);
          $("#si"+idItemResultado).attr('disabled',true);
          $("#guardar"+idItemResultado).attr('disabled',true);
          
         
        });
     
    });








  });
  