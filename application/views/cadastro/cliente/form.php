           
            <div class="panel-body">

                <div class="col-md-12"> 
                    <h4><i class="fas fa-user-alt" aria-hidden="true"></i> Clientes</h4>
                    <hr>
                </div>

                <div class="col-md-12 form-group">
                    <label>Nome Fantasia</label>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">
                            <i class="fa fa-edit" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control insereInput" id="cli_nome_fantasia" name="cli_nome_fantasia" placeholder="Exemplo: Fulltime">
                    </div>
                </div>  

                <div class="col-md-12 form-group">
                    <label>Razão Social</label>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">
                            <i class="fa fa-edit" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control insereInput" id="cli_razao_social" name="cli_razao_social" placeholder="Exemplo: Fulltime gestora..">
                    </div>
                </div> 

                <div class="col-md-6 form-group">
                    <label>Telefone</label>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">
                        <i class="fas fa-mobile-alt"  aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control insereInput" id="cli_telefone" name="cli_telefone" placeholder=" Exemplo: 14996977689">
                    </div>
                </div> 

                <div class="col-md-6 form-group">
                    <label>Endereço</label>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">
                            <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control insereInput" id="cli_endereco" name="cli_endereco" placeholder=" Exemplo: rua das flores,240">
                    </div>
                </div> 

                <div class="col-md-12 form-group">
                    <label>E-mail</label>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">
                        <i class="far fa-envelope" aria-hidden="true"></i>
                        </span>
                        <input type="email" class="form-control insereInput" id="cli_email" name="cli_email" placeholder="Exemplo: lucas@gmail.com">
                    </div>
                </div> 
            </div>

            
            
        <div class="botao-cadastro" ><a class="btn btn-primary btn-cadastro" id="btn-cadastrar"> Cadastrar</a>   
                                    <a href="<?= base_url('cadastros/cliente/Cliente')?>" class="btn btn-primary btn-cadastro"> Voltar a lista </a></div>
        </div>
