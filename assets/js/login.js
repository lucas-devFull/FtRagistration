$(document).ready(function () {
    $("#btn-login").on("click",function() { 
        
        var email = $("#email").val()
        var senha =  $("#senha").val()

        var enviarDados = {
            email: email,
            senha: senha
        }

        $.ajax({
            type: "POST",
            url: "Login/autenticar",
            data: enviarDados,
            dataType: "JSON",
            success: function (data) {
                if (data.status) {
                    window.location.href = "Dashboard";
                }else{
                    $("#senha").val("");        
                    iziToast.error({
                        title: 'ATENÇÃO!!',
                        message: 'Usuario ou senha inválidos',
                    });
                }
            }
        });
     })    
});


$(document).keypress(function(e) {
    if(e.which == 13) $('#btn-login').click();
});