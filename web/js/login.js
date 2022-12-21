$(document).ready(function() {
    console.log("jquery is ready");
      $('#Login').submit(e => {
          e.preventDefault();
          const postData = {
            usuario: $('#usuario').val(),
            contra: $('#contrasena').val()
          };
          const url = '../../aplicacion/controladores/login/loginController.php';
          console.log(postData, url);
          $.post(url, postData, (response) => {
            console.log(response);
            if(response== 'null'){
              alertify.alert('Inicio Denegado', response+'Usuario Null O Incorrecto', function(){ alertify.error('No Conectado'); }); 
            }else{
              //alertify.alert('Inicio Exitoso', response+'Se Encuentra Logueado', function(){ alertify.success('Conectado'); });    
              let usuarios = JSON.parse(response);
              if(usuarios.url=='sesion.php'){
                window.location.href = "../sesion/sesion.php";
              }
              if(usuarios.url=='seguridad.php'){
                window.location.href = "../../../web/seguridad.php";
              } 
            }
            
          });
        });
  });