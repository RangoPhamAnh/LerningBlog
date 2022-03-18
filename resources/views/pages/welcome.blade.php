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
                            <div class ="post">
                                <h3>Post title</h3>
                                <p>Laravel does not require you to use a specific JavaScript framework or library to build your applications</p>
                                <a href="#" class="btn btn-primary">Read more</a>
                            </div>
                            <hr>
                            <div class ="post">
                                <h3>Post title</h3>
                                <p>Laravel does not require you to use a specific JavaScript framework or library to build your applications</p>
                                <a href="#" class="btn btn-primary">Read more</a>
                            </div>
                            <hr>
                            <div class ="post">
                                <h3>Post title</h3>
                                <p>Laravel does not require you to use a specific JavaScript framework or library to build your applications</p>
                                <a href="#" class="btn btn-primary">Read more</a>
                            </div>
                            <hr>
                            <div class ="post">
                                <h3>Post title</h3>
                                <p>Laravel does not require you to use a specific JavaScript framework or library to build your applications</p>
                                <a href="#" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-md-offset-1">
                            <h2>Side bar</h2>
                        </div>
                    </div>
@endsection