<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos ['libros']= Libro::paginate(5);
        return view ('Libros.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Libros.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $campos = [
            'titulo' => 'required|string|max:100',
            'autor' => 'required|string|max:100',
            'anio_publicacion' => 'required|integer',
            'genero' => 'required|string|max:100',
        ];
        
        $mensaje = [
            'required' => 'El :attribute es requerido'
        ];
        
        $this->validate($request, $campos, $mensaje);


        

        $datosLibro = request()->except('_token');
        Libro::insert($datosLibro);
        return redirect ('libros')-> with('mensaje', 'Libro agregado Correctamente');


    }

    /**
     * Display the specified resource.
     */
    public function show(Libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $libros=Libro::findOrFail($id);
        return view ('Libros.edit', compact('libros'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $campos = [
            'titulo' => 'required|string|max:100',
            'autor' => 'required|string|max:100',
            'anio_publicacion' => 'required|integer',
            'genero' => 'required|string|max:100'
        ];
        
        $mensaje = [
            'required' => 'El :attribute es requerido'
        ];
        
        $this->validate($request, $campos, $mensaje);
        $datosLibros = request()->except(['_token', '_method']);
        Libro::where('id', '=', $id)->update($datosLibros);
        $libros = Libro::findOrFail($id);

        return redirect ('libros')-> with('mensaje', 'Libro Modificado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Libro::destroy($id);
        return redirect ('libros')-> with('mensaje', 'Libro eliminado Correctamente');

    }
}
