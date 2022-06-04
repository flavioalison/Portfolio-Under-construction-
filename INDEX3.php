<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Flavio Alison</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
  </head>

        <body>

    <div class="container">

      <div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Acesso negado!</strong> Usuário ou senha invalidos.
      </div>

      <form class="form-inline" action="valida_login.php" method="post">
        <div class="form-group">
          <label for="email">Email address:</label>
          <input name="email" type="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="senha">Password:</label>
          <input name="senha" type="password" class="form-control">
        </div>
        <button type="submit" class="btn-default bg-ble"> Submit </button>
      </form>



      <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-light active" href="#">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link text-light dropdown-toggle"  data-toggle="dropdown" href="#">Notícias</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Ontem</a>
                <a class="dropdown-item" href="#">Hoje</a>
                <a class="dropdown-item" href="#">Último Minuto</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="Autor.php">+ Sobre mim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="fotos.php">FOTOS</a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="row">
        <div class="col-md-3 col-sm-4  bg-light text-dark">
           <h2>Últimas pesquisas</h2>
              <img class="img-fluid" src="https://source.unsplash.com/featured/?{Fractal},{Tecnologia}" alt="Fractal" > 
           <p>
              Minhas ultimas pesquisas tem sido na geometria de fractal, em busca de designs fratais para construção de elementos tecnologicos mais aperfeiçoados e também na elaboração de modelos na area de ensino e aprendizagem de física que envolvam conceitos de circuitos elétricos. Basicamente os fractais podem ser correlacionados aos sistemas elétricos de maneira a interpretar sistemas complexos de eletricidade e favorecer o aprendizado e a construção de projetos que envolvam esses tipos de sistemas. Além disso, os fractais também encontram aplicabilidade em varias areas do conhecimento e varios asssuntos podem estar ligados e fazer correlações com essa temática.
              <a href="">Leia mais ... </a>
            </p>
        </div>
        <div class="col-md-7 col-sm-8">
          <h2>Notícias Principais <span class="badge badge-pill badge-secondary">Novidades!!</span></h2>
           <article class="noticia">
            <h2>Assinatura do termo de bolsista da FAEPI</h2>
            <hr>
            <h5>
            Em 13/11/2020
            </h5>            
            <p>
              Agora bolsista da FAEPI<br>
              <img src="FAEPI3.jpg" width="100%">
            </p>
          </article> <!-- /noticia -->
          <article class="noticia">
            <h2>Fim do isolamento</h2>
            <hr>
            <h5>Em 06/06/2020</h5>            
            <p>
              De volta a igreja<br>
              <img src="fimdoisolamento.jpg" width="100%">
            </p>
          </article> <!-- /noticia -->
          <article class="noticia">
            <h2>Viagem a espanha</h2>
            <hr>
            <h5>Em 06/09/2019</h5>            
            <p>
              Visita a torre de Hércules<br>
              <img src="hercules.jpg" width="100%">
            </p>
          </article> <!-- /noticia -->
        </div>
        <div class="col-md-2 bg-light text-muted" >
            <div class="noticia">
            <h2>Rapidinha</h2>
            <hr>
            <p>
              Ultima semana antes da mundança para a casa nova, talvez eu não consiga assistir a aula de sabado do curso de Desenvolvimento WEB, pq não sei se os caras da internet vão conseguir instalar antes o roteador
              <a href="">Leia mais ... </a>
            </p>
          </div> <!-- /noticia -->
          <div class="noticia">
            <h2>Rapidinhas</h2>
            <hr>
            <p>
              Tentando terminar essa atividade pra poder entregar ao professor do curso de Desenvolvimento WEB... Ufa quase acabando rsrs
              <a href="">Leia mais ... </a>
            </p>
          </div> <!-- /noticia -->
          <div class="noticia">
            <h2>Rapidinhas</h2>
            <hr>
            <p>
              Prova de calculo realizada com sucesso! O assunto era facil, porem com calculos trabalhosos e demorados, faltando um 4 minutos para terminar a prova eu a entreguei mesmo sabendo que faltava fazer uma questão. mas muito provavelmente não iria conseguir fazer ela a tempo. Acesse "leia mais" e veja a questão final, tente fazer. Você acha que eu deveria ter tentado fazê-la? Deixe seu comentário.
              <a href="">Leia mais ... </a>
            </p>
          </div> <!-- /noticia -->
          <div class="noticia">
            <h2>Rapidinhas</h2>
            <hr>
            <p>
              Terminando o mês de Outubro. Trabalhos entregues e tudo atualizado. Seguimos para o penultimo mês do ano e espero conseguir manter tudo atualizado até dezembro, não quero ter que trabalhar no natal (T_T)
              <a href="">Leia mais ... </a>
            </p>
          </div> <!-- /noticia -->
          <div class="noticia">
            <h2>Rapidinhas</h2>
            <hr>
            <p>
              Chateado por não ter recebido presente de dia das crianças. É chato ser adulto.
              <a href="">Leia mais ... </a>
            </p>
          </div> <!-- /noticia -->
        </div>
      </div>
    </div>

  </body>
</html>