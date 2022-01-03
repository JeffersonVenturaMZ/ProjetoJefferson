


<div class='container'>
	<div class='row'>
		<div class='col-12'>
			<h3>Editar Artigo</h3>
			<form id='formcadastros' method = 'post' action = '<?php echo base_url().'administracao/artigos/salvar_alteracao'?>' enctype='multipart/form-data' >
				<span class='invalid-feedback'> <?php echo validation_errors(); ?> </span>
				<input type='hidden' value='<?php echo $artigo[0]->id_artigo; ?>' name='id_artigo'>

				<div class="form-group">
					<label for="nome">Nome: </label>
					<input type='text' class='form-control' name='nome' id='nome' placeholder = 'Informe o artigo' value = '<?php echo $artigo[0]->nome; ?>'>			
				</div>
				<div class="form-group">
					<label for='slug_receita'>Slug: </label>
					<input type='text' class='form-control' name='slug_artigo' id='slug_artigo' placeholder = 'informe o slug' value = '<?php echo $artigo[0]->slug_artigo; ?>'>
				</div>
				<div class="form-group">
					<label for='texto'>Texto do artigo: </label>
					<textarea type='text' class='form-control' name='texto' id='texto' placeholder = 'informe o texto'><?php echo $artigo[0]->texto; ?></textarea>
				</div>
				<div class="form-group">
					<label for='userfile'>Foto: </label>
					<input type='file' class='form-control' name='userfile' id='userfile'>
				</div>
				<input type='submit' value = 'Confirmar alteração' class='btn btn-primary'>
			</form>
		</div>
	</div>
</div>