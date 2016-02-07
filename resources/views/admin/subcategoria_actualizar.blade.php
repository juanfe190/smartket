@extends('masters._adminMaster')
@section('content')
<div class="row container">
	<form action="{{route('subcategoria.actualizar', ['id'=>$id])}}" method="POST">
	<label>Nombre:</label>
	<input type="text" name="nombre" placeholder="Categoria" value="{{$nombre}}">
	<label>Categor&iacutea:</label>
	<select class="browser-default" name="categoria_id">
		    @foreach($categorias as $categoria)
		    	<option value="{{$categoria->id}}" @if($categoria->id==$id){{'selected'}}@endif>{{$categoria->nombre}}</option>
		    @endforeach
	    </select>
	<input type = "submit" class="waves-effect waves-light btn" value="Actualizar">
	</form>
</div>
@endsection