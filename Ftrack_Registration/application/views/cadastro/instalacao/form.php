
<div class="panel-body">

    <div class="col-md-12"> 
        <h4><i class="fas fa-tools"></i> Instalação</h4>
        <hr>
    </div>

    <div class="col-md-12 form-group">
        <label>Selecione um Equipamento Registrado (Nº do CHIP)</label>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">
            <i class="fas fa-microchip" aria-hidden="true"></i>
            </span>
            <select class="form-control insereInput" id="ins_id_equipamento" name="ins_id_equipamento"  data-tabela="equipamento">
                <option disabled="disabled" selected>Escolha um Equipamento</option>
            </select>
        </div>
    </div>  

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
</div>


    <div class="botao-cadastro" ><a class="btn btn-primary btn-cadastro" id="btn-cadastrar"> Cadastrar</a>   
        <a href="<?= base_url('cadastros/instalacao/Instalacao')?>" class="btn btn-primary btn-cadastro"> Voltar a lista </a>
    </div>