var $table = $("#tabelagrid")
var deleta = $("#btn-deletar")
var editar  = $("#btn-editar")
var editarUsuario  = $("#uusuario")
var IrParaConfigUsuario = $("#config_pagina").attr("data-url_usuario")
var IrParaEditar = $("#config_pagina").attr("data-edita_url")    
var id = $("#config_pagina").attr("data-url_id")

$(document).ready(function () {   

    editarUsuario.click(function(){
        AlterarUsuario()
    })

    deleta.click(function () { 
            deletar();
    });

    editar.click(function(){
            Alterar();    
    })

    inserirnaTabela();
    acoesTabela()
})

function inserirnaTabela(){
    var url_get = $('#config_pagina').attr("data-url_get");
    $.ajax({
        method: "GET",
        url: url_get,
        dataType: "JSON",
        success: function (dados) {

        var colunas = [{
        field:"status",
        title:"status",
        checkbox:true,
        }];

        for(var i  in dados[0]){
        colunas.push({
            field:i,
            title:i.substring(4),
            sortable:true,
        })
        }
        
        
        $("#tabelagrid").bootstrapTable({
        data:dados,
        columns: colunas
            });
        }
    })
}


function acoesTabela(){
   
    $table.on('check.bs.table uncheck.bs.table check-all.bs.table uncheck-all.bs.table',function(){
        var rows = $table.bootstrapTable('getSelections');     

        if(rows.length >= 1){
            deleta.removeAttr("disabled")
            editar.removeAttr("disabled")
        }
        if(rows.length >= 2){
            editar.attr("disabled",'disabled')    
            editar.off();                   
        }
        if(rows.length == 0){
            editar.attr("disabled",'disabled') 
            deleta.attr("disabled",'disabled') 

        }
        
    })
}


function deletar(){

    var IrParaRemover = $("#config_pagina").attr("data-url_get")    

    var rows = $table.bootstrapTable('getSelections');
    if(rows.length>0){
      iziToast.question({
        timeout: 20000,
        close: false,
        overlay: true,
        displayMode: 'once',
        id: 'question',
        zindex: 999,
        theme:'black',
        color:'white',
        title: 'Atenção!',
        message: 'Os itens selecionados serão apagados, Deseja Continuar?',
        position: 'center',
        buttons: [
            ['<button><b>SIM</b></button>', function (instance, toast) {
     
                instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
    
                var nome = $("#config_pagina").attr("data-voltar_tabela");

                $.ajax({
                  method: "DELETE",
                  data:data = {rows},
                  url: IrParaRemover,
                  dataType: "JSON"
                }).done(function(data){
                  if(data.status){
                    window.location.href = ''+nome+'';
                  }
                  
                })
                

            }, true],
            ['<button>NÃO</button>', function (instance, toast) {
     
                instance.hide({ transitionOut: 'fadeOut' }, toast, 'button');
     
            }],
        ],
      }); 
    }
}

    function Alterar(){
        var rows = $table.bootstrapTable('getSelections'); 
        var objeto = Object.getOwnPropertyNames(rows[0])
        var linha = rows[0]
        var ParteNome = objeto[0];
        var ParteID =  linha[ParteNome]       
        
        window.location.href = IrParaEditar+"?id="+ParteID;             
    }

    function AlterarUsuario(){
         
        window.location.href = IrParaConfigUsuario+"?id="+id;
        
        
    }