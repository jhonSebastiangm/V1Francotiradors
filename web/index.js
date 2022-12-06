$(document).ready(function() {

    console.log("jquery ready");
    BuscarPronosticoIndexGratuito();
    function BuscarPronosticoIndexGratuito() {
        $.ajax({
          url: 'BuscarPronosticoIndexGratuito.php',
          type: 'GET',
          success: function(response) {
            console.log(response);
            const PronosticoGratis = JSON.parse(response);
            let template = '';
            PronosticoGratis.forEach(free => {
              template += `
              <div class="container">
              
              <div class="row">
                <div class="col-12 title-section">
                  <h2 class="heading">PRONOSTICO CORTESIA</h2>
                </div>
                <div class="col-lg-12 mb-12">
                  <div class="bg-light p-4 rounded">
                    <div class="widget-body">
                        <div class="widget-vs">
                          <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                            <div class="team-1 text-center">
                              <img src="images/logo_1.png" alt="Image">
                              <h3>${free.equipo1}</h3>
                            </div>
                            <div>
                              <span class="vs"><span>VS</span></span>
                            </div>
                            <div class="team-2 text-center">
                              <img src="images/logo_2.png" alt="Image">
                              <h3>${free.equipo2}</h3>
                            </div>
                          </div>
                        </div>
                      </div>
  
                      <div class="text-center widget-vs-contents mb-4">
                        <h4>${free.Liga}</h4>
                        <p class="mb-12">
                          <span class="d-block">${free.fechaJuego}</span>
                          <div id="itemsFree${free.id}"></div>
                          <strong class="text-primary">${free.Estadio}</strong>
                        </p>
  
                      </div>
                    
                  </div>
                </div>        
                  
              </div>
            </div>
                    `
                    CargarItemsFree(free.id);
                    
            });
            $('#PronosticFree').html(template);
          }
        });
  }


  function CargarItemsFree(id) {
    $.ajax({
      url: 'CargarItemsFree.php',
      data:{id},
      type: 'GET',
      success: function(response) {
        console.log(response);
        const ItemsPronosticoGratis = JSON.parse(response);
        let templateItems = '';
        ItemsPronosticoGratis.forEach(itemfree => {
          templateItems += `<span class="d-block">${itemfree.Descripcion}(${itemfree.Resutado})</span>` 
        });
        $("#itemsFree"+id).html(templateItems);
      }
    });

  }



});
  