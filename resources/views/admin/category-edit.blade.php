@extends('admin.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-5 mx-auto p-5">
            {!! Form::model($data,['route' => ['categoryUpdate', $data->catID],'method'=>"POST"]) !!}
            <div class="text-left">
                {!! Form::label('catTitle','Title') !!}
                {!! Form::text('catTitle', null) !!}
                @error('catTitle')
                <div class="alert alert-danger">{{ $errors->first('catTitle')}}</div>
                @enderror
                <br/>
            </div>    
                {!! Form::submit('Update') !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>        
@endsection         