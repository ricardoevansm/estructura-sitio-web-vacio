
function login(usuario, passwd)
{
    $.post("login.php", {txtUsuario:usuario, txtPass:passwd}, function(data)
    {
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
    login(usuario,passwd);
});
});