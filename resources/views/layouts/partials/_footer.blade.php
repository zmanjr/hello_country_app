<footer style="position : absolute;bottom:0;left: 42%;">
        <p>
            &copy; Copyright {{ date('Y')}} &middot; 
            @if(!Route::is('app_about'))
            <a href="{{route('app_about')}}">About Us</a>
            @endif
        </p>
</footer>