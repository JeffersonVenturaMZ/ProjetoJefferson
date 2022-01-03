<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="<?php echo base_url(); ?>">
  <img src="http://localhost/ProjetoJefferson/Site/assets/imgs/logoteste.png" alt="Logo" style="width:60px;">  
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" style="font-family: 'Kanit', sans-serif; font-size:22px;" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" style="font-family: 'Kanit', sans-serif; font-size:22px;" href="<?php echo base_url("artigos"); ?>">Artigos <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" style="font-family: 'Kanit', sans-serif; font-size:22px;" href="<?php echo base_url("competicoes"); ?>">Competições <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" style="font-family: 'Kanit', sans-serif; font-size:22px;" href="<?php echo base_url("contato"); ?>">Contato<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" style="font-family: 'Kanit', sans-serif; font-size:22px;" href="<?php echo base_url("sobrenos"); ?>">Sobre Nós <span class="sr-only">(current)</span></a>    
    </div>
  </div>
  <form class='form-inline' action="<?php echo base_url('artigos/buscar'); ?>" method="post">
		<input class='form-control mr-sm-2' name='busca' type='search' placeholder='Buscar' aria-label='Buscar'>
		<button class='btn btn-outline-light' type='submit'>Buscar</button>
	</form>
</nav>




<br class='clear-both'/>