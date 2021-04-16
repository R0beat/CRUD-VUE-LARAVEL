@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    {!! Form::open(['url'=>''])!!}
                        <div class="form-group">
                            {!! Form::label('thought', '¿Qué estas pensando?', ['class' => 'form-group']);!!}
                            {!! Form::text('thought','',['class'=>'form-control']); !!}
                        </div>
                    {!! Form::close( )!!}
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">¿En que estas pensando ahora?</div>
                <div class="card-body">
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Mollitia explicabo placeat odio ad modi voluptates corporis nam illum tempore itaque maiores aliquid, reiciendis ipsa magnam! 
                        Repellat modi fugiat accusantium possimus.
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
