<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel | CRUD | EDITAR</title>
    <!-- Arquivos  CSS  -->
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/CSS/main.css">
</head>
<body>
    
   <main>
        <section>
            <div class="container p-0">
                <div class="mt-4">
                     <a href="{{'/'}}" class="text-warning btn-danger p-2 text-white rounded-3">Inicial</a>
                </div>
            </div>

            <div class="container mt-4">
                <div class="row bg-warning p-5 rounded-3">
                        <div class="col-md-6">
                            <h2 class="text-danger">CRUD LARAVEL</h2>
                            <h3 class="text-white">Editar Livros</h3>
                            <p class="text-white">Actualize os campos necessários!</p>
                        </div>

                        <div class="col-md-6">
                            <form action="" method="post">
                                @csrf
                                @method('post')

                                <div class="container">
                                    <div class="mb-2 d-flex flex-column gap-3">
                                        <input type="text" name="nomelivro" class="form-control" id="exampleFormControlInput1" value="{{$livro->nomelivro}}">
                                        <input type="number" name="paginaslivro" class="form-control" id="exampleFormControlInput1" value="{{$livro->paginaslivro}}">
                                        <input type="text" name="autorlivro" class="form-control" id="exampleFormControlInput1" value="{{$livro->autorlivro}}">

                                        <select class="form-select" aria-label="Default select example" name="categorialivro">
                                            <option selected>Categoria do Livro</option>
                                            <option value="Auto Ajuda">Auto Ajuda</option>
                                            <option value="Desenvolvimento Pessoal">Desenvolvimento Pessoal</option>
                                            <option value="Romance">Romance</option>
                                        </select>
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