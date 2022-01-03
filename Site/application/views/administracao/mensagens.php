<h3>Mensagens Recebidas</h3>

<hr>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Excluir</th>
      <th scope="col">Nome</th>
      <th scope="col">E-mail</th>
      <th scope="col">Mensagem</th>
        
    </tr>
  </thead>
  <tbody>
      
<?php
	
	foreach($contato as $mensagens){

		echo "<tr>
				<td><a href='".base_url() . "administracao/mensagens/excluir/".$mensagens->id . "' onclick='return confirm('Confirma exclusão?');'>Excluir</a></td>
				<td>".$mensagens->nome."</td>
				<td>".$mensagens->email."</td>
                <td>".$mensagens->mensagem."</td>
	 		 </tr>";

	}

	?>