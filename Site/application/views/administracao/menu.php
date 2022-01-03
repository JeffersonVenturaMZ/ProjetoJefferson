<nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
  <a class="navbar-brand" href="#">ADM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
	    <a class="nav-item nav-link active" href="<?php echo base_url('administracao/artigos'); ?>">Artigos <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="<?php echo base_url('administracao/mensagens'); ?>">Mensagens <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="<?php echo base_url('administracao/sobrenos'); ?>">Sobre Nós <span class="sr-only">(current)</span></a>
      <a id="a4" class="nav-item nav-link active" href="<?php echo base_url('administracao/usuario'); ?>">Administradores <span class="sr-only">(current)</span></a>      
    </div>
  </div>
  <form class='form-inline' action="<?php echo base_url('artigos/buscar'); ?>" method="post">
  <?php
		echo "<font color='#FFFFFF'> Seja bem vindo&nbsp</font><font color='#007BFF'>".$this->session->userdata('usuario')."</font>";
		echo "<font color='#FFFFFF'>&nbsp|</font>";
		echo "<a class='nav-item nav-link active' href='". base_url('administracao/home/logout') . "'>Sair</a>";

  ?>

	</form>
</nav>




<br class='clear-both'/>