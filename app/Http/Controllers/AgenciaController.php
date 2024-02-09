<?php

namespace App\Http\Controllers;


use Illuminate\support\facades\redirect;
use Illuminate\Http\Request;
use App\Models\agencia;

class AgenciaController extends Controller
{
    public function index(){
        return view('index');
    }

    public function showFormAgencia(){
        return view('cadastrar');
    }

    public function storeAgencia(Request $request){
        $agencia= $request->validate([
            'nomeCarro'=>'string|required',
            'marca'=>'string|required',
            'valor'=>'string|required'
        ]);

        agencia::create($agencia);
        return redirect::route('index');
    }


    public function showGerenciador(Request $request){
       $dados= agencia::query();
       $dados->when($request->nomeCarro,function($query,$nome){
        $query->where('nomeCarro', 'like' , '%'.$nome.'%');
       });

       $dados = $dados->get();

       return view('buscar', ['agencias' => $dados]);
    }


    public function destroy(agencia $id){
        $id->delete();
        return redirect::route('todos-agencia');
        
    }






    public function update(agencia $id, Request $request){
        $agencia = $request->validate([
            'nomeCarro'=>'string|required',
            'marca'=>'string|required',
            'valor'=>'string|required'
        ]);

        $id->fill($agencia);
        $id->save();
        return redirect::route('todos-agencia');
    }








    public function show(agencia $id){
        return view('alterar', ['agencias'=> $id]);
    }


}


