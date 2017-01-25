@extends('layouts.landing')

@section('content')
	<section id="profile">
		<div class="container">
			<div class="row">
				<div class = "photo-profile col-md-2">
					<img id="profile-pic" class="profile-pic" src="{{asset('images/profile_test.jpg')}}">
					<div id="upload-button" class="text-center"><i class="fa fa-pencil fa-4x" aria-hidden="true"></i></div>
					<div class="profile-data">
						<h5><b>{{ Auth::user()->name }}</b></h5>
						<small>{{ Auth::user()->email }}</small>
						<button id="edit-button" class="btn-block">
							<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
							<small>Edit Profile</small>
						</button>
						<button id="save-button" class="btn-block">
							<i class="fa fa-floppy-o" aria-hidden="true"></i>
							<small>Save</small>
						</button>
						<input class="file-upload" type="file" accept="image/*" style="display:none"/>
					</div>
				</div>
				<div class="profile-detail col-md-10">
					<p class="text-right">Points : {{Auth::user()->points}}</p>
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#myArticles" aria-controls="myArticles" role="tab" data-toggle="tab">My Articles</a></li>
					    <li role="presentation"><a href="#myPollings" aria-controls="myPollings" role="tab" data-toggle="tab">My Pollings</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
					    <div role="tabpanel" class="tab-pane active" id="myArticles">
					    	<div class="container">
					    		<a href="{{ url('/addArticle') }}" type="button" class="btn-block text-center" style="width:25%; color:white">Add new article</a>
					    		@if($articles->count()>0)
						    		@foreach($articles as $article)
						    		<div class="row data-myArticle">
						    			<div class="col-md-3">
						    				<img src="{{ $article->article_detail->first()->cover }}">
						    			</div>
						    			<div class="col-md-6">
						    				<h3><a href="{{url('showArticle',$article->id)}}">{{$article->title}}</a></h3>
						    				<p>{{$article->content}}</p>
						    			</div>
						    		</div>
						    		@endforeach
						    	@else
						    	<br><br>
						    	<p>You haven't posted any articles yet.</p>
					    		@endif
					    	</div>
					    </div>
					    <div role="tabpanel" class="tab-pane" id="myPollings">
					    	<div class="container">
					    		<a href="{{ url('/addPolling') }}" type="button" class="btn-block text-center" style="width:25%; color:white">Add new polling</a>
					    		<div class="data-myPolling">
					    			<h5><a href="">Topik polling 1</a></h5>
					    			<h5><a href="">Topik polling 2</a></h5>
					    		</div>
					    	</div>
					    </div>
					</div>

				</div>
			</div>
		</div>
	</section>
@endsection

@section('customjs')
	<script type="text/javascript">
		$(document).ready(function() {
			$("#edit-button").on('click', function() {
				document.getElementById('profile-pic').style.filter = "blur(3px)";
				document.getElementById('upload-button').style.display="block";
				document.getElementById('edit-button').style.display="none";
				document.getElementById('save-button').style.display="block";
			});

			// var readURL = function(input) {
		 //        if (input.files && input.files[0]) {
		 //            var reader = new FileReader();

		 //            reader.onload = function (e) {
		 //                $('.profile-pic').attr('src', e.target.result);
		 //            }
		 //            reader.readAsDataURL(input.files[0]);
		 //        }
		 //    }

		 //    $(".file-upload").on('change', function(){
		 //    	readURL(this);
		 //    });
		    
		 //    $("#upload-button").on('click', function() {
		 //       $(".file-upload").click();
		 //    });

		});
	</script>
@endsection