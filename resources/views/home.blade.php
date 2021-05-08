<!doctype html>
<html lang="en">
  <head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        <div class="container">
            <div class="row align-items-start">
                <div class="col">
                </div>
                <div class="col">
                    Gestão de Alunos e Matriculas
                </div>
                <div class="col">
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col">
                Alunos
                </div>
                <div class="col">
                </div>
                <div class="col">
                Matriculas
                </div>
            </div>
            <div class="row align-items-end">
                <div class="col">
                    <a href="/aluno_store" class="btn btn-secondary">Criar</a>
                </div>
                <div class="col">
                </div>
                <div class="col">
                    <a href="/matricula_store" class="btn btn-secondary">Criar</a>
                </div>
            </div>
            <div class="row align-items-end">
                <div class="col">
                    <a href="/aluno_index" class="btn btn-secondary">Listar</a>
                </div>
                <div class="col">
                </div>
                <div class="col">
                    <a href="/matricula_index" class="btn btn-secondary">Listar</a>
                </div>
            </div>
            <div class="row align-items-end">
                <div class="col">
                <form mehtod="get" action="/aluno_show">
                    <input class="form-control form-control-lg" type="text" placeholder="Código do Aluno" name="codigo">
                    <input type="submit" value="Buscar">
                </form>
                </div>
                <div class="col">                
                </div>
                <div class="col">
                </div>
                <div class="col">
                </div>
                <div class="col">
                </div>
            </div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>