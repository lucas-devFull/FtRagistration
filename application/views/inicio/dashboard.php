<div class="row calouts-dash">
	<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
		<a href="<?=base_url("cadastros/cliente/Cliente")?>" class="Btn-calouts"><div class="callout">
			<small class="text-muted"> Clientes</small><br>
			<i class="fas fa-user-edit"></i>
			<strong class="h4" id='cli_inicio'></strong>
		</div>
	</div></a>

	<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
		<a href="<?=base_url("cadastros/veiculos/Veiculos")?>" class="Btn-calouts"><div class="callout">
			<small class="text-muted">Objetos Rastreados</small><br>
			<i class="fas fa-car"></i>
			<strong class="h4" id=ras_inicio></strong>
		</div>
	</div></a>

	<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
		<a href="<?=base_url("cadastros/rastreadores/Rastreadores")?>" class="Btn-calouts"><div class="callout">
			<small class="text-muted">Rastreadores</small><br>
			<i class="fas fa-microchip"></i>
			<strong class="h4" id="equ_inicio"></strong>
		</div>
	</div></a>

	<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
		<a href="<?=base_url("cadastros/instalacao/Instalacao")?>" class="Btn-calouts"><div class="callout">
			<small class="text-muted">Instalacao</small><br>
			<i class="fas fa-tools"></i>
			<strong class="h4" id="ins_inicio"></strong>
		</div>
	</div></a>
</div>


<div class="conteudo">
	<div class="row">
		<div class="col-lg-8 col-sm-12">
			<div class="panel panel-danger">
				<div class="panel-heading"> <i class="fas fa-map-marked-alt"></i> Mapa</div>
				<div class="panel-body mapa">
					<div id="osm-map"></div>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-sm-12">
			<div class="panel panel-danger Tabela-Dash">
				<div class="panel-heading"><i class="fas fa-list-ul"></i> Ultimas Instalações</div>
					<div class="panel-body">
						<table id='tabela' 
								data-pagination =true
								data-thead-classes="thead-dark"
								data-click-to-select ="true">
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>