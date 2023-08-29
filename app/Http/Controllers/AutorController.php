<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;


class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos ['autores']= Autor::paginate(5);

        return view ('Autores.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Autores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        


        $datosAutor = request()->except('_token');
        Autor::insert($datosAutor);
        return redirect ('autores')-> with('mensaje', 'Autor agregado Correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(Autor $autor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $autores = Autor::findOrFail($id);
        return view ('Autores.edit', compact('autores'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {



        $datosAutor = request()->except(['_token', '_method']);
        Autor::where('id', '=', $id)->update($datosAutor);
        $autores = Autor::findOrFail($id);
        //return view ('Autores.edit', compact('autores'));
        return redirect ('autores')-> with('mensaje', 'Autor/a modificado Correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Autor::destroy($id);
       
        return redirect ('autores')-> with('mensaje', 'Autor/a eliminado Correctamente');
    }
}
