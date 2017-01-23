@extends('layouts.landing')

@section('content')
	<section id="profile">
		<div class="container">
			<div class="row">
				<div class = "photo-profile col-md-2">
					<img src="{{asset('images/profile_test.jpg')}}">
					<div class="profile-data">
						<h5><b>{{ Auth::user()->name }}</b></h5>
						<!-- <p>@KChanhee</p> -->
						<small>{{ Auth::user()->email }}</small>
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

@endsection