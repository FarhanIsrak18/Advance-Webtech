<html>
    <body>
        <div>
            <a href="{{route('registration')}}">register</a>
            <a href="/student/create">create</a>
            <a href="/student/edit">edit</a>
            <a href="/student/delete">delete</a>
            <a href="/student/get">get</a>
            <a href="{{route('login')}}">login</a>
        </div>
      

        @yield('content')

        <div>copyright@copy</div>
    </body>
</html>