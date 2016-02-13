<?php

namespace App\Http\Middleware;

use Closure;
use App\Categoria;

class CheckCatSubcatMiddleware
{
    /**
     * Revisa que la categoria sea correcta y que
     * su subcategoria sea correcta
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $categoriaID = $request->categoria_id;
        $subcategoriaID = $request->subcategoria_id;
        
        $categoria = Categoria::find($categoriaID);
        
        if($categoria) 
            {$subcategoria = $categoria->subcategoria()->find($subcategoriaID);
            if($subcategoria) return $next($request);
        }
        
        return back()->withErrors(['toast'=>'Por favor seleccione un categor&iacutea y subcategor&iacutea v&aacutelida']);

    }
}
