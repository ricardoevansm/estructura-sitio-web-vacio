
function login()
{
    $.post("../login.php", {txtUsuario:usuario, txtPass:passwd}, function(data)
    {
        return data;
    });
    
}
$(document).ready(function()
{
$('#login-button').click(function(event)
{
    var usuario = $('#txtUsuario').val();
    var pass = $('#txtPass').val();
    login(usuario,passwd);
    event.preventDefault();
});
});