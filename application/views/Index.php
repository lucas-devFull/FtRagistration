<?php 
// Feito por Lucas COnceição de Souza
include("cabecalho.php");
error_reporting(0);
session_destroy();


    ?>
    <div class="plan-inicio"> 
     <div class="container container-login">
            <div class="jumbotron">

                <img src="../img/usuario.png" class="img-rounded img-login">

            <div class="input-group inputs-login ">
            <span class="input-group-addon" id="basic-addon1"><i class="fas fa-user-tie"></i></span>
                <input id="email" class="form-control" type="email" placeholder="Digite seu Email" name="email"  aria-describedby="basic-addon1">
                <span class="input-group-addon" id="basic-addon2">@example.com</span>
            </div>

            <div class="input-group inputs-login">
                <span class="input-group-addon" id="basic-addon1"><i class="fas fa-unlock-alt"></i></span>
                <input id="senha" type="password" placeholder="Digite sua senha" name="senha" class="form-control" aria-describedby="basic-addon1">
            </div>
            
            </form>

            <!-- <button type="submit" class="btn btn-primary btn-login"> Sign in 1</button> -->
            <button id="btn-login" class="btn btn-primary btn-login"> Sign In </button> 

        </div>
    </div> -->
</div>
<?php 

include("rodape.php")

?>
	<script src="../js/login.js"></script>
