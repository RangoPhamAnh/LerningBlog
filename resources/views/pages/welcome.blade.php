<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Blog</title>
        
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <!-- Boostrap -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 10vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .top-left{
                position: absolute;
                left: 10px;
                top: 18px;
            }
            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 15px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }


            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif 
                <div class="top-left">
                    <div class="links">
                        <a><big>Laravel</big></a>
                        <a href="/">Home</a> 
                        <a href="/contact">Contact</a>
                        <a href="/about">About</a>
                    </div>
                </div>        
        </div>
        <div class="container">
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
         </div> 
    </body>
</html>
