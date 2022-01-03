<div style = 'width:300px; margin:0 auto; margin-top:100px;'>
<h3>Efetuar login</h3>
<form id='formlogin' method = 'post' action = '<?php echo base_url().'administracao/home/login'?>' >
	<div class="form-group">
		<label for="usuario">Usuário: </label>
		<input type='text' class='form-control' name='usuario' id='usuario' placeholder = 'Informe seu usuário'>			
	</div>
	<div class="form-group">
		<label for='senha'>Senha: </label>
		<input type='password' class='form-control' name='senha' id='senha' placeholder = 'informe sua senha'>
	</div>
  <input type='submit' value = 'Efetuar login' class='btn btn-primary bg-dark'>
</form>
</div>
