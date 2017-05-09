<?php

namespace App\Http\Controllers;

use App\Denuncia;
use Illuminate\Http\Request;

class DenunciaController extends Controller
{
    public function index()
    {
//        $user=User::all();
//        return response()->json($user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function criar()
    {
        return view('Denuncia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function gravar(Request $request)
    {
//        $denuncia= new Denuncia(array (
//           "designacao"=> $request->get("designacao"),
//            "descricao"=> $request->get("descricao")
//
//        ));
        $denuncia=new Denuncia();
        $denuncia->designacao=$request->designacao;
        $denuncia->descricao=$request->descricao;

        $denuncia->save();
        return back()
            ->with('success','Gravado com Sucesso.');

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
