@extends('layouts.landing')

@section('content')
	@if(!empty($article))
	<section id="articles-detail">
		<div class="container">
			<h2 style="margin-bottom:50px; font-weight:bold">{{$article->title}}</h2>
			<div class="col-md-11">
				<div class="rating text-right" style="font-size: 18px;letter-spacing: 2px">
					<b>Rating : {{$article->avg_rating}}</b>
				</div>
			</div>

			<div class="row article-content">
				<p>
					{!!nl2br($article->content)!!}
				</p>
			</div>
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
			<p>Creator : {{$article->author}}</p>
			<div class="rating-box">
				
				<div class="row" style="padding-top: 30px;">
					<div class="col-md-10">
						<b>Your Rating:</b>
					</div>
					
				</div>
				<div class="row">
					<div style="padding-top: 15px;">
						@if (Auth::check())
							<div class="star_rating col-md-3">
								<div class="star_icon" id="currentpoint1"></div>
								<div class="star_icon" id="currentpoint2"></div>
								<div class="star_icon" id="currentpoint3"></div>
								<div class="star_icon" id="currentpoint4"></div>
								<div class="star_icon" id="currentpoint5"></div>
							</div>
							<div class="col-md-3">
								<button class="btn-primary btn-block col-md-3" onclick="showModalRating({{$article->id}})">Rate This!</button>
							</div>
						@else
							Please log in to rate this article..
						@endif
					</div>
				</div>
				
			</div>
			<!--comment box-->
			<div class="row" id="comment-box">
				<div class="form-group">
				
					{!! Form::label('comment', 'Comment :') !!}
					@foreach ($comments as $comment)
						<div class="row">
	                    	<div class="col-md-1 user-comment-photo">
	                    		<img src="{{asset('images/profile_test.jpg')}}">
	                    	</div>
	                    	<div class="col-md-11 user-comment">
	                    		<b>{{$comment->user->name}}</b>	- <small>{{$comment->created_at}}</small>
	                    		@if (Auth::check())
	                    			@if ($comment->user->id == Auth::user()->id)
			                            <button class="btn btn-xs" specification="button" onclick="showModalDelete({{$comment->id}})">
			                                <span class="fa fa-trash"></span>
			                            </button>
				                    @endif
	                    		@endif
	                    		<p>{{$comment->comment}}</p>
	                    	</div>

	                    </div>
	                    
					@endforeach
					@if (Auth::check())
						{!! Form::open(['action' => ['PageController@submitComment',$article->id], 'files' => 'true']) !!}
							<div class="col-md-10">
								<div class="form-group">
								
			                        {!! Form::textarea('content', null, array('class' => 'form-control', 'placeholder'=>'Enter Your Comment', 'id' => 'description_box','required')) !!}
			                    </div>
							</div>
							<div class=" col-md-2 comment-button">
								<button class="btn-block">Comment</button>
							</div>

			            {!! Form::close() !!}
			        @else
			        	<div class="col-md-10">Please log in to comment this article..</div>
					@endif
				
			</div>

		</div>
	</section>
	@endif
@endsection
@include('modal-delete')
@include('modal-giverating')
@section('customjs')
<script type="text/javascript">
	var article_id = {{$article->id}};

	if({{Auth::check()}}){
		for(i=1;i<={{$current_user_rating}};i++){
			document.getElementById("currentpoint"+i).style.backgroundPosition="top";
		}
	}

    function showModalDelete(id){
        $('#modalDelete').modal('show');
        $('#modalDeleteForm').attr('action', '{{url("/showArticle")}}/'+id);
    }
    function showModalRating(id){
        $('#modalGiveRating').modal('show');
    }

    function hoverrating(ctt){
    	clearhoverrating();
		for(i=1;i<=ctt;i++){
			document.getElementById("starpoint"+i).style.backgroundPosition="top";
		}
	}
	function clearhoverrating(){
		for(i=1;i<=5;i++){
			document.getElementById("starpoint"+i).style.backgroundPosition="bottom";
		}
	}
	function submitrate(rate){
		window.location = "{{url('/giveRating/')}}/"+article_id+"/"+rate;
	}

</script>
@endsection