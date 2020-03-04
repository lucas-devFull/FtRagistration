
        <div class="panel-body relatorios">

        <div class="col-md-12 form-group">
                <label>Selecione um Rastreado</label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">
                        <i class="fas fa-car" aria-hidden="true"></i>
                    </span>
                    
                    <select class="form-control insereInput" id="ins_id_rastreado" name="ins_id_rastreado" data-tabela="rastreado">
                        <option  disabled="disabled" selected>Escolha um Equipamento</option>
                    </select>

                </div>
            </div>

            <div class="col-md-12 form-group">
                <label>Selecione data </label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">
                    <i class="fas fa-calendar-alt" aria-hidden="true"></i>
                    </span>
                    <input class="form-control insereInput" type="datetime-local" name="data_inicio" id="data_inicio">
                </div>
            </div>  

            <div class="col-md-12 form-group">
                <label>Selecione data </label>
                <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">
                    <i class="fas fa-calendar-alt" aria-hidden="true"></i>
                    </span>
                    <input class="form-control insereInput" type="datetime-local" name="data_fim" id="data_fim">
                </div>
            </div> 
                <a class="btn btn-primary btn-cadastro btn-relatorio" id="btn-cadastrar"> Gerar Relatório </a>
        </div>
    </div>
</div>


    <div class="conteudo">
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="panel panel-danger">
                    <div class="panel-heading"> <i class="fas fa-map-marked-alt"></i> Mapa</div>
                    <div class="panel-body mapa">
                        <div id="osm-map">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <table id='tabelaForm' 
        data-pagination =true
        data-thead-classes="thead-dark"
        data-click-to-select ="true">
    </table>               