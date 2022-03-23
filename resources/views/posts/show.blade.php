@extends('main')

@section('title',' | View Post')

@section('frontend')
    <div class="row">
        <div class="col-md-8">
            <h1>   {{ $post -> title }} </h1>
            <p class="lead">{{ $post -> body }}</p>
        </div>

        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <label>Url:</label>
                    <p><a href="{{ url($post->slug) }}">{{ url($post->slug) }}</a></p>
                </dl>
                <dl class="dl-horizontal">
                    <label>Created At:</label>
                    <p>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</p>
                </dl>

                <dl class="dl-horizontal">
                    <label>Last Updated:</label>
                    <p>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</p>
                </dl>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.edit', 'Edit', array($post->id),array('class' => 'btn btn-primary btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                            {{ Form::open(array('method' => 'DELETE', 'route' => array('posts.destroy', $post->id), 'onsubmit' => 'return confirm_delete()')) }} 
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                            {{ Form::close() }}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {{ Html::linkRoute('posts.index', '<< All Posts',[],['class'=>'btn btn-default btn-block btn-h1-spacing']) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    

@endsection