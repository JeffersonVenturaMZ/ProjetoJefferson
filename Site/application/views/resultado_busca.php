<div class='col-9'>
	<h2>Artigos</h2>
	<p class='num_resultados'>Sua busca por: <span class='blue'><?php echo $busca;?></span>, encontrou <?php echo count($artigos) ?> resultados.</p>
	<ul>
		<?php foreach($artigos as $artigo):?>
			<li>
				<a href="<?php echo base_url('artigos/ver/'.$artigo->slug_artigo);?>">
					<?php echo $artigo->nome;?>
				</a>
			</li>
		<?php endforeach;?>
	</ul>
</div>
</div>
</div>