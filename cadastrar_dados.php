<?php
require_once 'header.php';
require_once 'assets/php/classes/classBebe.php';
require_once 'assets/php/classes/classPesoAltura.php';

$bebe = new Bebes();
$info = new PesoAltura();

if (isset($_POST['insert'])) {
    $bebe->setNome($_POST['nome']);
    $bebe->setDataNascimento($_POST['data_nascimento']);
    $bebe->setCidade($_POST['cidade']);
    $bebe->setUsuario($_POST['usuarios_master_id']);

    $foto = $_FILES["foto"];
    // Se a foto estiver sido selecionada
    if (!empty($foto["name"])) {
        // Pega extensão da imagem
        preg_match("/\.(png|jpg|jpeg){1}$/i", $foto["name"], $ext);
        // Gera um nome único para a imagem
        $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
        $diretorio = "assets/img/";
        if (!file_exists($diretorio)){
            mkdir($diretorio, 0777, true);
        }
        // Caminho de onde ficará a imagem
        $caminho_imagem = $diretorio . $nome_imagem;
        move_uploaded_file($foto["tmp_name"], $caminho_imagem);
        $bebe->setFoto($caminho_imagem);
    }

    $id_bebe = $bebe->insert();
    if($id_bebe > 0){
        $info->setAltura($_POST['altura']);
        $info->setPeso($_POST['peso']);
        $info->setBebe($id_bebe);
        if($info->insert() == 1){
            $result = "Dados inseridos com sucesso!";
        }else{
            $error = "Erro ao inserir. Tente novamente";
        }
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
            } else if (isset($error)) {
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
                        <p class="category">Cadastre os dados básicos do bebê</p>
                    </div>
                    <div class="card-content">
                        <form action="cadastrar_dados.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nome</label>
                                        <input type="text" name="nome" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Data de Nascimento</label>
                                        <input type="date" name="data_nascimento" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Cidade</label>
                                        <input type="text" name="cidade" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group label-floating">
                                    <label class="control-label">Peso</label>
                                    <input type="text" id="peso" name="peso" class="form-control">
                                </div>
                            </div>


                            <div class="col-md-5">
                                <div class="form-group label-floating">
                                    <label class="control-label">Altura</label>
                                    <input type="text" id="altura" name="altura" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div>
                                    <span class="btn btn-raised btn-round btn-default btn-file">
                                        <span class="fileinput-new">Inserir foto</span>
                                    <input type="file" name="foto"/></span>
                                </div>
                            </div>
                            <input type="hidden" name="usuarios_master_id" value="<?php echo $_SESSION['id'] ?>"
                                   class="form-control">
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
