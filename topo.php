<nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
    <div class="container">
      <a class="navbar-brand" href="?pg=menu">WEB MOTOS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
    <li class="nav-item active">
      <a class="nav-link" href="?pg=menu">Home
      <span class="sr-only">(current)</span>
  </a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="?pg=login">Login</a>
      </li>
      <li class="nav-item">
    <a class="nav-link" href="?pg=cadastro">Cadastre-se</a>
      </li>
          <li class="nav-item">
      <a class="nav-link" href="?pg=contatos">Contatos</a>
      </li>
      <?php
          $sql = mysqli_query($conexao,"SELECT nome,link FROM paginas ORDER BY id");
          while($tabela = mysqli_fetch_array($sql)){
        echo "<li><a href=?pg=$tabela[link]>$tabela[nome]</a></li>";
      }
        ?>
    </ul>
  </div>
  </div>
  </nav>