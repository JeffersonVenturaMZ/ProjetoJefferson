

<div class='container'>
	<div class='row'>
		<div class='col-12'>
			<h3>Cadastrar Usuário</h3>
			<form id='formcadastros' method = 'post' action = '<?php echo base_url().'administracao/usuario/adicionar'?>' >
				<span class='invalid-feedback'> <?php echo validation_errors(); ?> </span>
				<div class="form-group">
					<label for="usuario">Usuário: </label>
					<input style="border-color: #9FB6CD;" type='text' class='form-control' name='usuario' id='usuario' placeholder = 'Informe o usuario'>			
				</div>
				<div class="form-group">
					<label for="usuario">Senha: </label>
					<input style="border-color: #9FB6CD;" type='password' class='form-control' name='senha' id='senha' placeholder = 'Informe a senha'>			
				</div>
				<input type='submit' value = 'Efetuar Cadastro' class='btn btn-primary'>
			</form>


<hr>

<h3>Categorias cadastradas</h3>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Excluir</th>
      <th scope="col">Alterar</th>
      <th scope="col">Usuário</th>
      <th scope="col">Senha</th>
    </tr>
  </thead>
  <tbody>

	<?php
	
	foreach($categorias as $categoria){

		echo "<tr>
				<td><a href='".base_url() . "administracao/usuario/excluir/".$categoria->id_usuario . "' onclick='return confirm('Confirma a excluão deste usuario')'>Excluir</a></td>
				<td><a href='".base_url() . "administracao/usuario/editar/".$categoria->id_usuario . "' onclick='return confirm('Confirma a alteração deste usuario')'>Alterar</a></td>
				<td>".$categoria->usuario."</td>
				<td>".$categoria->senha."</td>
	 		 </tr>";

	}

	?>



</div>
</div>
</div>