<!doctype html>
<html lang="en">
  <head>
    <title>Cadastro de Matricula</title>
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
                    <a href='/home' class='btn btn-warning'>voltar</a>
                </div>
                <div class="col">
                    Cadastro de Matricula
                </div>
            </div>
        </div>
        <form id="criar" mehtod="post" action="http://127.0.0.1:8000/api/aluno">
          <input class="form-control form-control-lg" type="number" placeholder="Código do aluno" name="id_aluno">
          <input class="form-control form-control-lg" type="text" placeholder="Curso" name="curso">
          <input class="form-control form-control-lg" type="number" placeholder="Suspenço" name="status" disabled>
          <input class="form-control form-control-lg" type="text" placeholder="Motivo" name="motivo" disabled>
          <input type="submit" id="enviar" value="Criar">
        </form>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
          $("#enviar").click(function(event){
            event.preventDefault();
            $.ajax({
              url : "http://127.0.0.1:8000/api/matricula",
              method : "POST",
              dataType : 'json',
              data : $("#criar").serialize(),
              success: function(){
                $("#criar").submit();
              }
            });
          });
        </script>
  </body>
</html>