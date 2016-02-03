@extends('masters._adminMaster')
@section('content')
<div class="row container">
	<table class="striped">
        <thead>
          <tr>
              <th data-field="id">ID</th>
              <th data-field="Nombre">Nombre</th>
              <th data-field="accion"></th>
          </tr>
        </thead>

        <tbody>
          @foreach($categorias as $categoria)
          <tr>
            <td>{{$categoria->id}}</td>
            <td>{{$categoria->nombre}}</td>
            <td>
                    <div class="fixed-action-btn click-to-toggle horizontal">
                        <a class="btn-floating btn-small red">
                          <i class="small material-icons action-btn">add</i>
                        </a>
                        <ul>
                          <li><a href="{{route('categoria.editar', ['id'=>$categoria->id])}}" class="btn-floating green"><i class="material-icons">edit_mode</i></a></li>
                          <li><a href="{{route('categoria.eliminar', ['id'=>$categoria->id])}}" class="btn-floating red darken-1"><i class="material-icons">delete</i></a></li>
                        </ul>
                    </div>
            </td>
          </tr>
          @endforeach          
        </tbody>
      </table>
</div>
@endsection