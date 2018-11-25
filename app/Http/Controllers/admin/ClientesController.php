<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\cliente;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (view()->exists('admin.paginas.clientes.index'))
        {
            $clientes = cliente::paginate(1);
            return view('admin.paginas.clientes.index', compact('clientes'));
        }
        else {
            return 'erro cliente';
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (view()->exists('admin.paginas.clientes.create'))
        {
            return view('admin.paginas.clientes.create');
        }
        else 
        {
            return 'erro create cliente';
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
        cliente::create($request->all());
        return response()->redirectToRoute('clientes.index');
        
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
        if (view()->exists('admin.paginas.clientes.show'))
        {
        $clientes = cliente::findOrFail($id);
           return view('admin.paginas.clientes.show',compact('clientes'));
        }
        else 
        {
            return 'erro show';
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
        
        if(view()->exists('admin.paginas.clientes.edit'))
        {
            $clientes = cliente::findOrFail($id);
            return view('admin.paginas.clientes.edit',compact('clientes'));
        }
        else 
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
        $clientes = cliente::findOrFail($id);
        $clientes->update($request->all());
        
        return response()->redirectToRoute('clientes.show',$clientes->id); 
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
        $clientes = cliente::findOrFail($id);
        $clientes->delete();
        
        return response()->redirectToRoute('clientes.index');
    }
}
