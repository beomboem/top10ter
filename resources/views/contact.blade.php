@extends('layouts.app')

@section('content')

<div class="container">
	<div class="col">
	<div class="col-md-8" >
			<div class="panel">
				<div class="panel-heading">
					<h5>Contact Us </h5>
				</div>
				<div class="panel-body">
					<form>
					  	<div class="form-group">
					    	<label for="name">Name</label>
					    	<input type="text" class="form-control" id="name" placeholder="Name">
					  	</div>
					  	<div class="form-group">
					    	<label for="email">Email address</label>
					    	<input type="email" class="form-control" id="email" placeholder="Email">
					  	</div>
					  	<div class="form-group">
					  		<label for="message">Your Message</label>
					  		<textarea class="form-control" rows="3" id="message" placeholder="Your message here"></textarea>
					  	</div>
					  	<button type="submit" class="btn btn-default">Submit</button>
				  	</form>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="panel">
			<div class="panel-heading">
				<h5>Our Social Media </h5>
			</div>
			<div class="panel-body">

			</div>
		</div>
	</div>
	</div>
</div>

@endsection