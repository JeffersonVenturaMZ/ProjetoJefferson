<div class='container'>
	<div class='row'>
		<div class='col-12'>
			<h3>Inserir conteúdo sobre nós</h3>
			<form id='formcadastros' method = 'post' action = '<?php echo base_url().'administracao/sobrenos/adicionar'?>' enctype='multipart/form-data' >
				<span class='invalid-feedback'> <?php echo validation_errors(); ?> </span>

				<div class="form-group">
					<label for="nome">Título: </label>
					<input type='text' class='form-control' name='titulo' id='titulo' placeholder = 'Informe o titulo'>			
				</div>
				
				<div class="form-group">
					<label for='texto'>Texto sobre nós: </label>
					<textarea type='text' class='form-control' name='texto' id='texto' placeholder = 'informe o texto'></textarea>
				</div>
				<input type='submit' value = 'Efetuar Cadastro' class='btn btn-primary'>
			</form>
<hr>

<h3>Sobre nós</h3>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Excluir</th>
      <th scope="col">Alterar</th>
      <th scope="col">Título</th>
      <th scope="col">Texto</th>  
    </tr>
  </thead>
  <tbody>

	<?php
	
	foreach($sobrenos as $nossobre){

		echo "<tr>
				<td><a href='".base_url() . "administracao/sobrenos/excluir/".$nossobre->id . "' onclick='return confirm('Confirma exclusão?');'>Excluir</a></td>
				<td><a href='".base_url() . "administracao/sobrenos/editar/".$nossobre->id . "' onclick='return confirm('Confirma alteração?');'>Alterar</a></td>
				<td>".$nossobre->titulo."</td>
                <td>".$nossobre->texto."</td>
	 		 </tr>";

	}

	?>

</div>

