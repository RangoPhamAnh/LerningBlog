<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    @include('partials._head')
    </head>
    <body>

        
        @include('partials._nav')

            <div class="container">
                @include('partials._messages')

                @yield('frontend')

                @include('partials._footer')
            </div>
                @include('partials._javascript') 
                
                @yield('scripts')
    </body>
</html>
