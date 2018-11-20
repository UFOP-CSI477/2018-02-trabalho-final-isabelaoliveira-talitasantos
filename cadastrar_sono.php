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
                        <p class="category">Cadastre a rotina de sono do bebê</p>
                    </div>
                    <div class="card-content">
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Criança</label>
                                        <select id="select" name="bebe_id" id="bebe_id" for="bebe" action=""
                                                class="form-control">
                                            <option>Selecione</option>

                                            <option id="" value=""></option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Data</label>
                                        <input type="date" name="data" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Horário Inicio</label>
                                        <input type="time" name="horarioInicio" class="form-control">
                                    </div>
                                </div>


                                <div class="col-md-4">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Horário Fim</label>
                                        <input type="time" name="horarioFim" class="form-control">
                                    </div>
                                </div>

                            </div>


                                <div class="col-md-5">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Observação</label>
                                        <input type="text" name="horario" class="form-control">
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
