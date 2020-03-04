<div class="panel-body">

    <div class="col-md-12"> 
        <h4><i class="fas fa-car"></i> Cadastro de Rastreados</h4>
        <hr>
    </div>

    <div class="col-md-12 form-group">
        <label>Descrição do Rastreado</label>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">
                <i class="fa fa-edit" aria-hidden="true"></i>
            </span>
            <input type="text" class="form-control insereInput" id="ras_descricao" name="ras_descricao" placeholder="Exemplo: Suzuki Gs 500">
        </div>
    </div>  

    <div class="col-md-12 form-group">
        <label>Identificação</label>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">
            <i class="fas fa-check-circle" aria-hidden="true"></i>
            </span>
            <input type="text" class="form-control insereInput" id="ras_identificacao" name="ras_identificacao" placeholder="Exemplo: ECH-1904">
        </div>
    </div> 

    <div class="col-md-6 form-group">
        <label>Tipo</label>
        <div class="input-group">
            <span class="input-group-addon" id="basic-addon1">
                <i class="fas fa-clipboard-list" aria-hidden="true"></i>
            </span>
            <select class="form-control insereInput" id="ras_tipo" name="ras_tipo" placeholder=" Exemplo: 39.123.443-2">
                <option selected>Selecione um tipo de Veiculo</option> 
                <option value="Moto">Moto</option>
                <option value="Carro">Carro</option>
                <option value="Bicicleta">Bicicleta</option>
                <option value="Caminhão">Caminhão</option>
                <option value="Pessoa">Pessoa</option>
            </select>
        </div>
    </div> 
</div>

    <div class="botao-cadastro"><a class="btn btn-primary btn-cadastro" id="btn-cadastrar"> Cadastrar</a>   
        <a href="<?= base_url('cadastros/veiculos/veiculos')?>" class="btn btn-primary btn-cadastro"> Voltar a lista </a>
    </div>

