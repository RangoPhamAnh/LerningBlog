@extends('main')

@section('title1','| Create New Post')

@section('stylesheet')

    {!! Html::style('css/parsley.css') !!}


@endsection

@section('frontend')
                        <div class="content2">
                                <h1>Create New Post</h1>
                                <hr>
                                {!! Form::open(['route' => 'posts.store','data-parsley-validate' =>'']) !!}
                                    {{ Form::label('title','Title:') }}
                                    {{ Form::text('title',null, array('class'=>'form-control','required' => '', 'maxlength' => '255' ))  }}
                                    
                                    {{Form::label('body',"Post Body:")}}
                                    {{Form::textarea('body',null,array('class' => 'form-control','required' =>'' )) }}

                                    {{ Form::submit('Create Post', array('class' => 'btn-success btn-lg btn-block','style' => 'margin-top: 20px;')) }}
                                {!! Form::close() !!}
                        </div>

@endsection

@section('scripts')

    {!! Html::script('js/parsley.min.js') !!}

@endsection