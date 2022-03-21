@extends('main')

@section('title1','| Create New Post')

@section('stylesheet')

@section('frontend')
                        <div class="content2">
                                <h1>Create New Post</h1>
                                <hr>
                                {!! Form::open(['route' => 'posts.store']) !!}
                                    {{ Form::label('title','Title:') }}
                                    {{ Form::text('title',null,array('class'=>'form-control')) }}
                                    
                                    {{Form::label('body',"Post Body:")}}
                                    {{Form::textarea('body',null,array('class' => 'form-control'))}}

                                    {{ Form::submit('Create Post', array('class' => 'btn-success btn-lg btn-block','style' => 'margin-top: 20px;')) }}
                                {!! Form::close() !!}
                        </div>

@endsection