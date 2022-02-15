@extends('layout.layoutproduct')
@section('contents')

<html>
<h1>This is add page</h1>
<form action='{{route("login.submit")}}' method='post'>
    {{@csrf_field()}}
    Name:<input type='text' name='uname'value='{{old("uname")}}' >
    @error('uname')
    <span>{{$message}}</span>
    @enderror
    <br>Price:<input type='text' name='price'>
    @error('price')
    {{$message}}
    @enderror
    <br>quantity:<input type='number' name='qty'>
    @error('qty')
     {{$message}}
    @enderror
    <br>Description:<textarea name='des'></textarea>
    @error('des')
    {{$message}}
    @enderror
    <br><input type='submit' name='submit' value='add'>
</form>
</html>
@endsection