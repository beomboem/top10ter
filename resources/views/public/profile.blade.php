@extends('layouts.landing')

@section('content')
	<section id="profile">
		<div class="container">
			<div class="row">
				<div class = "photo-profile col-md-2">
					<img src="{{asset('images/profile_test.jpg')}}">
					<div class="profile-data">
						<h5><b>Chanhee, Kang</b></h5>
						<p>@KChanhee</p>
						<small>kchan@naver.com</small>
					</div>
				</div>
				<div class="profile-detail col-md-10">
					<p class="text-right">Points : 99</p>
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#myArticles" aria-controls="myArticles" role="tab" data-toggle="tab">My Articles</a></li>
					    <li role="presentation"><a href="#myPollings" aria-controls="myPollings" role="tab" data-toggle="tab">My Pollings</a></li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
					    <div role="tabpanel" class="tab-pane active" id="myArticles">
					    	<div class="container">
					    		<button class="btn-block" style="width:25%">Add new article</button>
					    		<div class="row data-myArticle">
					    			<div class="col-md-3">
					    				<img src="{{asset('images/articles/1/1_2016-12-07.jpg')}}">
					    			</div>
					    			<div class="col-md-6">
					    				<h3><a href="">Title Articles 1</a></h3>
					    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					    				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					    				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					    				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					    				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					    				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					    			</div>
					    		</div>
					    		<div class="row data-myArticle">
					    			<div class="col-md-3">
					    				<img src="{{asset('images/articles/10/10_2016-12-07.jpg')}}">
					    			</div>
					    			<div class="col-md-6">
					    				<h3><a href="">Title Articles 2</a></h3>
					    				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					    				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					    				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					    				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					    				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					    				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					    			</div>
					    		</div>
					    	</div>
					    </div>
					    <div role="tabpanel" class="tab-pane" id="myPollings">
					    	<div class="container">
					    		<button class="btn-block" style="width:25%">Add new polling</button>
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