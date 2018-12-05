<?php
require_once 'header.php';
require_once 'assets/php/classes/classBebe.php';
require_once 'assets/php/classes/classConsultas.php';

$bebe = new Bebes();
$consulta = new Consultas();
?>
<br>
<center><div class="col-md-8">
	<div class="card">
		<div class="card-header card-header-primary">
			<h4 class="card-title ">Consultas</h4>
			<p class="card-category">Relatório de Consultas</p>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-5">
					<div class="form-group label-floating">
						<label class="control-label">Criança</label>
						<select id="select" name="bebe_id" id="bebe_id" for="bebe"
						class="form-control" required>
						<?php
						$stmt = $bebe->index();
						while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
							?>
							<option id="bebe_id" value="<?php echo $row->id ?>" selected><?php echo $row->nome ?></option>
						<?php } ?>
						<option selected>Selecione</option>
					</select>
				</div>
			</div>
		</div>
		<?php 
		$stmt = $consulta->index();
		while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
			if ($row->id == $_POST['bebe_id']) {
				
				?>
				<div class="table-responsive">
					<table class="table">
						<thead class=" text-primary">
							<tr>
								<th>Data</th>
								<th>Bebê</th>
								<th>Medico</th>	
								<th>Local</th>	
								<th>Observação</th>		
							</tr>
						</thead>
						<tbody>
							<?php
							$listar = (new Consultas())->listar();
							foreach ($listar as $key => $value) {
								echo
								'<tr>',
								'<td>'
								. $value['data'].
								'</td>',
								'<td>'
								. $value['bebe_id'].
								'</td>',
								'<td>'
								. $value['medico'].
								'</td>',
								'<td>'
								. $value['local'].
								'</td>',
								'<td>'
								. $value['observacao'].
								'</td>';
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
			<br><center><a href="relatorios.php"><button type="button" name="voltar" id="btnamarelo" class="btn btn-primary pull-right">
				Voltar
			</button></a></center><br>
		</div>
	</div>

</div></center>
<?php } 
}?>
