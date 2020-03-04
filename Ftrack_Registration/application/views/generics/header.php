<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html id="html">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="<?= base_url("images/icon-nav.png")?>" type="image/gif" >
    <title>Ftrack - Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="<?=base_url("assets/libs/bootstrap/css/bootstrap.min.css")?>" >
    <link rel="stylesheet" href="<?=base_url("assets/libs/iziToast-master/dist/css/iziToast.css")?>">
    <link href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- links menu -->
    <link rel="stylesheet" href="<?=base_url("assets/libs/pushy-master/css/pushy.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/libs/pushy-master/css/demo.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/libs/pushy-master/css/normalize.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/libs/perfect-scrollbar/css/perfect-scrollbar.css")?>">
    <link rel="stylesheet" href="<?=base_url("assets/css/generics/generics.css")?>">
    


    <!-- end links menu -->

    
    <?php if(!empty($css)) {
        foreach($css as $value){?>
            <link rel="stylesheet" href="<?=$value?>">
        <?php }
    } ?>
</head>

<body>

<input type="hidden" id="config_pagina" data-url_get="<?=$url_get?>"
                                        data-voltar_tabela="<?= $nome?>"
                                        data-edita_url="<?=$editar_url?>"
                                        data-url_id="<?=$url_id?>"
                                        data-url_usuario="<?=$edita_usuario?>"
                                        data-select = "<?=$select?>">

<nav class="pushy pushy-left "  id="menu-pai">
            <div class="pushy-content">

				<img src="<?= base_url("images/logo-login.png")?>" class="img-responsive">
                <ul class="lista-menu">
                <li class="primeiroLista"><a  href=<?= base_url("Usuarios/formulario?id=".$url_id)?> id="uusuario"> <i class="far fa-user"></i> <?php $seccao = $this->session->userdata["usuario_logado"]; echo $seccao['usu_nome'];?> </a></li>
				<li class="pushy-link"><a href="<?= base_url("Dashboard") ?>"> <i class="fas fa-home"></i> Dashboard </a></li>
					
                    <li class="pushy-submenu pushy-submenu-closed">
                        <button id="first-link"><i class="fas fa-pen-square"></i> Cadastros</button>
                        <ul>
                            <li class="pushy-link"><a href="<?= base_url("cadastros/cliente/Cliente")?>"><i class="fas fa-user-edit"></i> Clientes</a></li>
                            <li class="pushy-link"><a href="<?=base_url('cadastros/veiculos/Veiculos')?>"><i class="fas fa-car"></i> Rastreado</a></li>
							<li class="pushy-link"><a href="<?=base_url('cadastros/rastreadores/Rastreadores')?>"><i class="fas fa-microchip"></i> Rastreadores</a></li>
							<li class="pushy-link"><a href="<?=base_url('cadastros/instalacao/Instalacao')?>"><i class="fas fa-tools"></i> Instalações</a></li>
                        </ul>
                    </li>
                    <li class="pushy-submenu pushy-submenu-closed">
                        <button><i class="fas fa-clipboard-list"></i> Relatórios</button>
                        <ul>
						    <li class="pushy-link"><a href="<?= base_url("cadastros/relatorios/Relatorios")?>"><i class="fas fa-calendar-check"></i> Eventos</a></li>
                        </ul>
                    </li>
                    <li class="pushy-submenu pushy-submenu-closed">
                </ul>
            </div>
		</nav>
	
		<div class="site-overlay"></div>

			<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
 				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href='<?=base_url('Dashboard')?>'><img src="<?= base_url("images/full.png")?>"></a>
					</div>

						<div class="nav navbar-nav">
							<li class="menu-btn "><i class="fas fa-bars"></i><span class="sr-only">(current)</span></a></li>
						</div>

						<div class="nav navbar-nav navbar-right">
						<div class="dropdown">
                            <a href="<?= base_url("Login/logout")?>"><li class="logout" id="logout"><i class="fas fa-power-off"> </i> Logout <span class="sr-only">(current)</span></li></a>
							
						</div>
					
						</div> 
				</div>
			</nav>

