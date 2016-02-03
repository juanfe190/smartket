<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
      <form method="POST" action="1" enctype="multipart/form-data" >
        <input type="text" placeholder="nombre" name="nombre" />
        <input type="text" placeholder="codigo_barras" name="codigo_barras" />
        <input type="text" placeholder="descripcion" name="descripcion" />
        <input type="text" placeholder="stock" name="stock" />
        <input type="text" placeholder="precio" name="precio" />
        <input type="text" placeholder="pesable" name="pesable" />
        <input type="text" placeholder="categoria_id" name="categoria_id" />
        <input type="text" placeholder="subcategoria_id" name="subcategoria_id" /><br>
        <input type="file" name="imagen_producto"><br>
        <input type="file" name="tabla_nutricional"><br>
        <input type="submit" value="Crear">
      </form>
    </body>
</html>
