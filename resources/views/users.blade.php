<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>CRUD</title>

        <!-- Bootstrap 4 Grid System -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            table td, table th{
                text-align: center;
            }
            body{
                overflow-x: hidden;
            }
            .row{
                margin-right: 0 !important;
                margin-left: 0 !important;
            }
        </style>
    </head>
    <body>

        <div class="row">

            <div class="d-flex justify-content-center col-md-8">
                
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Data de Nascimento</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>


            </div>

            <div class="d-flex justify-content-center col-md-4 align-items-center"
            style="height: 100vh">

                <form method="post" 
                          action="" 
                          enctype="multipart/form-data"
                >


                  <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Nome:">
                  </div>

                  <div class="form-group">
                    <input type="email" name="email" class="form-control"placeholder="E-mail:">
                  </div>

                  <div class="form-group">
                    <input type="text" class="form-control" name="birth" placeholder="Data de Nascimento:">
                  </div>

                  <button type="submit" class="btn btn-primary">Criar Usuário</button>

                </form>

            </div>

        </div>

    </body>


</html>
