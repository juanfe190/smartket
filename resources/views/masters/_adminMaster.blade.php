@extends('masters._master1')
@section('body')
<header>
	<div class="row bottom-0">
      <div class="col s12 header"></div>
    </div>
</header>

<div class="row wrapper bottom-0">
    <div class="col s2 nav">
		   <ul class="menu collapsible" data-collapsible="accordion">
                <li>
                    <a class="collapsible-header" href="#"><i class="material-icons">store_mall_directory</i>Mercader&iacutea</a>
                    <ul class="collapsible-body center">
                        <li><a href="#"><i class="material-icons">add</i>Insertar</a></li>
                        <li><a href="#"><i class="material-icons">search</i>Mostrar</a></li>
                    </ul>
                </li>
                 <li>
                    <a class="collapsible-header" href="#"><i class="material-icons">class</i>Categor&iacuteas</a>
                    <ul class="collapsible-body center">
                        <li><a href="{{route('categoria.crear')}}"><i class="material-icons">add</i>Crear</a></li>
                        <li><a href="{{route('categoria.mostrar')}}"><i class="material-icons">search</i>Mostrar</a></li>
                    </ul>
                </li>
                 <li>
                    <a class="collapsible-header" href="#"><i class="material-icons">tab</i>Subcategor&iacuteas</a>
                    <ul class="collapsible-body center">
                        <li><a href="{{route('subcategoria.crear')}}"><i class="material-icons">add</i>Crear</a></li>
                        <li><a href="{{route('subcategoria.mostrar')}}"><i class="material-icons">search</i>Mostrar</a></li>
                    </ul>
                </li>
                 <li>
                    <a class="collapsible-header" href="#"><i class="material-icons">local_shipping</i>Pedidos</a>
                </li>
            </ul>
    </div>

    <!-- CONTENIDO PRINCIPAL -->
    <div class="col s10 content">
        @yield('content')
    </div>
</div>   

@endsection