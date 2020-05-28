<html lang="en">
<head>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	</head>


<div class="container">
  <h3>FALE CONOSCO</h3> 
  <form  id="contactForm" action="?pg=contatodb" method="post">
     
	 <label>Nome:</label> <input type="text" class="form-control" name="nome" required="" data-validation-required-message="Please enter your name.">
	 E-mail: <input type="email" class="form-control" name="email"/>
	 Telefone: <input type="tel" class="form-control" name="telefone"/>
	 Assunto: <input type="text" class="form-control" name="assunto"/>
	 Mensagem:<textarea class="form-control" name="mensagem" rows="5" cols="10"></textarea><br>
	 <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>

<div >
        <?php
            include_once("topo2.php");
      ?>
  </div>
</html>