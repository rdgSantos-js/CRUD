<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Document</title>

	<!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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
        @media (min-width: 768px) { 
            #users-list{
                border-right: 1px solid #000;
            }
            form{
                width: 70%;
            }
        }
    </style>
</head>
<body>
	<div class="row">
        <div class="col-md-8" id="users-list">
            <h2 class="d-flex justify-content-center py-4">Lista de Usuários</h2>
            @yield('users-list')
        </div> 
        <div class="d-flex col-md-4 flex-column justify-content-center align-items-center" style="height: 100vh">
            <h4 class="d-flex justify-content-center py-4">Cadastrar Usuário</h4>
            @yield('create-user')
        </div>   
    </div>

    <script src="{{ url("assets/js/script.js") }}"></script>
</body>
</html>