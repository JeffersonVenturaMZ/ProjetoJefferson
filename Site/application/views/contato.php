<div class="container">
	<div class="row">
      <div class="col-md-12">
        <div class="well well-sm">
            <script>
                function alerta(){
                    alert('Enviado com sucesso!');
                }
            </script>
          <form class="form-horizontal" action="<?php echo base_url('contato/adicionar')?>" method="post">
          <fieldset>
            <legend class="text-center" style="font-family: 'Anton', sans-serif;">Fale Conosco</legend>
    
          
            <div class="form-group">
              <label class="col-md-6 control-label" for="name">Nome</label>
              <div class="col-md-5">
                <input id="name" name="name" type="text" placeholder="Insira seu nome" class="form-control">
              </div>
            </div>
    

            <div class="form-group">
              <label class="col-md-3 control-label" for="email">E-mail</label>
              <div class="col-md-7">
                <input id="email" name="email" type="email" placeholder="Insira seu e-mail" class="form-control">
              </div>
            </div>
    

            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Mensagem</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" placeholder="Insira sua mensagem" rows="5"></textarea>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-success btn-lg" onclick="alerta()">Enviar</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	</div>
</div>