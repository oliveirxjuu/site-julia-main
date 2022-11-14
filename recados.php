<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
  <script src="main.js"></script>
  <title>Julia Oliveira</title>
</head>

<body>
  <main>
    <div class="container mt-2">

      <nav class="mb-4">
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link active" href="index.html">Pagina Inicial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="galeria.html">Galeria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="recados.html">Comentários</a>
          </li>
        </ul>
      </nav>
      <section id="lista-recados">
        <div class="container">
          <div class="text-center">
            <h1>Meus recados</h1>
            <p><a href="recados.html">Clique aqui</a> para deixar o seu recado</p><br>
          </div>


          <?php
          $sql = "SELECT * FROM recados";
          $conexao = new PDO('mysql:host=127.0.0.1;dbname=site-julia', 'root', '');
          $resultado = $conexao->query($sql);
          $lista = $resultado->fetchAll();
          ?>


          <div class="d-">

            <div class="d-flex flex-wrap justify-content-center" >
              <?php foreach ($lista as $linha) : ?>
                <div class="card border-dark mb-3 m-2" style="width: 18rem;">
                  <div class="card-body text-dark">
                    <h5 class="card-title text-primary"><?php echo $linha['nome'] ?> </h5>
                    <p class="card-text"><?php echo $linha['recado'] ?></p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted"><?php echo $linha['turma'] ?></small>
                  </div>
                </div>
              <?php endforeach ?>
            </div>




          </div>
      </section>
    </div>
  </main>
</body>

</html>