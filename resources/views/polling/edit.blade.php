@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading wht-bg">Edit Polling</div>

                <div class="panel-body">
                     {!! Form::model($polling,[
                      'method' => 'patch',
                      'action' => ['Admin\PollingController@update',$polling->id]]) !!}
                    <div class="form-group">
                        {!! Form::label('polling_question', 'Question') !!}
                        {!! Form::text('question', $polling->question, ['class' => 'form-control', 'placeholder' => "Enter Question",'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('option1', 'Option 1') !!}
                        {!! Form::text('option1', $polling->option[0]->answer, ['class' => 'form-control', 'placeholder' => "Enter Option 1",'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('option2', 'Option 2') !!}
                        {!! Form::text('option2', $polling->option[1]->answer, ['class' => 'form-control', 'placeholder' => "Enter Option 2",'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('option3', 'Option 3') !!}
                        {!! Form::text('option3', $polling->option[2]->answer, ['class' => 'form-control', 'placeholder' => "Enter Option 3",'required']) !!}
                    </div>
                    <div class="form-group">
                       {!! Form::submit('Submit', ['class' => 'btn btn-primary form-control']) !!}
                   </div>
                   {!! Form::close() !!}
                   {{-- @include('errors.list') --}}
               </div>
           </div>
       </div>
   </div>
</div>
@endsection

@section('custom-js')
  <script type="text/javascript">
    CKEDITOR.replace('description_box');
  </script>
  
@endsection


