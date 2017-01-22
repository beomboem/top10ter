@extends('layouts.landing')

@section('content')
	<section id="add-article">
		<div class="container">
			<div class="row">
		        <div class="col-md-10 col-md-offset-1">
		                {{--{!! Form::open(['action' => 'Admin\ArticleController@store', 'files' => 'true']) !!}--}}
		                <h2><b>Add Article</b></h2>

		                <div class="panel-body">
		                    <div class="form-group">
		                        {!! Form::label('article_title', 'Article Title') !!}
		                        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => "Enter Title",'required']) !!}
		                    </div>
		                    <div class="form-group">
		                        {!! Form::label('article_author', 'Article Author') !!}
		                        {!! Form::text('author', $author, ['class' => 'form-control','readonly']) !!}
		                    </div>
		                    <div class="form-group">
		                        {!! Form::label('article_content', 'Article Content') !!}
		                        {!! Form::textarea('content', null, array('class' => 'form-control', 'placeholder'=>'Enter Description', 'id' => 'description_box')) !!}
		                    </div>
		               </div>
		           <div class="panel panel-default">
		                <div class="panel-heading wht-bg">Article Item 1</div>

		                <div class="panel-body">
		                    <div class="form-group">
		                        {!! Form::label('item_title', 'Title') !!}
		                        {!! Form::text('item_title_1', null, ['class' => 'form-control', 'placeholder' => "Enter Title",'required']) !!}
		                    </div>
		                    <div class="form-group">
		                        {!! Form::label('item_content', 'Content') !!}
		                        {!! Form::textarea('item_content_1', null, array('class' => 'form-control', 'placeholder'=>'Enter Description', 'id' => 'description_box')) !!}
		                    </div>
		                    <div class="form-group">
		                        {!! Form::label('item_img', 'Image') !!}
		                        {!! Form::file('item_image_1', ['class' => 'file_management','required']) !!}
		                    </div>
		                    <p>Image extension must ".jpeg",".png",".jpg",".gif" or ".svg"</p>
		               </div>
		           </div>
		           <div class="panel panel-default">
		                <div class="panel-heading wht-bg">Article Item 2</div>

		                <div class="panel-body">
		                    <div class="form-group">
		                        {!! Form::label('item_title', 'Title') !!}
		                        {!! Form::text('item_title_2', null, ['class' => 'form-control', 'placeholder' => "Enter Title",'required']) !!}
		                    </div>
		                    <div class="form-group">
		                        {!! Form::label('item_content', 'Content') !!}
		                        {!! Form::textarea('item_content_2', null, array('class' => 'form-control', 'placeholder'=>'Enter Description', 'id' => 'description_box')) !!}
		                    </div>
		                    <div class="form-group">
		                        {!! Form::label('item_img', 'Image') !!}
		                        {!! Form::file('item_image_2', ['class' => 'file_management','required']) !!}
		                    </div>
		                    <p>Image extension must ".jpeg",".png",".jpg",".gif" or ".svg"</p>
		               </div>
		           </div>
		           <div class="panel panel-default">
		                <div class="panel-heading wht-bg">Article Item 3</div>

		                <div class="panel-body">
		                    <div class="form-group">
		                        {!! Form::label('item_title', 'Title') !!}
		                        {!! Form::text('item_title_3', null, ['class' => 'form-control', 'placeholder' => "Enter Title",'required']) !!}
		                    </div>
		                    <div class="form-group">
		                        {!! Form::label('item_content', 'Content') !!}
		                        {!! Form::textarea('item_content_3', null, array('class' => 'form-control', 'placeholder'=>'Enter Description', 'id' => 'description_box')) !!}
		                    </div>
		                    <div class="form-group">
		                        {!! Form::label('item_img', 'Image') !!}
		                        {!! Form::file('item_image_3', ['class' => 'file_management','required']) !!}
		                    </div>
		                    <p>Image extension must ".jpeg",".png",".jpg",".gif" or ".svg"</p>
		               </div>
		           </div>
		           <div class="panel panel-default">
		                <div class="panel-heading wht-bg">Article Item 4</div>

		                <div class="panel-body">
		                    <div class="form-group">
		                        {!! Form::label('item_title', 'Title') !!}
		                        {!! Form::text('item_title_4', null, ['class' => 'form-control', 'placeholder' => "Enter Title",'required']) !!}
		                    </div>
		                    <div class="form-group">
		                        {!! Form::label('item_content', 'Content') !!}
		                        {!! Form::textarea('item_content_4', null, array('class' => 'form-control', 'placeholder'=>'Enter Description', 'id' => 'description_box')) !!}
		                    </div>
		                    <div class="form-group">
		                        {!! Form::label('item_img', 'Image') !!}
		                        {!! Form::file('item_image_4', ['class' => 'file_management','required']) !!}
		                    </div>
		                    <p>Image extension must ".jpeg",".png",".jpg",".gif" or ".svg"</p>
		               </div>
		           </div>
		           <div class="panel panel-default">
		                <div class="panel-heading wht-bg">Article Item 5</div>

		                <div class="panel-body">
		                    <div class="form-group">
		                        {!! Form::label('item_title', 'Title') !!}
		                        {!! Form::text('item_title_5', null, ['class' => 'form-control', 'placeholder' => "Enter Title",'required']) !!}
		                    </div>
		                    <div class="form-group">
		                        {!! Form::label('item_content', 'Content') !!}
		                        {!! Form::textarea('item_content_5', null, array('class' => 'form-control', 'placeholder'=>'Enter Description', 'id' => 'description_box')) !!}
		                    </div>
		                    <div class="form-group">
		                        {!! Form::label('item_img', 'Image') !!}
		                        {!! Form::file('item_image_5', ['class' => 'file_management','required']) !!}
		                    </div>
		                    <p>Image extension must ".jpeg",".png",".jpg",".gif" or ".svg"</p>
		               </div>
		           </div>
		           <div class="panel panel-default">
		                <div class="panel-heading wht-bg">Article Item 6</div>

		                <div class="panel-body">
		                    <div class="form-group">
		                        {!! Form::label('item_title', 'Title') !!}
		                        {!! Form::text('item_title_6', null, ['class' => 'form-control', 'placeholder' => "Enter Title",'required']) !!}
		                    </div>
		                    <div class="form-group">
		                        {!! Form::label('item_content', 'Content') !!}
		                        {!! Form::textarea('item_content_6', null, array('class' => 'form-control', 'placeholder'=>'Enter Description', 'id' => 'description_box')) !!}
		                    </div>
		                    <div class="form-group">
		                        {!! Form::label('item_img', 'Image') !!}
		                        {!! Form::file('item_image_6', ['class' => 'file_management','required']) !!}
		                    </div>
		                    <p>Image extension must ".jpeg",".png",".jpg",".gif" or ".svg"</p>
		               </div>
		           </div>
		           <div class="panel panel-default">
		                <div class="panel-heading wht-bg">Article Item 7</div>

		                <div class="panel-body">
		                    <div class="form-group">
		                        {!! Form::label('item_title', 'Title') !!}
		                        {!! Form::text('item_title_7', null, ['class' => 'form-control', 'placeholder' => "Enter Title",'required']) !!}
		                    </div>
		                    <div class="form-group">
		                        {!! Form::label('item_content', 'Content') !!}
		                        {!! Form::textarea('item_content_7', null, array('class' => 'form-control', 'placeholder'=>'Enter Description', 'id' => 'description_box')) !!}
		                    </div>
		                    <div class="form-group">
		                        {!! Form::label('item_img', 'Image') !!}
		                        {!! Form::file('item_image_7', ['class' => 'file_management','required']) !!}
		                    </div>
		                    <p>Image extension must ".jpeg",".png",".jpg",".gif" or ".svg"</p>
		               </div>
		           </div>
		           <div class="panel panel-default">
		                <div class="panel-heading wht-bg">Article Item 8</div>

		                <div class="panel-body">
		                    <div class="form-group">
		                        {!! Form::label('item_title', 'Title') !!}
		                        {!! Form::text('item_title_8', null, ['class' => 'form-control', 'placeholder' => "Enter Title",'required']) !!}
		                    </div>
		                    <div class="form-group">
		                        {!! Form::label('item_content', 'Content') !!}
		                        {!! Form::textarea('item_content_8', null, array('class' => 'form-control', 'placeholder'=>'Enter Description', 'id' => 'description_box')) !!}
		                    </div>
		                    <div class="form-group">
		                        {!! Form::label('item_img', 'Image') !!}
		                        {!! Form::file('item_image_8', ['class' => 'file_management','required']) !!}
		                    </div>
		                    <p>Image extension must ".jpeg",".png",".jpg",".gif" or ".svg"</p>
		               </div>
		           </div>
		           <div class="panel panel-default">
		                <div class="panel-heading wht-bg">Article Item 9</div>

		                <div class="panel-body">
		                    <div class="form-group">
		                        {!! Form::label('item_title', 'Title') !!}
		                        {!! Form::text('item_title_9', null, ['class' => 'form-control', 'placeholder' => "Enter Title",'required']) !!}
		                    </div>
		                    <div class="form-group">
		                        {!! Form::label('item_content', 'Content') !!}
		                        {!! Form::textarea('item_content_9', null, array('class' => 'form-control', 'placeholder'=>'Enter Description', 'id' => 'description_box')) !!}
		                    </div>
		                    <div class="form-group">
		                        {!! Form::label('item_img', 'Image') !!}
		                        {!! Form::file('item_image_9', ['class' => 'file_management','required']) !!}
		                    </div>
		                    <p>Image extension must ".jpeg",".png",".jpg",".gif" or ".svg"</p>
		               </div>
		           </div>
		           <div class="panel panel-default">
		                <div class="panel-heading wht-bg">Article Item 10</div>

		                <div class="panel-body">
		                    <div class="form-group">
		                        {!! Form::label('item_title', 'Title') !!}
		                        {!! Form::text('item_title_10', null, ['class' => 'form-control', 'placeholder' => "Enter Title",'required']) !!}
		                    </div>
		                    <div class="form-group">
		                        {!! Form::label('item_content', 'Content') !!}
		                        {!! Form::textarea('item_content_10', null, array('class' => 'form-control', 'placeholder'=>'Enter Description', 'id' => 'description_box')) !!}
		                    </div>
		                    <div class="form-group">
		                        {!! Form::label('item_img', 'Image') !!}
		                        {!! Form::file('item_image_10', ['class' => 'file_management','required']) !!}
		                    </div>
		                    <p>Image extension must ".jpeg",".png",".jpg",".gif" or ".svg"</p>
		               </div>
		           </div>
		           <div class="form-group">
		               {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
		           </div>
		           {{--{!! Form::close() !!}--}}
		       	</div>
   </div>
		</div>
	</section>
@endsection

@section('customjs')

@endsection