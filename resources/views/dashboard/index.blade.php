@extends('layouts.master')

@section('content')
	<div class="row">
  		<div class="col-md-3">
	        <div class="mini-stat clearfix">
	            <span class="mini-stat-icon purple"><i class="fa fa-th"></i></span>
	            <div class="mini-stat-info">
	                <span>100</span>
	                Unique Facts
	            </div>
	        </div>
	    </div>
	    <div class="col-md-3">
	        <div class="mini-stat clearfix">
	            <span class="mini-stat-icon orange"><i class="fa fa-gavel"></i></span>
	            <div class="mini-stat-info">
	                <span>50</span>
	                Polling
	            </div>
	        </div>
	    </div>
	    <div class="col-md-3">
	        <div class="mini-stat clearfix">
	            <span class="mini-stat-icon green"><i class="fa fa-users"></i></span>
	            <div class="mini-stat-info">
	                <span>20</span>
	                Users
	            </div>
	        </div>
	    </div>
	    <div class="col-md-3">
	        <div class="mini-stat clearfix">
	            <span class="mini-stat-icon orange"><i class="fa fa-user"></i></span>
	            <div class="mini-stat-info">
	                <span>5</span>
	                Authors
	            </div>
	        </div>
	    </div>
	</div>
@endsection

@section('custom-js')
    <script src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
	
	
@endsection