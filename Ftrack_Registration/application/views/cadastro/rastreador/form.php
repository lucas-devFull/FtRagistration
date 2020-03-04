
    <div class="panel-body">

        <div class="col-md-12"> 
            <h4><i class="fas fa-microchip"></i> Rastreador </h4>
            <hr>
        </div>

        <div class="col-md-12 form-group">
            <label>Numero de Serie</label>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">
                    <i class="fa fa-edit" aria-hidden="true"></i>
                </span>
                <input type="text" class="form-control insereInput" id="equ_numero_serie" name="equ_numero_serie" placeholder="Exemplo: 98465124612">
            </div>
        </div>  

       
        <div class="col-md-6 form-group">
            <label>Selecione o Produto</label>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">
                    <i class="fa fa-edit" aria-hidden="true"></i>
                </span>
                <select class="form-control insereInput" id="equ_id_produto" name="equ_id_produto"  data-tabela="produto">
                    <option selected> Escolha um Produto</option>
                </select>
            </div>
        </div> 

        <div class="col-md-12 form-group">
            <label>Numero do Chip</label>
            <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">
                    <i class="fas fa-microchip" aria-hidden="true"></i>
                </span>
                <input type="text" class="form-control insereInput" id="equ_numero_chip" name="equ_numero_chip" placeholder="Exemplo: 14996977689">
            </div>
        </div> 
</div>


    <div class="botao-cadastro" >
        <a class="btn btn-primary btn-cadastro" id="btn-cadastrar"> Cadastrar</a>   
        <a href="<?= base_url('cadastros/rastreadores/Rastreadores')?>" class="btn btn-primary btn-cadastro"> Voltar a lista</a>
    </div>