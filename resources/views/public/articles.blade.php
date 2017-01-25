@extends('layouts.landing')

@section('content')
	<section id="articles-page">
		<div class="container">
			<h2>Articles</h2>
            <hr class="light-sep">
            <div class="articles-box">
                <div class="row wow fadeInUp" data-wow-delay=".3s">
                @if($articles->count()>0)
                    @foreach($articles as $article)
                    <div class="col-md-3">
                        <img src="{{ $article->article_detail->first()->cover }}">
                        <p class="text-center">
                        	<a href="{{url('showArticle',$article->id)}}">
                            	{{$article->title}}
                        	</a>
                        </p>
                    </div>
                    @endforeach
                @endif
                </div>
            </div>
		</div>
	</section>
@endsection

@section('customjs')

@endsection