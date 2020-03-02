           
            <div class="panel-body">

<div class="col-md-12"> 
    <h4><i class="fas fa-user-alt" aria-hidden="true"></i> Configuração de Usuário</h4>
    <hr>
</div>

<div class="col-md-12 form-group">
    <label>Nome Do Usuário </label>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">
            <i class="fa fa-edit" aria-hidden="true"></i>
        </span>
        <input type="text" class="form-control insereInput" id="usu_usuario" name="usu_usuario" placeholder="Exemplo: Lucas">
    </div>
</div>  

<div class="col-md-12 form-group">
    <label> Nova Senha </label>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">
            <i class="fas fa-key" aria-hidden="true"></i>
        </span>
        <input type="text" class="form-control insereInput" id="usu_senha" name="usu_senha" placeholder="Exemplo: 996977689">
    </div>
</div> 

<div class="col-md-6 form-group">
    <label>Novo E-mail </label>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">
        <i class="far fa-envelope" aria-hidden="true"></i>
        </span>
        <input type="text" class="form-control insereInput" id="usu_email" name="usu_email" placeholder=" Exemplo: lucas@fulltime.com">
    </div>
</div> 

<div class="col-md-6 form-group">
    <label>Nome Completo</label>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">
            <i class="fa fa-edit" aria-hidden="true"></i>
        </span>
        <input type="text" class="form-control insereInput" id="usu_nome" name="usu_nome" placeholder=" Exemplo: Lucas Conceição de Souza">
    </div>
</div> 

        <input type="hidden" class="form-control insereInput" id="usu_admin" name="usu_admin">
</div>



<div class="botao-cadastro" ><a class="btn btn-primary btn-cadastro" id="btn-cadastrar"> Salvar Alterações </a>   
                    <a href="<?= base_url('Dashboard')?>" class="btn btn-primary btn-cadastro"> Cancelar </a></div>
</div>
