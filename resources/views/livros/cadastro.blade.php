<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel | CRUD | CADASTRO</title>
    <!-- Arquivos  CSS  -->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.css">
</head>
<body>
    
   <main>
        <section>
            <div class="container p-0">
                <div class="mt-4">
                     <a href="{{'/livros'}}" class="text-decoration-none text-warning btn-warning p-2 text-white rounded-3">Listagem dos Livros</a>
                </div>
            </div>

            <div class="container mt-4">
                <div class="row bg-warning p-5 rounded-3">
                        <div class="col-md-6">
                            <h2 class="text-danger">CRUD LARAVEL</h2>
                            <h3 class="text-white">Livraria Biblioteca Online</h3>
                            <p class="text-white">Cadastre um livro preenchendo os campos que se seguem!</p>
                        </div>

                        <div class="col-md-6">
                            <form action="{{route('livros.store')}}" method="post">
                                @csrf
                                @method('post')

                                <div class="container">
                                    <div class="mb-2 d-flex flex-column gap-3">
                                        <input type="text" name="nomelivro" class="form-control" id="exampleFormControlInput1" placeholder="Nome Livro">
                                        <input type="text" name="titulolivro" class="form-control" id="exampleFormControlInput1" placeholder="Titulo">
                                        <input type="text" name="autorlivro" class="form-control" id="exampleFormControlInput1" placeholder="Autor">
                                    </div>
                                    <div class="mt-4">
                                        <input type="submit" value="Adicionar" class="form-control p-2 bg-success text-white">
                                    </div>
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </section>
    </main>

</body>
</html>