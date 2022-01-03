

<div class='container'>
	<div class='row'>
		<div class='col-12'>
			<h3>Cadastrar Artigo</h3>
			<form id='formcadastros' method = 'post' action = '<?php echo base_url().'administracao/artigos/adicionar'?>' enctype='multipart/form-data' >
				<span class='invalid-feedback'> <?php echo validation_errors(); ?> </span>

				<div class="form-group">
					<label for="nome">Nome: </label>
					<input type='text' class='form-control' name='nome' id='nome' placeholder = 'Informe o artigo'>			
				</div>
				<div class="form-group">
					<label for='slug_receita'>Slug: </label>
					<input type='text' class='form-control' name='slug_artigo' id='slug_artigo' placeholder = 'informe o slug'>
				</div>
				<div class="form-group">
					<label for='texto'>Texto do artigo: </label>
					<textarea type='text' class='form-control' name='texto' id='texto' placeholder = 'informe o texto'></textarea>
				</div>
				<div class="form-group">
					<label for='userfile'>Foto: </label>
					<input type='file' class='form-control' name='userfile' id='userfile'>
				</div>
				<input type='submit' value = 'Efetuar Cadastro' class='btn btn-primary'>
			</form>


<hr>

<h3>Artigos cadastrados</h3>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Excluir</th>
      <th scope="col">Alterar</th>
      <th scope="col">Categoria</th>
      <th scope="col">Slug</th>
    </tr>
  </thead>
  <tbody>

	<?php
	
	foreach($artigos as $artigo){

		echo "<tr>
				<td><a href='".base_url() . "administracao/artigos/excluir/".$artigo->id_artigo . "' onclick='return confirm('Confirma exclusão?');'>Excluir</a></td>
				<td><a href='".base_url() . "administracao/artigos/editar/".$artigo->id_artigo . "' onclick='return confirm('Confirma alteração?');'>Alterar</a></td>
				<td>".$artigo->nome."</td>
				<td>".$artigo->slug_artigo."</td>
	 		 </tr>";

	}

	?>



</div>
</div>
</div>



