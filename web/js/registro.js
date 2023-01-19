$(document).ready(function () {
    console.log("jquery  listo");
    $('#registro').submit(function (e) {
        console.log("entra");
        e.preventDefault();
        const postData = {
            NombreUsuario: $('#NombreUsuario').val(),
            EMAIL: $('#EMAIL').val(),
            pass: $('#pass').val()
        };
        const url = '../../controladores/login/registroController.php';
        console.log(postData, url);
        $.post(url, postData, (response) => {
            console.log(response);
            window.location.href = "seguridad.php";
        });
    });
});