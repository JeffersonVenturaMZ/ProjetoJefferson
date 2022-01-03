<div class="bd-example" style='margin-top:-1.5em;'>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">

      <?php $cont = 0;

      foreach ($chamadas as $chamada) : ?>
        <div class="carousel-item <?php
                                  if ($cont == 0) {
                                    echo "active";
                                    $cont = 6;
                                  }
                                  ?>">
          <?php echo "<img src='" . base_url('assets/imgs/artigos/' . $chamada->foto) . "' width='100%' class='d-block w-100' alt='...'>" ?>
          <div class="carousel-caption d-none d-md-block">
            <a href="<?php echo base_url('artigos/ver/' . $chamada->slug_artigo) ?>" style="text-decoration: none; color: white;">
              <h5><?php echo $chamada->nome ?></h5>
              <?php echo word_limiter($chamada->texto, 20); ?>
            </a>
          </div>
        </div>

      <?php endforeach; ?>

      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>
  </div>
</div>