<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel | CRUD | LISTAGEM</title>
    <!-- Arquivos  CSS  -->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/CSS/main.css">

    <!-- Icons  -->
    <link rel="stylesheet" href="assets/bootstrap-icons/bootstrap-icons.css">
</head>
<body>

    <main>
        <section>
          <div class="container-fluid">
              <div class="row">
                  <div class="container">
                      <h1>Biblioteca Online</h1>
                  </div>

                  <div class="container">
                      <div>
                          <a href="{{'livros/cadastro'}}">Adicionar Livros</a>
                      </div>
                  </div>
              </div>
            </div>
        </section>

        <section>
            <div class="container">
              <table class="table">
                  <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">NOME LIVROS</th>
                        <th scope="col">TITULO</th>
                        <th scope="col">AUTOR</th>
                      </tr>
                  </thead>

                  <tbody>
                    @foreach($livros as $livro)
                      <tr>
                          <th scope="row">1</th>
                          <td>{{$livro->id}}</td>
                          <td>{{$livro->nomelivro}}</td>
                          <td>{{$livro->titulolivro}}</td>
                      </tr>
                    @endforeach
                  </tbody>
              </table>
            </div>
        </section>
    </main> 

</body>
</html>