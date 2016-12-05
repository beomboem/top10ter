@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading wht-bg">Add Article</div>

                <div class="panel-body">
                     {!! Form::open(['action' => 'Admin\ArticleController@store', 'files' => 'true']) !!}
                    <div class="form-group">
                        {!! Form::label('article_title', 'Article Title') !!}
                        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => "Enter Title",'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('article_author', 'Article Author') !!}
                        {!! Form::text('author', null, ['class' => 'form-control', 'placeholder' => "Enter Author",'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('article_description', 'Article Content') !!}
                        {!! Form::textarea('content', null, array('class' => 'form-control', 'placeholder'=>'Enter Description', 'id' => 'description_box')) !!}
                    </div>
                    {{-- <div class="form-group">
                        {!! Form::file('image-main', ['class' => 'file_management','required']) !!}
                    </div>
                    <p>Image extension must ".jpeg",".png",".jpg",".gif" or ".svg"</p> --}}
                    <div class="form-group">
                       {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
                   </div>
                   {!! Form::close() !!}
                   {{-- @include('errors.list') --}}
               </div>
           </div>
       </div>
   </div>
</div>
@endsection

@section('custom-js')
  <script type="text/javascript">
    CKEDITOR.replace('description_box');
  </script>
  
@endsection


