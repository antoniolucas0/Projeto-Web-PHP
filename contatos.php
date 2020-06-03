<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Contatos</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="css/modern-business.css" rel="stylesheet">

</head>
  <div class="container">
         <font color="white">
    <h1 class="mt-4 mb-3">Contatos
      <small>WEB MOTOS</small>
    </font>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="?pg=menu">Home</a>
      </li>
      <li class="breadcrumb-item active">Contato</li>
    </ol>

    <div class="row">
      <div class="col-lg-8 mb-4">
        <!-- Google Maps -->
        <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.055872489063!2d-34.86755155781894!3d-7.119523920218906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ace7fedc814459%3A0x4cc77e292abcd713!2sAv.%20Pres.%20Epit%C3%A1cio%20Pessoa%2C%20557%20-%20Lot.%20Eugenio%20Neiva%2C%20Jo%C3%A3o%20Pessoa%20-%20PB%2C%2058308-260!5e0!3m2!1spt-BR!2sbr!4v1591064676429!5m2!1spt-BR!2sbr"></iframe>
      </div>
      <!-- Contatos -->
      <div class="col-lg-4 mb-4">
        <font color="orange">
        <h3>Informações:</h3>
        <p>
         <font face="Georgia">
          <strong>Endereço:</strong> Av. Pres. Epitácio Pessoa, 557
          <br>Bairro dos Estados, João Pessoa - PB
          <br>
        </p>
        <p>
          <strong>Fone:</strong>(83) 3456-7890
        </p>
        <p>
          <strong>Email:</strong>
          <a href="mailto:webmotos@gmail.com">webmotos@gmail.com
          </a>
        </p>
        <p>
          <strong>Horário Funcionamento:</strong> Segunda - Sexta: 8:00 até 18:00
        </font>
      </font>
        </p>
      </div>
    </div>
    <style>
body {
 background-image: url("imagens/imagemfundo3.jpg");
  background-repeat: no-repeat;
  background-attachment:scroll;
  background-size: auto;
  
}
</style>
<!-- Fale Conosco -->
<font color="white">
    <div class="row">
      <div class="col-lg-8 mb-4">
        <h3>Fale Conosco</h3>
    <form  id="contactForm" action="?pg=contatodb" method="post">
          <div class="control-group form-group">
            <div class="controls">
              <label>Nome:</label>
              <input type="text" class="form-control" name="nome" required="" data-validation-required-message="Please enter your name.">
              <p class="help-block"></p>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Telefone:</label>
              <input type="tel" class="form-control" name="telefone"/>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Email:</label>
              <input type="email" class="form-control" name="email"/>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Assunto:</label>
            <input type="text" class="form-control" name="assunto"/>
            </div>
          </div>
          <div class="control-group form-group">
            <div class="controls">
              <label>Messagem:</label>
              <textarea class="form-control" name="mensagem" rows="5" cols="10" style="resize:none"></textarea><br>
            </div>
          </div>
        </font>
          <div id="success"></div>
          <button type="submit" class="btn btn-outline-success">Enviar</button>
        </form>
      </div>

    </div>
   

  </div>
 

  <!-- Bootstrap JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

</body>

</html>