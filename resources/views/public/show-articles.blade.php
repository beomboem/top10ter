@extends('layouts.landing')

@section('content')
	@if(!empty($article))
	<section id="articles-detail">
		<div class="container">
			<h2 style="margin-bottom:50px; font-weight:bold">{{$article->title}}</h2>
			<div class="row">	
				<div class="col-md-2 articles-number">
					<img src="{{asset('img/number/num-10.png')}}" class="img-responsive" alt="number">
				</div>
				<div class=" col-md-10 articles-holder panel">
					<div class="col-md-3 articles-pic">
						<img src="{{$article->article_detail->first()->cover}}" class="img-responsive">
					</div>
					<div class="col-md-9 articles-description">
						<h5>{{$article->article_detail->first()->title}}</h5><br>
						<p>{!!nl2br($article->article_detail->first()->content)!!}</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 articles-number">
					<img src="{{asset('img/number/num-09.png')}}" class="img-responsive" alt="number">
				</div>
				<div class=" col-md-10 articles-holder panel">
					<div class="col-md-3 articles-pic">
						<img src="{{$article->article_detail->get(1)->cover}}" class="img-responsive">
					</div>
					<div class="col-md-9 articles-description">
						<h5>{{$article->article_detail->get(1)->title}}</h5><br>
						<p>{!!nl2br($article->article_detail->get(1)->content)!!}</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 articles-number">
					<img src="{{asset('img/number/num-08.png')}}" class="img-responsive" alt="number">
				</div>
				<div class=" col-md-10 articles-holder panel">
					<div class="col-md-3 articles-pic">
						<img src="{{$article->article_detail->get(2)->cover}}" class="img-responsive">
					</div>
					<div class="col-md-9 articles-description">
						<h5>{{$article->article_detail->get(2)->title}}</h5><br>
						<p>{!!nl2br($article->article_detail->get(2)->content)!!}</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 articles-number">
					<img src="{{asset('img/number/num-07.png')}}" class="img-responsive" alt="number">
				</div>
				<div class=" col-md-10 articles-holder panel">
					<div class="col-md-3 articles-pic">
						<img src="{{$article->article_detail->get(3)->cover}}" class="img-responsive">
					</div>
					<div class="col-md-9 articles-description">
						<h5>{{$article->article_detail->get(3)->title}}</h5><br>
						<p>{!!nl2br($article->article_detail->get(3)->content)!!}</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 articles-number">
					<img src="{{asset('img/number/num-04.png')}}" class="img-responsive" alt="number">
				</div>
				<div class=" col-md-10 articles-holder panel">
					<div class="col-md-3 articles-pic">
						<img src="{{$article->article_detail->get(4)->cover}}" class="img-responsive">
					</div>
					<div class="col-md-9 articles-description">
						<h5>{{$article->article_detail->get(4)->title}}</h5><br>
						<p>{!!nl2br($article->article_detail->get(4)->content)!!}</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 articles-number">
					<img src="{{asset('img/number/num-05.png')}}" class="img-responsive" alt="number">
				</div>
				<div class=" col-md-10 articles-holder panel">
					<div class="col-md-3 articles-pic">
						<img src="{{$article->article_detail->get(5)->cover}}" class="img-responsive">
					</div>
					<div class="col-md-9 articles-description">
						<h5>{{$article->article_detail->get(5)->title}}</h5><br>
						<p>{!!nl2br($article->article_detail->get(5)->content)!!}</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 articles-number">
					<img src="{{asset('img/number/num-06.png')}}" class="img-responsive" alt="number">
				</div>
				<div class=" col-md-10 articles-holder panel">
					<div class="col-md-3 articles-pic">
						<img src="{{$article->article_detail->get(6)->cover}}" class="img-responsive">
					</div>
					<div class="col-md-9 articles-description">
						<h5>{{$article->article_detail->get(6)->title}}</h5><br>
						<p>{!!nl2br($article->article_detail->get(6)->content)!!}</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 articles-number">
					<img src="{{asset('img/number/num-03.png')}}" class="img-responsive" alt="number">
				</div>
				<div class=" col-md-10 articles-holder panel">
					<div class="col-md-3 articles-pic">
						<img src="{{$article->article_detail->get(7)->cover}}" class="img-responsive">
					</div>
					<div class="col-md-9 articles-description">
						<h5>{{$article->article_detail->get(7)->title}}</h5><br>
						<p>{!!nl2br($article->article_detail->get(7)->content)!!}</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 articles-number">
					<img src="{{asset('img/number/num-02.png')}}" class="img-responsive" alt="number">
				</div>
				<div class=" col-md-10 articles-holder panel">
					<div class="col-md-3 articles-pic">
						<img src="{{$article->article_detail->get(8)->cover}}" class="img-responsive">
					</div>
					<div class="col-md-9 articles-description">
						<h5>{{$article->article_detail->get(8)->title}}</h5><br>
						<p>{!!nl2br($article->article_detail->get(8)->content)!!}</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2 articles-number">
					<img src="{{asset('img/number/num-01.png')}}" class="img-responsive" alt="number">
				</div>
				<div class=" col-md-10 articles-holder panel">
					<div class="col-md-3 articles-pic">
						<img src="{{$article->article_detail->get(9)->cover}}" class="img-responsive">
					</div>
					<div class="col-md-9 articles-description">
						<h5>{{$article->article_detail->get(9)->title}}</h5><br>
						<p>{!!nl2br($article->article_detail->get(9)->content)!!}</p>
					</div>
				</div>
			</div>

			<!--comment box-->
			<div class="row" id="comment-box">
				<div class="form-group">
					{!! Form::label('comment', 'Comment :') !!}
                    <div class="row">
                    	<div class="col-md-1 user-comment-photo">
                    		<img src="{{asset('images/profile_test.jpg')}}">
                    	</div>
                    	<div class="col-md-11 user-comment">
                    		<b>Nama</b>	- <small>22-1-2017</small>
                    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Negat enim summo bono afferre incrementum diem. Sed emolumenta communia esse dicuntur, recte autem facta et peccata non habentur communia. Bonum integritas corporis: misera debilitas.</p>
                    	</div>
                    </div>
                    <div class="row">
                    	<div class="col-md-1 user-comment-photo">
                    		<img src="{{asset('images/profile_test.jpg')}}">
                    	</div>
                    	<div class="col-md-11 user-comment">
                    		<b>Nama</b>	- <small>22-1-2017</small>
                    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Negat enim summo bono afferre incrementum diem. Sed emolumenta communia esse dicuntur, recte autem facta et peccata non habentur communia. Bonum integritas corporis: misera debilitas.</p>
                    	</div>
                    </div>
				</div>

				<div class="col-md-10">
					<div class="form-group">
                        {!! Form::textarea('content', null, array('class' => 'form-control', 'placeholder'=>'Enter Your Comment', 'id' => 'description_box')) !!}
                    </div>
				</div>
				<div class=" col-md-2 comment-button">
					<button class="btn-block">Comment</button>
				</div>
			</div>

		</div>
	</section>
	@endif
@endsection

@section('customjs')

@endsection