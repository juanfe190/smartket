@extends('masters._adminMaster')
@section('content')
<div class="row container">
	<form action="{{route('categoria.actualizar', ['id'=>$id])}}" method="POST">
	<label>Nombre:</label>
	<input type="text" name="nombre" placeholder="Categoria" value="{{$nombre}}">
	<input type = "submit" class="waves-effect waves-light btn" value="Actualizar">
	</form>
</div>
@endsection