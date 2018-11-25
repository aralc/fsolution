<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\atividades;

class AtividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (view()->exists('admin.paginas.atividades.index'))
        {
            $atividades = atividades::paginate(3);
            return view('admin.paginas.atividades.index', compact('atividades'));
        }
        else 
        {
            return 'erro atividade';
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(view()->exists('admin.paginas.atividades.create'))
        {
            return view('admin.paginas.atividades.create');
        }
        else {
            return 'erro create';
            }
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
        atividades::create($request->all());
        return response()->redirectToRoute('atividades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (view()->exists('admin.paginas.atividades.show'))
        {
            $atividades = atividades::findOrFail($id);
            return view('admin.paginas.atividades.show', compact('atividades'));
        }
        else 
        {
            return 'erro show';
        }
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
        if (view()->exists('admin.paginas.atividades.edit'))
        {
            $atividades = atividades::findOrFail($id);
            return view('admin.paginas.atividades.edit', compact('atividades'));
        } else 
        {
            return 'erro edit';
        }

        
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
        $atividades = atividades::findOrFail($id);
        $atividades->update($request->all());
        return response()->redirectToRoute('atividades.show', $atividades->id);
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
        $atividades = atividades::findOrFail($id);
        $atividades->delete();
        return response()->redirectToRoute('atividades.index');
    }
}
