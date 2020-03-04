$(document).ready(function () {


    // Variaveis Globais
    var url_pagina = $("#config_pagina").attr("data-url_get");
    var nome = $("#config_pagina").attr("data-voltar_tabela");
    var select = $("#config_pagina").attr("data-select");
    var url_com_id = window.location.search.split("=")[1]
    var EditaosCampos = $(".form-control").serializeArray();
    var id = EditaosCampos[0].name;
    var InputComID = $("#" + id).val(url_com_id);
    var editarUsuario  = $("#editar-usuario")

    // Final
   

    $.ajax({
        method: "get",
        url: select,
        dataType: "JSON",
        success: function (data) {
            for (var i in data) {
                for (var j in data[i].dados) {
                    $("select[data-tabela=" + data[i].tabela + "]").append(
                        "<option value=" + data[i].dados[j].id + ">" + data[i].dados[j].descricao + "</option>"
                    )
                }
            }
            if(url_com_id != undefined){
                ColocaDadosParaEdicao()
            }
        }
    });

    if (url_com_id != undefined) {
        var senha = $("#usu_senha");
    
        ColocaDadosParaEdicao()
        $("#btn-cadastrar").on("click", function () {
            var DadosDosCamposEdicao = $(".form-control").serializeArray();
            $.ajax({
                method: "put",
                url: url_pagina,
                data: DadosDosCamposEdicao,
                dataType: "JSON",
                success: function (data) {
                    if (data.status) {                           
                        if( senha.val() != ""){                                                     
                            iziToast.success({
                                message: "Cadastrado Com Sucesso",
                                timeout:2000,
                            onClosing: function () {
                                window.location.href = '../' + nome + '';
                                }
                            });
                        }else{
                            iziToast.info({
                            message: "Alguns Campos Não estão preechidos corretamente",
                            });
                        }   
                    }
                }
                    
            })
        });


    } else {

        $("#btn-cadastrar").on("click", function () {
            var DadosDosCampos = $(".insereInput").serializeArray();            
            
            $.ajax({
                method: "POST",
                url: url_pagina,
                data: DadosDosCampos,
                dataType: "JSON",
            }).done(function (data) {
                if (data.status) {
                    iziToast.success({
                        message: "Cadastrado Com Sucesso",
                        timeout:2000,
                    onClosing: function () {
                        window.location.href = '../' + nome + '';
                        }
                    });
                } else {
                    iziToast.error({
                        message: "Alguns Campos Não estão preechidos corretamente"
                    });
                }
            });
        })
    }

    function ColocaDadosParaEdicao() {
    
        $.ajax({
            method: "get",
            url: url_pagina,
            data: dados = { id: url_com_id },
            dataType: "JSON",
            success: function (data) {              
                var dados = data[0]
                let nome = Object.keys(dados);
                var valor = Object.values(dados)

                for(var i = 0 in nome){
                    $('#'+nome[i]).val(valor[i])
                }
                $("#usu_senha").val("")
            }
        })
    }
});

$(document).keypress(function (e) {
    if (e.which == 13) $('#btn-cadastrar').click();
});










