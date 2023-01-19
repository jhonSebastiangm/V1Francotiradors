$(document).ready(function () {
  console.log("jquery  listo");


  $('#login').submit(function (e) {
    //console.log('Submiting...');
    console.log("entra");
    e.preventDefault();
    const postData = {
      usuario: $('#usuario').val(),
      contra: $('#contrasena').val()
    };
    
    const url = '../../controladores/login/loginController.php';
    console.log(postData, url);
    $.post(url, postData, (response) => {
      console.log(response);
      let usuarios = JSON.parse(response);
      console.log(usuarios);
      console.log("esta es la respuesta"+" "+usuarios);
      if(usuarios== 'null' || usuarios=='' || usuarios.activo== 0 || usuarios.contrasena=='no'){
       alertify.alert('Inicio Denegado', usuarios.Nombreusuario+' Usuario Null O Incorrecto', function(){ alertify.error('No Conectado'); }); 
      }else{
      //alertify.alert('Inicio Exitoso', response+'Se Encuentra Logueado', function(){ alertify.success('Conectado'); });    
       
      if(usuarios.url=='sesion.php'){
       window.location.href = "../../../aplicacion/vistas/sesion/sesion.php";
       }
      if(usuarios.url=='seguridad.php'){
       window.location.href = "../../../web/seguridad.php";
      } 
      }

    });


    
  });

});