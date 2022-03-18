<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    @include('partials._head')
    </head>
    <body>
        @include('partials.javascript') 
        
        @include('partials._nav')

            <div class="container">
                @yield('frontend')

                @include('partials._footer')
            </div>
            @yield('scripts')
    </body>
</html>
