<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\projeto;

class ProjetosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        //
        
        
        if(view()->exists('admin.paginas.projetos.index'))
        {
            $projetos = projeto::paginate(1);                
            return view('admin.paginas.projetos.index', compact('projetos'));
        }
        else 
        {
            return 'error';
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(view()->exists('admin.paginas.projetos.create'))
        {
            return view('admin.paginas.projetos.create');
            
        }else   
        {
            return 'error create';
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
        projeto::create($request->all());
        
        return response()->redirectToRoute('projetos.index');
        
        
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
        if (view()->exists('admin.paginas.projetos.show'))
        {
            $projetos = projeto::findOrFail($id);
               return view('admin.paginas.projetos.show',compact('projetos'));
        }
         
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
        if (view()->exists('admin.paginas.projetos.edit'))
        {
            $projetos = projeto::findOrFail($id);
            return view('admin.paginas.projetos.edit',compact('projetos'));
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
        $projetos = projeto::findOrFail($id);
        $projetos->update($request->all());
        
        return response()->redirectToRoute('projetos.show', $projetos->id);
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
        $projetos = projeto::findOrFail($id);
        $projetos->delete();
        return response()->redirectToRoute('projetos.index');
    }
}
