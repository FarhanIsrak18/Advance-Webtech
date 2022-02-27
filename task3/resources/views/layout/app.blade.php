<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
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