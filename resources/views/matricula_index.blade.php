<!doctype html>
    <html lang="en">
    <head>
        <title>Lista de Matriculas</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div id="lista" class="container">
            <div class="row align-items-start">
                <div class="col">
                    <a href='/home' class='btn btn-warning'>voltar</a>
                </div>
                <div class="col">
                    Lista de Matriculas
                </div>
                <div class="col">
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col">
                    Código
                </div>
                <div class="col">
                    Código do Aluno
                </div>
                <div class="col">
                    Curso
                </div>
                <div class="col">
                    Suspenso
                </div>
                <div class="col">
                    Mostivo
                </div>
            </div>
        </div>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script>
            // var htmal = "";
            $(document).ready(function(){
                $.ajax({
                    url:"http://127.0.0.1:8000/api/matricula",
                    type: "GET",
                    dataType: "json",
                    success: function(resp){
                        console.log(resp);
                        
                        resp.forEach((matricula)=>{
                            console.log(matricula.id);
                            listar(matricula);
                        })
                    }
                });
            });
            
            var listar = (value) => {

                const html = `<div class="row align-items-end">
                    <div class="col"> ${value.id}</div>
                    <div class="col"> ${value.id_aluno} </div>
                    <div class="col"> ${value.curso} </div>
                    <div class="col"> ${value.status} </div>
                    <div class="col"> ${value.motivo} </div>
                    </div>`;

                $("#lista").append(html);
            }
        </script>
    </body>
</html>