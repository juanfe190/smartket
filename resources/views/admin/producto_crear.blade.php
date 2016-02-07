@extends('masters._adminMaster')
@section('content')
<div class="row container">
	<form action="" method="POST">
		<label>Codigo de barras::</label>
		<input type="text" name="codigo_barras" placeholder="Codigo de barras">

		<label>Nombre:</label>
		<input type="text" name="nombre" placeholder="Nombre">

		<label>Descripci&oacuten:</label>
		<textarea class="materialize-textarea" name="descripcion"></textarea>

		<label>Stock:</label>
		<input type="numbre" name="stock">

		<label>Precio:</label>
		<input type = "text" name="precio" placeholder="Precio">

		<input type="checkbox" class="filled-in" id="filled-in-box" />
        <label for="filled-in-box">Pesable:</label>

         <div class="file-field input-field">
	      <div class="btn">
	        <span>Imagen del producto:</span>
	        <input type="file" name="imagen_producto">
	      </div>
	      <div class="file-path-wrapper">
	        <input class="file-path validate" type="text">
	      </div>
	    </div>

	    <div class="file-field input-field">
	      <div class="btn">
	        <span>Tabla nutricional:</span>
	        <input type="file" name="tabla_nutricional">
	      </div>
	      <div class="file-path-wrapper">
	        <input class="file-path validate" type="text">
	      </div>
	    </div>

		<label>Categor&iacutea:</label>
		<select class="browser-default" name="categoria_id">
		    <option value="" disabled selected>Escoger categor&iacutea</option>
		    @foreach($categorias as $categoria)
		    	<option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
		    @endforeach
	    </select>

	    <label>Subcategor&iacutea:</label>
		<select class="browser-default" name="categoria_id">
		    <option value="" disabled selected>Escoger subcategor&iacutea</option>
	    </select>

		<input type = "submit" class="waves-effect waves-light btn" value="Crear">
	</form>
</div>
@endsection