<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="<?= base_url("images/icon-nav.png") ?>" type="image/gif" >
    <title>Ftrack - Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url("assets/libs/bootstrap/css/bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?=base_url("assets/libs/iziToast-master/dist/css/iziToast.min.css")?>">
    <link rel="stylesheet" type="text/css" media="screen" href="<?= base_url("assets/css/login/login.css") ?>" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>
<body>

<div style="width:100%;height:-webkit-fill-available;display:flex;justify-content:center;align-items:center;">
    <div class="row" style="display:contents;">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

            <div class="panel panel-default" style="border-radius: 30px;">
                <div class="panel-body" style="text-align: center;border-radius: 21px;background-color: #e4e4e4;height: 30em;">

                    <img src="<?=base_url("images/logo-login.png")?>" class="img-login">
                        <input id="email" class="form-control input-login" type="email" placeholder="Digite seu Email" name="email"  aria-describedby="basic-addon1">
                        <input id="senha" type="password" placeholder="Digite sua senha" name="senha" class="form-control input-login" aria-describedby="basic-addon1">
                    <button id="btn-login" class="btn btn-primary btn-login"> Entrar </button>
                </div>
            </div>
        </div>
    </div>
</div>


    <script src="<?= base_url("assets/libs/jquery/jquery.js") ?>"> </script>
    <script src="<?= base_url("assets/libs/iziToast-master/dist/js/iziToast.min.js")?>"></script>
    <script src="<?= base_url("assets/js/login.js") ?>"> </script>
</body>
</html>