@extends('admin.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-5 mx-auto p-5">
        {!! Form::open(['url' => '/add-category','method'=>"POST"]) !!}
            <div class="text-left">
            {!! Form::label('title','Title :') !!}&nbsp; &nbsp;
                {!! Form::text('title', null, array()) !!}
                @error('title')
                    <div class="alert alert-danger">{{ $errors->first('title')}}</div>
                @enderror
                <br/>
            </div>    
                {!! Form::submit('Add') !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>        
@endsection         