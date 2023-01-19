$(document).ready(function() {

    //let edit = false;
    console.log('jQuery is Working');
    //$('#task-result').hide();
    buscarUsuarios();


    
    $('#search').keyup(function(e) {
        if($('#search').val()) {
            let search = $('#search').val();       
            $.ajax({
                url: 'task-search.php',
                type: 'POST',
                data: { search: search },
                success: function(response) {
                    console.log(response);
                    let tasks = JSON.parse(response);
                    let template = '';
                    console.log(tasks);
                    tasks.forEach(tasks => {
                        template += `<li>
                        ${tasks.name}
                        </li>`
                    });

                    $('#container').html(template);
                    $('#task-result').show();
                }
            });
        }
    });
    
    // $('#task-form').submit(function(e) {
    //     //console.log('Submiting...');
    //     const posData = {
    //         name: $('#name').val(),
    //         description: $('#description').val(),
    //         id: $('#taskId').val()
    //     };  

    //     let url = edit === false ? 'task-add.php' : 'task-edit.php';
    //     //console.log(url);
    //     $.post(url, posData, function (response) {
    //         console.log(response);
    //         fetchTasks();
    //         $('#task-form').trigger('reset');
    //     });
    //     e.preventDefault();
    // });

    function buscarUsuarios(){
        console.log('estoy aqui');
        $.ajax({
            url: '../../aplicacion/php/buscarUsuarios.php',
            type: 'GET',
            success: function (response) {
                console.log(response);
                console.log('estoy aqui');
                let tasks = JSON.parse(response);
                let template = '';
                //console.log(tasks);
                tasks.forEach(task => {
                    template += `
                    <tr taskId="${task.id}">
                        <td>${task.id}</td>
                        <td>
                            <a href="#" class="editar">${task.Nombreusuario}</a>
                        </td>
                        <td>
                            <a>${task.correo}</a>
                        </td>
                        <td>
                            <button class="activar btn btn-success">
                                Activar
                            </button>
                        </td>                        
                    </tr>`                        
                });
                $('#usuarios').html(template);
            }
        })
    }

    $(document).on('click', '.activar', function(){
        if(confirm('Esta seguro que desea activar este usuario?')){
            let element = $(this)[0].parentElement.parentElement;
            console.log(element);
            let Id = $(element).attr('taskId');
            console.log(Id);
            $.post('../../aplicacion/php/activar.php', {Id}, function (response) {
                console.log(response);
                buscarUsuarios();
            })
        }
    })

//     $(document).on('click','.editar', function(){
//         let element = $(this)[0].parentElement.parentElement;
//         let Id = $(element).attr('taskId');s
//         console.log(Id);
//         $.post('task-single.php', {Id}, function (response) {
//             console.log(response);
//             const task = JSON.parse(response);
//             //console.log(task);
//             $('#name').val(task.name);
//             $('#description').val(task.description);
//             $('#taskId').val(task.id);
//             edit = true;
// //            fetchTasks();
//         })
//     });
});