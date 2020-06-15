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
        form{
            width: 70%;
        }
    </style>
</head>
<body>

	<h1 class="d-flex justify-content-center mt-4">Editar Usuário</h1>
	<div class="d-flex justify-content-center">
        <form method="post" action="{{ url("users/$user->id") }}">
		@csrf
		{{ method_field('PUT') }}
		  <div class="form-group">
		    <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="Nome:" required>
		  </div>

		  <div class="form-group">
		    <input type="email" name="email" value="{{$user->email}}" class="form-control"placeholder="E-mail:" required>
		  </div>

		  <div class="form-group d-flex justify-content-center">
		    <div>
		    	@if($user->admin)
		    	<input type="checkbox" class="form-check-input" name="admin" value="Y" checked>
		    	<label class="form-check-label">Administrador</label>
		    	@else
		    	<input type="checkbox" class="form-check-input" name="admin" value="Y">
		    	<label class="form-check-label">Administrador</label>
		    	@endif
		    </div>
		  </div>

		  <button type="submit" class="btn btn-primary">Atualizar Usuário</button>

		</form> 
    </div>
</body>
</html>