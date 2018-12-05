<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png"/>
    <link rel="icon" type="image/jpg" href="assets/img/logo6.jpg"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Baby Life</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet"/>
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet'
          type='text/css'>
</head>
<body>
<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-1.jpg">
        <div class="logo">
            <a href="./admin.php" class="simple-text">
                <img class="logo1" src="assets/img/logo5.jpg">
            </a>
        </div>
        <div class="sidebar-wrapper">
            
        </div>
    </div>
    <div class="main-panel">

<?php

require_once 'assets/php/classes/classUsuarioMaster.php';

$usuarioMaster = new Usuarios_master();

if(isset($_POST['insert'])){
    $usuarioMaster->setEmail($_POST['email']);
    $usuarioMaster->setSenha($_POST['senha']);

    if($usuarioMaster->insert() == 1){
        $result = "Usuário inserido com sucesso!";
    }else{
        $error = "Erro ao inserir. Tente novamente";
    }
}
?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <?php
            if (isset($result)) {
                ?>
                <div class="alert alert-success">
                    <?php echo $result; ?>
                </div>
                <?php
            }else if(isset($error)){
                ?>
                <div class="alert alert-danger">
                    <?php echo $error; ?>
                </div>
                <?php
            }
            ?>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="orange">
                        <h4 class="title">Cadastrar</h4>
                        <p class="category">Cadastre Usuário</p>
                    </div>
                    <div class="card-content">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Email</label>
                                        <input type="text" name="email" class="form-control" required>
                                    </div>
                                    </div>
                                    </div>

                                <div class="col-md-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Senha</label>
                                        <input type="password" name="senha" class="form-control" required>
                                    </div>
                                </div>

                            <button type="submit" name="insert" id="btnamarelo" class="btn btn-primary pull-right">
                                Cadastrar
                            </button>

                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once 'footer.php';
?>
