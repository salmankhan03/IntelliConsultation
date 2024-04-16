@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5 mx-auto p-5">
            
            {!! Form::open(['url' => '/admin-login','method'=>"POST"]) !!}
                                
                                <div class="row d-flex justify-content-center">
                                    {!! Form::label('uname','Username :') !!}&nbsp; &nbsp;
                                    {!! Form::text('uname', null, array('placeholder'=>'User Name')) !!}
                                    @error('uname')
                                    <div class="alert alert-danger">{{ $errors->first('uname')}}</div>
                                    @enderror
                                </div>
                                <br/>
                                <div class="row d-flex justify-content-center">
                                    {!! Form::label('password','Password :') !!}&nbsp; &nbsp;
                                    {!! Form::password('password', null, array('placeholder'=>'Password')) !!}
                                    @error('password')
                                    <div class="alert alert-danger">{{ $errors->first('password')}}</div>
                                    @enderror
                                </div>
                                <br/>
                                @if($errors->any())
                                <h4>{{$errors->first()}}</h4>
                                @endif
                                <div class="row d-flex justify-content-center">
                                   
                                    {!! Form::submit('Login') !!}
                                 </div>
                              {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
