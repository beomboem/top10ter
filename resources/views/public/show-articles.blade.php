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
		</div>
	</section>
	@endif
@endsection

@section('customjs')

@endsection