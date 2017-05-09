<?php

namespace App\Http\Controllers;

use App\Acusacao;
use App\Cidadao;
use App\Denuncia;
use App\Individuo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AcusacaoController extends Controller
{
    public function index()
    {
        $acusacaos=Acusacao::all();
//dd($acusacaos);
        return view('Acusacao.show',compact('acusacaos'));
       
    }


    public function criar()
    {
        $denuncia=Denuncia::pluck('designacao','id');
       return view('Acusacao.create',['denuncias'=> $denuncia]);
    }


    public function gravar(Request $request)
    {

        $request->request->add(['tipo'=>'denuciante']);
         $denuciante = Individuo::create($request->all());


//        $request->request->add(['nome'=>$request->nomeacusado,'tipo'=>'acusado']);
//        $denunciado = Individuo::create(['nome'=>$request->nomeacusado,'tipo'=>'acusado']);
        $request->request->add(['denuncia_id' => $request->id,
            'user_id'=>Auth::user()->id,'individuo_id'=>$denuciante->id]);
     $acusacao=Acusacao::create($request->all());
     $denuciante->acusacao()->save($acusacao);
//
//         $denunciado->acusacoes()->attach($denuciante->id,['denuncia_id' => $request->id,
//         'user_id'=>Auth::user()->id,
//             'motivo'=>$request->motivo,'estado'=>$request->estado,'local'=>$request->local,
//         'descricao_local'=> $request->descricao_local]);

//        $denuciante->acusas()->attach($denunciado->id,['estado'=>$request->estado,'local'=>$request->local,
//            'descricao_local'=> $request->descricao_local]);

       return back()
            ->with('success','Gravado com Sucesso.');

    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
