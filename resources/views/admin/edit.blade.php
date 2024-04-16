@extends('admin.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5 mx-auto p-5">
            {!! Form::model($data,['route' => ['blogUpdate', $data->postID],'method'=>"POST", 'files' => true]) !!}
            <div class="text-left">
                {!! Form::label('postTitle','Title:') !!}
                {!! Form::text('postTitle', null, array('class'=>'form-control')) !!}
                @error('postTitle')
                <div class="alert alert-danger">{{ $errors->first('postTitle')}}</div>
                @enderror
                <br/>
                {!! Form::label('postDesc','Description:') !!}
                <br/>
                {!! Form::textarea('postDesc',null,array('id' => 'blog_description', 'class'=>'ckeditor form-control','placeholder'
                                =>'Enter description')) !!}
                <br/>
                <br/>
                {!! Form::label('postCont','Summary:') !!}
                <br/>
                {!! Form::textarea('postCont',null,array('id' => 'blog_summary', 'class'=>'ckeditor form-control','placeholder'
                                =>'Enter summary')) !!}
                <br/>
                {!! Form::label('postBanner', 'Banner: ', array('class' => 'control-label'))!!}
{{--                <span>In case of multiple images, the image you upload first will become the thumbnail image</span>--}}

                <br/>
                {!! Form::file("postBanner", array("accept" => ".jpeg,.gif,.jpg,.png")) !!}
                <br/>
                <br/>
                @if($data->postBanner)
                    <div class="edit_thumbmail">
                        <img src="{!! 'uploads/'.$data->postBanner !!}" width="250" />
                    </div>
                @endif
                <br/>
                <br/>
                {!! Form::label('categoryId','Category <span class="text-danger">*</span>:', array('class' =>''),false) !!}&nbsp; &nbsp;
                @foreach($blog_category_array as $key=>$value)
                    {!! Form::checkbox('categoryId[]', $key, in_array($key,$categories_array)); !!} {!! $value !!} &nbsp;
                @endforeach
                @error('categoryId')
                    <div class="alert alert-danger">{{ $errors->first('categoryId')}}</div>
                @enderror
                <br/>
                {!! Form::label('postSource','Source:') !!}&nbsp; &nbsp;
                {!! Form::text('postSource', null, array('class'=>'form-control col-sm-4','maxlength'=>'150' )) !!}
                <br/>
                <br/>

                {!! Form::label('postDate','News Date:') !!}&nbsp; &nbsp;
                {!! Form::date('postDate', date('Y-m-d',strtotime($data->postDate)) , array('class'=>'form-control col-sm-4' )) !!}
                <br/>
            </div>
                {!! Form::submit('Update') !!}
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
