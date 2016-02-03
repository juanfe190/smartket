@extends('masters._adminMaster')
@section('content')
<div class="row container">
	<form action="" method="POST">
		<label>Categor&iacutea:</label>

		<select class="browser-default" name="categoria_id">
		    <option value="" disabled selected>Escoger categor&iacutea</option>
		    @foreach($categorias as $categoria)
		    	<option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
		    @endforeach
	    </select>

		<label>Nombre:</label>
		<input type="text" name="nombre" placeholder="Subcategoria">
		<input type = "submit" class="waves-effect waves-light btn" value="Crear">
	</form>
</div>
@endsection