@extends('templates.template')

@section('users-list')
	<div class="container">
		<p id="console" style="display: none;">{{ $users }}</p>
		@csrf
		<table class="table table-hover">
	        <thead class="thead-dark">
	            <tr>
	                <th>#</th>
	                <th>Nome</th>
	                <th>ADM?</th>
	                <th>E-mail</th>
	                <th>Criado em</th>
	                <th></th>
	                <th></th>
	            </tr>
	        </thead>
	        <tbody>
			@foreach($users as $user)
	        	<tr>
	        		<td>{{$user->id}}</td>
	        		<td>{{$user->name}}</td>
	        		<td>{{$user->admin}}</td>
	        		<td>{{$user->email}}</td>
	        		<td>{{$user->created_at}}</td>
	        		<td>
	        			<a href="{{ url("users/$user->id/edit") }}">	<button class="btn btn-warning">Editar Usuário</button>
	        			</a>
	        		</td>
	        		<td>
	        			<a class="js-del" href="{{ url("users/$user->id") }}">
	        				<button class="btn btn-danger">Excluir Usuário</button>
	        			</a>
	        		</td>
	        	</tr>
			@endforeach
	        </tbody>
	    </table>
	</div>
@endsection

@section('create-user')
<form method="post" action="{{url('users')}}">
@csrf
{{ method_field('POST') }}
  <div class="form-group">
    <input type="text" name="name" class="form-control" placeholder="Nome:" required>
  </div>

  <div class="form-group">
    <input type="email" name="email" class="form-control"placeholder="E-mail:" required>
  </div>

  <div class="form-group d-flex justify-content-center">
    <div>
    	<input type="checkbox" class="form-check-input" name="admin" value="Y">
    	<label class="form-check-label">Administrador</label>
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Criar Usuário</button>

</form>
@endsection