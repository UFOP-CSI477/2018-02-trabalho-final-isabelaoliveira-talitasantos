<?php
require_once 'header.php';
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
