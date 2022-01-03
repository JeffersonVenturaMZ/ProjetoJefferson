<div class='col-9'>
    <h2 style="font-family: 'Anton', sans-serif;">Quem Somos</h2>
 <?php foreach ($sobrenos as $nossobre):?>
       <div id="sobrenos">
        
        <h3 style=" font-family: 'Anton', sans-serif; font-size:21px;"><?php echo $nossobre->titulo;?></h3>
            <div class = row>
                <div class = col-8>
                    <p style="font-family: 'Maven Pro', sans-serif;"><?php echo $nossobre->texto;?></p>
                </div>
            </div>            
        </div>
    <?php endforeach;?>
</div>