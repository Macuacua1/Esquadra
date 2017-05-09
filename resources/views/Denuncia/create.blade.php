
@extends('layouts.app')

@section('content')
    <div class="container">
      <form class="form-horizontal" role="form" method="POST" action="{{ url('/gravardenuncia') }}">
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
            <div class="form-group row">
                <div class="col-lg-10">

                    <div class="form-group">
                        {!! Form::text('designacao','',['class'=>'form-control','placeholder'=>'Designacao']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::textarea('motivo', '', ['class'=>'form-control','placeholder'=>'Motivo']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Submeter', ['class'=>'form-control']) !!}
                    </div>
                </div>

            </div>

        </form>
    </div>
@endsection
