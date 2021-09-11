<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use Session;


class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teste = Curso::all();
        return view('welcome', ['teste'=>$teste]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $Evento = New Curso();
            $Evento->title = $request->Title;
            $Evento->description = $request->description;
            $Evento->city = $request->city;
            $Evento->private = $request->private;

            $Evento->save();

            Session::flash('msg', 'Evento criado com sucesso!');
            Session::flash('class', 'alert-success');
            return redirect('/');
        }catch(\Exception $erros){
            Session::flash('msg', 'Erro ao criar evento!');
            Session::flash('class', 'alert-danger');
            return redirect('/');
        }
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
    public function destroy($id)
    {
        //
    }
}
