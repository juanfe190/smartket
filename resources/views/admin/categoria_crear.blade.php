@extends('masters._adminMaster')
@section('content')
<div class="row container">
	<form action="" method="POST">
	<label>Nombre:</label>
	<input type="text" name="nombre" placeholder="Categoria">
	<input type = "submit" class="waves-effect waves-light btn" value="Crear">
	</form>
</div>
@endsection