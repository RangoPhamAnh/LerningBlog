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