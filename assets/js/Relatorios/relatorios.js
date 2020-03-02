var polyline = {};
var markers = [];


$(document).ready(function () {
    var map = Mapa();

        var select = $("#config_pagina").attr("data-select");
            $('#tabelaForm').bootstrapTable({
                columns:[{
                    field:'lat',
                    title:'Latitude'
                },{
                    field:'lon',
                    title:'Longitude'
                },{
                    field:'eve_data_gps',
                    title:'Data do GPS',
                    sortable:true,
                    formatter:data_certa
                },{
                    field:'eve_ignicao',
                    title:'Ignição',
                    sortable:true,
                    formatter:ignicao_icone
                },{
                    field:'eve_gps',
                    title:'GPS',
                    sortable:true,
                    formatter:gps_icone
                },{
                    field:'eve_velocidade',
                    title:'Velocidade',
                    sortable:true,
                    formatter:Formatacao_km
                }]
            })


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
        }
    })

    $("#btn-cadastrar").on("click",function(){

            var dados = $('.insereInput').serializeArray();        

            $.ajax({
            method: "get",
            url: "Relatorios/BuscaRegistros",
            data:dados,
            dataType: "JSON",
            success: function(data){
                    
                    $('#tabelaForm').bootstrapTable('removeAll');
                    
                    $('#tabelaForm').bootstrapTable('load',data);

                    map.removeLayer(polyline);
                    for(i in markers) {
                        map.removeLayer(markers[i])
                    }
                    adicionarPontoNoMapa(data)
                    AdicionarMarkerNoMapa(data)
                }
            })
        
    })


    function Mapa(){
        var myIcon  = L.icon({
            iconUrl: "../../images/car.png",
            iconSize: [40,40],
            iconAnchor: [0, 5],
            popupAnchor: [22, 0],
        })

        var element = document.getElementById('osm-map');
                element.style = 'height:530px;';
                var map = L.map(element)
        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        target = L.latLng(-22.2107715,-49.6771926);
        map.setView(target, 14);
        let markerInicial = L.marker(target,{icon:myIcon});
        markers.push(markerInicial)
        markerInicial.addTo(map);
        return map;
    }

    function AdicionarMarkerNoMapa(data){
        var myIcon  = L.icon({
            iconUrl: "../../images/car.png",
            iconSize: [40,40],
            iconAnchor: [20, 40],

        })


        for(var i in data){
            
            var target = L.latLng(data[i].lon, data[i].lat);
            var marcacao = L.marker(target,{icon:myIcon});
            markers.push(marcacao);
            marcacao.addTo(map)
        }
      
    }
    function adicionarPontoNoMapa(data){
        
        if(data.length >= 1){
            var latLong = [];
            for(var i = 0 in data){
                latLong.push([data[i].lon,data[i].lat])
            }                    
            polyline = L.polyline(latLong, {color: '#f86c6b'}).addTo(map);
            map.fitBounds(polyline.getBounds());
        }else{
            iziToast.error({
                title: 'Erro',
                message: 'Dados não encontrados',
            });
        }
            
    }
    

    function Formatacao_km(value,row,index){
        let velocidade =  row.eve_velocidade
        if(velocidade != null){
            return [
                velocidade +' km'
            ].join('')
        }else{
            return [
                '0 km' 
            ].join('')
        }
        
    }

    function gps_icone(value, row, index) {
        if(row.eve_gps == "1"){
            return [
            '<a class="ignicao" href="javascript:void(0)" title="GPS">',
                '<i class="fas fa-signal text-success"></i>',
            '</a> ',
            ].join('')
        }else{
            return [
                '<a class="ignicao" href="javascript:void(0)" title="GPS">',
                '<i class="fas fa-signal text-danger"></i>',
                '</a> ',
            ].join('')
                
        }
    }
    function data_certa(value, row, index) {
        let data = row.eve_data_gps;
        let data_dividida = data.split("-");
        let hora_dividida = data_dividida[2].split(" ");
        let data_corrigida = hora_dividida[0]+'-'+data_dividida[1]+'-'+data_dividida[0]+ ' '+ hora_dividida[1];
        return data_corrigida; 
    }

    function ignicao_icone(value, row, index) {
        
        if(row.eve_ignicao == "1"){
            return [
            '<a class="ignicao" href="javascript:void(0)" title="ignicao">',
            '<i class="fas fa-toggle-on text-success"></i>',
            '</a> ',
            ].join('')
        }else{
            return [
                '<a class="ignicao" href="javascript:void(0)" title="ignicao">',
                '<i class="fas fa-toggle-off text-danger"></i>',
                '</a> ',
            ].join('')
                
        } 
      } 
})