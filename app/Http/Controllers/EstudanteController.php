<?php

namespace App\Http\Controllers;

use App\Models\Estudante;
use App\Models\produto;
use Illuminate\Http\Request;

class EstudanteController extends Controller
{
    //estudante = usuario
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view (view: 'estudante.pagina');
    }
    public function index1()
    {
            return view (view: 'estudante.paginaPrincipal'); 
    }
    public function index2()
    {
            return view (view: 'estudante.produto'); 
    }        
    public function index3()
    {
        $estudante = estudante::all();   
        return view ('estudante.lista', ['estudante' => $estudante]); 
    }        
    public function index4()
    {
        $produto = produto::all();   
        return view ('estudante.lista', ['produto' => $produto]); 
    }        
    public function index5()
    {
        return view (view : 'estudante.paginausuario');
    }        
    public function index6()
    {
        $produto = produto::all();   
        return view ('estudante.listausuario', ['produto' => $produto]); 
    }        

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view (view :'estudante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       estudante::create([
        'nome' => $request->nome,
        'senha' => $request->senha,
       ]);
        
       return view (view: 'estudante.create'); 
}
      

        public function create1()
    {
         return view (view :'estudante.cadastro');
    }
    
    
    public function store1(Request $request)
    {
        produto::create([
            'nome' => $request->nome,
            'preço' => $request->preço,
        ]);
    return view (view: 'estudante.cadastro'); 
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function show(Estudante $estudante)
    {
        return view('estudante.show',['estudante' => $estudante]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudante $estudante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudante $estudante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudante  $estudante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudante $estudante)
    {
        //
    }
}
