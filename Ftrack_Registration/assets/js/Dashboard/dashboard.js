

    
    $(document).ready(function () {
        
Mapa()
        TabelaDash();
        Informações();
    });

    function TabelaDash(){
        var url_get = $('#config_pagina').attr("data-url_get");     
           
        $.ajax({
            method: "GET",
            url: url_get,
            dataType: "JSON",
            success: function (dados) {
                var colunas = [];

                for(var i  in dados[0]){
                    colunas.push({
                        field:i,
                        title:i.substring(4),
                        sortable:true,
                    })
                }
                
                $("#tabela").bootstrapTable({
                    data:dados,
                    columns: colunas
                });
            }
        })
    }

    function Mapa(){

        var element = document.getElementById('osm-map');
        element.style = 'height:530px;';
        var map = L.map(element)

        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        var target = L.latLng(-22.217478,-49.657750);
        map.setView(target, 14);

        $.ajax({
            method: "get",
            url: "Dashboard/localizacao",
            dataType: "JSON",
            success: function (data) {        

                var myIcon  = L.icon({
                    iconUrl: "images/car.png",
                    iconSize: [40,40],
                    iconAnchor: [0, 5],
                    popupAnchor: [22, 0],
                })
                    let data_d = data[0].ult_eve_data_gps;
                    let data_dividida = data_d.split("-");
                    let hora_dividida = data_dividida[2].split(" ");
                    let data_corrigida = hora_dividida[0]+'-'+data_dividida[1]+'-'+data_dividida[0]+ ' '+ hora_dividida[1];
              
                if(data.length >= 1){

                for(i in data){
                var target = L.latLng(data[i].lon,data[i].lat);
                map.setView(target, 14);
               var marker =  L.marker(target,{icon:myIcon}).addTo(map);
               
                marker.bindPopup("<date-util format='dd/MM/yyyy'> Data: </date-util> "+ data_corrigida + "</br>\
                                <b> Tipo: </b> "+ data[0].tipo + "</br>\
                                <b> Descrição: </b> " + data[0].ras_descricao +"</br>\
                                <b> Descrição: </b> " + data[0].usu_nome+"</br>\
                                <b> Descrição: </b> " + data[0].velocidade +" km/h</br>").openPopup();

                }
            }
        }
        });

    }      

    function Informações() {
        $.ajax({
            method: "GET",
            url: "Dashboard/BuscaTodos",
            dataType: "JSON",
            success: function (data) {

                $("#cli_inicio").text(data[1].length)
                $("#ras_inicio").text(data[7].length)
                $("#equ_inicio").text(data[3].length)
                $("#ins_inicio").text(data[5].length)
            }  

            
        });

        
    }