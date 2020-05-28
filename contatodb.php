<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="panel">
        <div class="panel-heading">
          <h3>Obrigado pelo contato.</h3> 
        </div>
        <div class="col-md-6 col-serv">
		<?php
			
		$nome = isset($_POST["nome"])? $_POST["nome"]:null;
		$email = isset($_POST["email"])? $_POST["email"]:null;
		$telefone = isset($_POST["telefone"])? $_POST["telefone"]:null;
		$assunto = isset($_POST["assunto"])? $_POST["assunto"]:null;
		$mensagem = isset($_POST["mensagem"])? $_POST["mensagem"]:null;

			$dados = "INSERT INTO faleconosco (nome, email,telefone,assunto,mensagem) VALUES ('$nome','$email','$telefone','$assunto','$mensagem')";
			
			$query = mysqli_query($conexao,$dados);

			if($query){
				echo "<h4>Dados enviados com sucessso!</h4></center>";
		    }else{
		    	echo "<center><h4>Não foi possível enviar o e-mail. <a href=index.php?pg=faleconosco>Tente novamente.</a></h4></center>";
		    }
		?>
		</div>
	  </div>
	</div>
</div>
</div>