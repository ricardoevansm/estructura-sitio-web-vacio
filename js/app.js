
function login(usuario, passwd)
{
    $.post("login.php", {txtUsuario:usuario, txtPass:passwd}, function(response)
    {
       var acceso = response.data.login;
        if (acceso == true){
            var usuario = response.data.usuario;
            sessionStorage.usuario = usuario;
            console.log(usuario);
        } else if (acceso == false) {
            $('#login-form-msg').html('Usuario o Contraseña Incorrecto');
            $('#login-form-msg').removeClass('oculto');
            $('#txtPass').val('');
            console.warn('acceso incorrecto');
        } else {
            $('#login-form-msg').html('Error en la cadena de conexion');
            $('#login-form-msg').removeClass('oculto');
            console.error('error en la consulta');
        }
        
        return data;
    });
}
$(document).ready(function()
{
$('#login-button').click(function(event)
{
    event.preventDefault();
    var usuario = $('#txtUsuario').val();
    var passwd = $('#txtPass').val();
    if(usuario ==''){
        //quitar la clase oculto del div de error de txtusuario 
        $('#txtUsuario+div').removeClass('oculto');
    } else {
        $('#txtUsuario+div').addClass('oculto');
    }
    if (passwd = ''){
        //quitar la clase oculto del div de error de txtPass
        $('#txtPass+div').removeClass('oculto');
    }else {
        $('#txtPass+div').addClass('oculto');
    }
    if (usuario != '' && passwd !=''){
        login(usuario,passwd);
    }
});
});