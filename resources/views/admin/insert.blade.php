@extends('admin.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5 mx-auto p-5">
            {!! Form::open(['url' => '/add-blog','method'=>"POST", 'files' => true]) !!}
            <div class="text-left">
                {!! Form::label('title','Title:') !!}&nbsp; &nbsp;
                {!! Form::text('title', null, array('class'=>'form-control','maxlength'=>'150')) !!}
                @error('title')
                    <div class="alert alert-danger">{{ $errors->first('title')}}</div>
                @enderror
                <br/>
                {!! Form::label('description','Description:') !!}
                <br/>
                {!! Form::textarea('description',null,array('id' => 'blog_description', 'class'=>'ckeditor form-control','placeholder'
                                =>'Enter description')) !!}
                <br/>
                <br/>
                {!! Form::label('summary','Summary:') !!}
                <br/>
                {!! Form::textarea('summary',null,array('id' => 'blog_summary', 'class'=>'ckeditor form-control','placeholder'
                                =>'Enter summary')) !!}
                <br/>
                {!! Form::label('banner','Upload Banner:', array('class' => 'control-label'))!!}
{{--                <span>In case of multiple images, the image you upload first will become the thumbnail image</span>--}}
                <br/>

                {!! Form::file("banner", array("accept" => ".jpeg,.gif,.jpg,.png")) !!}


{{--                {!! Form::file("banner[]", array("accept" => ".jpeg,.gif,.jpg,.png","multiple" => "multiple")) !!}--}}
                <br/>
                <br/>
                {!! Form::label('categoryId','Category <span class="text-danger">*</span>:', array('class' =>''),false) !!}&nbsp;
                @foreach($blog_category_array as $key=>$value)
                    {!! Form::checkbox('categoryId[]', $key); !!} {!! $value !!} &nbsp;
                @endforeach
{{--                {!! Form::select('categoryId',(["" => "Select category"] + $blog_category_array),null,array('class' => 'form-control col-md-6')) !!}--}}
                @error('categoryId')
                    <div class="alert alert-danger">{{ $errors->first('categoryId')}}</div>
                @enderror
                <br/>

                {!! Form::label('source','Source:') !!}&nbsp; &nbsp;
                {!! Form::text('source', null, array('class'=>'form-control col-sm-4','maxlength'=>'150' )) !!}
                <br/>
                <br/>

                {!! Form::label('date','News Date:') !!}&nbsp; &nbsp;
                {!! Form::date('date', null , array('class'=>'form-control col-sm-4' )) !!}
                <br/>


            </div>
                {!! Form::submit('Submit', array('class'=>'btn btn-info')) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
<script src="{!! asset('js/ckeditor/ckeditor.js') !!}"></script>
<script src="{!! asset('js/ckeditor/adapters/jquery.js') !!}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
@endsection
