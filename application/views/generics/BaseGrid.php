    <div class="enquadramento">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-body">
                <div class='titulo-Lista'> Lista de<?= $nome?></div>
                    <div class="edita-botoes">
                        <a class="btn btn-primary" id="btn-Adicionar" href="<?=base_url("$adicionar")?>"> <i class="fas fa-plus-circle"></i> Adicionar</a>
                        <a disabled id="btn-editar" class="btn btn-success edit"><i class="far fa-edit"></i> Editar</a>
                        <a disabled id='btn-deletar' class="btn btn-danger delete"><i class="far fa-trash-alt"></i> Deletar</a >
                    </div>
                    <div class="panel">
                        <table id='tabelagrid' 
                                            data-pagination =true
                                            data-search="true"
                                            data-thead-classes="thead-dark"
                                            data-click-to-select ="true">
                        </table>               
                    </div>
                </div>
            </div>
        </div>
    </div>
