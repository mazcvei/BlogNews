<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Noticia;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noticias=Noticia::All();
        $categorias=Categoria::All();
        return view('noticias',compact('noticias','categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //dd("dentro create");
        $idUser=auth()->user()->id;

        Noticia::create([
            'titulo' => $request['titulo'],
            'texto' => $request['texto'],
            'categoria' => $request['categoria'],
            'estracto' => $request['estracto'],
            'imagen' => $request['imagen'],
            'tags' => $request['tags'],
            'id_user' => $idUser
        ]);
        return redirect('/noticias');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function view_user($user_id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
