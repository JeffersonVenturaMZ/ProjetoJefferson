<div class='col-9'>
    <h2 style="font-family: 'Anton', sans-serif;">Artigos sobre Basquete</h2>
    <?php foreach ($artigos as $art):?>
    <div class="container"> 
    <div id="artigo">
            <a href="<?php echo base_url('artigos/ver/'.$art->slug_artigo)?>" style="text-decoration: none; color: black;">
                <h3 style="font-family: 'Bebas Neue', cursive;" ><?php echo $art->nome;?></h3></a>
            <a id="a1" href="<?php echo base_url('artigos/ver/'.$art->slug_artigo)?>" style="text-decoration: none; color: #343a40;">
                <div class="row">
                    <div class="col-md-4">
                        <?php echo "<img id='img1' src='" . base_url('assets/imgs/artigos/' . $art->foto) . "' width='270px' ' height='200px'>"; ?>
                    </div>
                    <div class="col-md-8">
                        <p>
                            <?php echo word_limiter($art->texto, 20);?>
                        </p>
            </a>
                    </div>
                </div>
        <hr>
        </div>
        </div>
        <?php endforeach;?>
</div>

