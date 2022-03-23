@extends('main')

@section('title1' ,  '| Homepage')

@section('frontend')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="jumbotron">
                            <h1 class="display-4">Welcome to We Blog</h1>
                            <p class="lead">Thanks for our first Laravel project</p>
                            <hr class="my-4">
                            <a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-8">

                            @foreach($posts as $post)

                            <div class ="post">
                                <h3>{{ $post->title }}</h3>
                                <p>{{ substr($post->body, 0, 300) }} {{ strlen($post->body) > 300 ?"..." :"" }}</p>
                                <a href="#" class="btn btn-primary">Read more</a>
                            </div>
                            <hr>
                            @endforeach
                        </div>
                        <div class="col-md-3 col-md-offset-1">
                            <h2>Side bar</h2>
                        </div>
                    </div>
@endsection