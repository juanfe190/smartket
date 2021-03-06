@extends('masters._adminMaster')
@section('content')
<div class="row container">
	<table class="striped">
        <thead>
          <tr>
              <th data-field="id">ID</th>
              <th data-field="categoria">Categor&iacutea</th>
              <th data-field="nombre">Nombre</th>
              <th data-field="accion"></th>
          </tr>
        </thead>

        <tbody>
          @foreach($elements as $element)
          <tr>
            <td>{{$element->id}}</td>
            <td>{{$element->categoria->nombre}}</td>
            <td>{{$element->nombre}}</td>
            <td>
                    <div class="fixed-action-btn click-to-toggle horizontal">
                        <a class="btn-floating btn-small red">
                          <i class="small material-icons action-btn">add</i>
                        </a>
                        <ul>
                          <li><a href="{{route('subcategoria.editar', ['id'=>$element->id])}}" class="btn-floating green"><i class="material-icons">edit_mode</i></a></li>
                          <li><a href="{{route('subcategoria.eliminar', ['id'=>$element->id])}}" class="btn-floating red darken-1"><i class="material-icons">delete</i></a></li>
                        </ul>
                    </div>
            </td>
          </tr>
          @endforeach          
        </tbody>
      </table>
</div>
@endsection