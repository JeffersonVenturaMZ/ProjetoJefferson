    <?php foreach ($artigos as $art):?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="artigo" style="text-align: justify;">
                    <h3 style="text-align:center; font-family: 'Anton', sans-serif;"><?php echo $art->nome;?></h3>
                    <?php echo "<img src='" . base_url('assets/imgs/artigos/' . $art->foto) . "' style='margin:0 auto;width:350px; height:200px;display:block;'>"; ?>
                    <p style="font-family: 'Maven Pro', sans-serif;"><?php echo nl2br($art->texto); ?></p>
                    <a href="javascript:history.go(-1)">Voltar</a> | <a href="javascript:print()">Imprimir</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach;?>