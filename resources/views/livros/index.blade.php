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
          <div class="container mt-2">
              <div class="bg-warning p-3 d-flex flex-column gap-2 rounded-3">
                  <div>
                      <h2 class="text-danger">CRUD LARAVEL</h2>
                      <h3 class="text-white">Biblioteca Online</h3>
                  </div>
    
                    <div>
                        <a href="{{'livros/cadastro'}}" class="text-white fw-light bg-danger rounded-3 p-2">Adicionar Livros</a>
                    </div>
              </div>
            </div>
        </section>

        <section>
            <div class="container p-2">
              @if(session()->has('sucesso'))
                  <div>
                      {{session('sucesso')}}
                  </div>
              @endif
            </div>
        </section>

        <section>
            <div class="container py-4">
              <table class="table">
                  <thead>
                      <tr>
                        <th scope="col" class="text-danger">#</th>
                        <th scope="col" class="text-danger">NOME LIVROS</th>
                        <th scope="col" class="text-danger">PAGINAS LIVRO</th>
                        <th scope="col" class="text-danger">AUTOR</th>
                        <th scope="col" class="text-danger">CATEGORIA</th>
                        <th scope="col" class="text-danger">OPC</th>
                      </tr>
                  </thead>

                  <tbody>
                    @foreach($livros as $livro)
                      <tr>
                          <td>{{$livro->id}}</td>
                          <td>{{$livro->nomelivro}}</td>
                          <td>{{$livro->paginaslivro}}</td>
                          <td>{{$livro->autorlivro}}</td>
                          <td>{{$livro->categorialivro}}</td>
                          <td><a href="{{route('livros.editar', ['livros' => $livro])}}">Editar</a></td>
                          <td><a href="{{route('livros.deletar', ['livros' => $livro])}}">Deletar</a></td>
                      </tr>
                    @endforeach
                  </tbody>
              </table>
            </div>
        </section>
    </main> 

</body>
</html> 