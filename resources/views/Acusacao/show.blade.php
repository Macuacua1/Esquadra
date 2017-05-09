@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Lista de Acusacoes</div>

                    <div class="panel-body">
                        <h1 align="center">Lista de Acusacoes</h1>

                        <table class="table table-condensed table-hover table-striped" style="table-layout: fixed" id="tabela">
                            <thead>
                            {!!Form::open(['url' => '/listaracusacao','class'=>'form']) !!}
                            <div class="form-group">
                                <div class="col-md-9"  >
                                    {!! Form::text('pesquisa','',['class'=>'form-control','id'=>'pesquisa']) !!}


                                </div>
                            </div>
                            {!! Form::close() !!}

                            <tr>


                                <th> Nome</th>
                                <th>Motivo</th>
                                <th>Local</th>
                                <th>Acusador</th>
                                <th>Data</th>
                                <th>Estado</th>
                                <th>Accao</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($acusacaos as $acusa)
                                <tr>
                                    <td>{{$acusa->nomeacusado}}</td>
                                    {{--<td>{{$acusa->individuo->nome}}</td>--}}
                                    <td>{{$acusa->motivo}}</td>
                                    <td>{{$acusa->local}}</td>
                                    <td>{{$acusa->individuo->nome}}</td>
                                    <td>{{$acusa->created_at}}</td>
                                    <td>{{$acusa->estado}}</td>

                                    <td> <a class="glyphicon glyphicon-trash" href="#"></a> |
                                        <a class="glyphicon glyphicon-edit" href="#"></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="text-center">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

