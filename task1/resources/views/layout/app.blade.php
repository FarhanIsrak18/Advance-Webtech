<html>
    <body>
        <div style="text-align:center">
            <a href="{{route('contacts')}}"> Contact us </a>
            <a href="{{route('home')}}"> Home page </a>
            <a href="{{route('login')}}"> login </a>
        </div>
      

        @yield('content')

        <div>copyright@copy</div>
    </body>
</html>