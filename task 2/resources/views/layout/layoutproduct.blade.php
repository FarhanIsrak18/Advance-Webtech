<html>
    <body>
        <div>
            <a href="{{route('product')}}">product</a>
            <a href="{{route('add')}}">add</a>
            <a href="{{route('delete')}}">delete</a>
            <a href="{{route('edit')}}">edit</a>
            <a href="{{route('view')}}">view</a>          
        </div>
      

        @yield('contents')

        <div>copyright@copy</div>
    </body>
</html>