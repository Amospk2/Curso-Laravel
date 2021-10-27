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
        $search = request('search');
        if($search)
        {
            $cursos = Curso::where([['title', 'like', '%'.$search.'%']])->get();
        }
        else
        {
            $cursos = Curso::all();
        }
        return view('welcome', ['cursos'=>$cursos, 'search' => $search]);
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
            $Evento->date = $request->date;
            $Evento->description = $request->description;
            $Evento->city = $request->city;
            $Evento->private = $request->private;
            $Evento->items = $request->items;

            //Upload Image

            if($request->hasFile('image') && $request->file('image')->isValid())
            {
                $RI = $request->image;

                $extension = $RI->extension();

                $IName = md5($RI->getClientOriginalName() . strtotime("now") . "." . $extension);
                
                $request->image->move(public_path('img/events'), $IName);
            
                $Evento->image = $IName;
            
            }
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
        $event = Curso::findOrFail($id);
        return view('show', ['event'=>$event]);
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
