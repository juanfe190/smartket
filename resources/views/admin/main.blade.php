@extends('masters._adminMaster')
@section('content')
<div class="row container">
 <table class="striped">
        <thead>
          <tr>
              <th data-field="id">Nombre</th>
              <th data-field="name">Stock</th>
              <th data-field="price">Marca</th>
              <th data-field="price">Precio</th>
              <th data-field="price"></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Pasta dental</td>
            <td>20</td>
            <td>Colgate</td>
            <td>1500</td>
            <td>
                    <div class="fixed-action-btn click-to-toggle horizontal">
                        <a class="btn-floating btn-small red">
                          <i class="small material-icons">mode_edit</i>
                        </a>
                        <ul>
                          <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
                          <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
                          <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
                          <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
                        </ul>
                    </div>
            </td>
          </tr>
           <tr>
            <td>Pasta dental</td>
            <td>20</td>
            <td>Colgate</td>
            <td>1500</td>
          </tr>
          <tr>
            <td>Pasta dental</td>
            <td>20</td>
            <td>Colgate</td>
            <td>1500</td>
          </tr>
          <tr>
            <td>Pasta dental</td>
            <td>20</td>
            <td>Colgate</td>
            <td>1500</td>
          </tr>
        </tbody>
      </table>
</div>
@endsection