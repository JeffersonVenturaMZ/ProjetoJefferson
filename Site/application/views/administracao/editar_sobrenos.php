


<div class='container'>
	<div class='row'>
		<div class='col-12'>
			<h3>Editar Sobre nós</h3>
			<form id='formcadastros' method = 'post' action = '<?php echo base_url().'administracao/sobrenos/salvar_alteracao'?>' enctype='multipart/form-data' >
				<span class='invalid-feedback'> <?php echo validation_errors(); ?> </span>
				<input type='hidden' value='<?php echo $sobrenos[0]->id; ?>' name='id'>

				<div class="form-group">
					<label for="titulo">Titulo: </label>
					<input type='text' class='form-control' name='titulo' id='titulo' placeholder = 'Insira o titulo' value = '<?php echo $sobrenos[0]->titulo; ?>'>			
				</div>

				<div class="form-group">
					<label for='texto'>Texto sobre nós: </label>
					<textarea type='text' class='form-control' name='texto' id='texto' placeholder = 'informe o texto'><?php echo $sobrenos[0]->texto; ?></textarea>
				</div>
				<input type='submit' value = 'Confirmar alteração' class='btn btn-primary'>
			</form>
		</div>
	</div>
</div>