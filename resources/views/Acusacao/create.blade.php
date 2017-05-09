
@extends('layouts.app')

@section('content')
   <div class="container">
        <h1 align="center">Registo de Acusacao</h1>

            {!! Form::open(array('url' => '/gravaracusacao', 'class' => 'form')) !!}
                {{ csrf_field() }}
       @if (count($errors) > 0)
           <div class="alert alert-danger">
               <strong>Whoops!</strong> Preencha correctamente os campos!
               <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div>
       @endif
       @if ($message = Session::get('success'))
           <div class="alert alert-success alert-block">
               <button type="button" class="close" data-dismiss="alert">�</button>
               <strong>{{ $message }}</strong>
           </div>

       @endif
        <div class="row">
            <div class="col-md-6">

        <fieldset>
            <legend>Dados do Acusador</legend>
            <div class="form-group">
                {{--{!! Form::label('Apelido') !!}--}}
                {!! Form::text('apelido', null,
                    array('class'=>'form-control',
                          'placeholder'=>'Apelido')) !!}
            </div>

            <div class="form-group">
                {{--{!! Form::label('Nome') !!}--}}
                {!! Form::text('nome', null,
                    array('class'=>'form-control',
                          'placeholder'=>'Nomes')) !!}
            </div>
            <div class="form-group">
                {{--{!! Form::label('Ocupacao') !!}--}}
                {!! Form::text('ocupacao', null,
                    array('class'=>'form-control',
                          'placeholder'=>'Ocupacao')) !!}
            </div>

            <div class="form-group">
                {{--{!! Form::label('Idade') !!}--}}
                {!! Form::number('idade', null,
                    array('class'=>'form-control',
                          'placeholder'=>'Idade')) !!}
            </div>

            <div class="form-group">
                {{--{!! Form::label('Provincia') !!}--}}
                {!! Form::select('provincia',['Opcao' => 'Escolha a Provincia','Maputo Cidade' => 'Maputo Cidade',
                'Maputo Provincia' => 'Maputo Provincia',
                'Gaza' => 'Gaza',
                'Inhambane' => 'Inhambane',
                'Sofala' => 'Sofala',
                'Manica' => 'Manica',
                'Tete' => 'Tete',
                'Zambezia' => 'Zambezia',
                'Nampula' => 'Nampula',
                'Niassa' => 'Niassa',
                'cabo Delgado' => 'Cabo Delgado'],null,['class'=>'form-control'] ) !!}

            </div>

            <div class="form-group">
                {{--{!! Form::label('Distrito') !!}--}}
                {!! Form::text('distrito', null,
                    array('class'=>'form-control',
                          'placeholder'=>'Distrito')) !!}
            </div>

            <div class="form-group">
                {{--{!! Form::label('Bairro') !!}--}}
                {!! Form::text('bairro', null,
                    array( 'class'=>'form-control',
                          'placeholder'=>'Bairro')) !!}
            </div>

            <div class="form-group">
                {{--{!! Form::label('Celular') !!}--}}
                {!! Form::text('contacto1', null,
                    array('class'=>'form-control',
                          'placeholder'=>'Celular')) !!}
            </div>

            <div class="form-group">
                {{--{!! Form::label('Outro celular') !!}--}}
                {!! Form::text('contacto1', null,
                    array('class'=>'form-control',
                          'placeholder'=>'Outro celular')) !!}
            </div>

            <div class="form-group">
                {!! Form::hidden('estado','pendente',['class'=>'form-control','placeholder'=>'']) !!}
            </div>




        </fieldset>

            </div>



            <div class="row">
                <div class="col-md-6">

                    <fieldset>
                        <legend>Dados do Acusado</legend>

                        <div class="form-group">
                            {{--{!! Form::label('Nome') !!}--}}
                            {!! Form::text('nomeacusado', null,
                                array('class'=>'form-control',
                                      'placeholder'=>'Nome do Acusado')) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::select('id',$denuncias,null,['class'=>'form-control'] ) !!}
                        </div>
                        <div class="form-group">
                            {{--{!! Form::label('Nome') !!}--}}
                            {!! Form::text('local', null,
                                array( 'class'=>'form-control',
                                      'placeholder'=>'Local')) !!}
                        </div>

                        <div class="form-group">
                            {{--{!! Form::label('Nome') !!}--}}
                            {!! Form::text('descricao_local', null,
                                array('class'=>'form-control',
                                      'placeholder'=>'Descricao do Local')) !!}
                        </div>

                        <div class="form-group">
                            {{--{!! Form::label('Your Message') !!}--}}
                            {!! Form::textarea('motivo', null,
                                array('class'=>'form-control',
                                      'placeholder'=>'Descricao da Denuncia')) !!}
                        </div>


                        <div class="form-group" align="right">
                            {!! Form::submit('Submeter',
                              array('class'=>'btn btn-primary')) !!}
                        </div>
                    </fieldset>

                </div>
            </div>
        </div>



            {!! Form::close() !!}


    </div>
@endsection
