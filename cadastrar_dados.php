<?php
require_once 'header.php';

?>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="orange">
                        <h4 class="title">Cadastrar</h4>
                        <p class="category">Cadastre os dados básicos do bebê</p>
                    </div>
                    <div class="card-content">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nome</label>
                                        <input type="text" name="nomeBebe" class="form-control">
                                    
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Data de Nascimento</label>
                                        <input type="date" name="dataNascimento" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Cidade</label>
                                        <input type="text" name="horario" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Peso</label>
                                        <input type="text" name="horario" class="form-control">
                                    </div>
                                </div>


                            <div class="col-md-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Altura</label>
                                        <input type="text" name="refeicao" class="form-control">
                                    </div>
                            </div>

                             <div class="col-md-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Foto</label>
                                        <input type="text" name="refeicao" class="form-control">
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
