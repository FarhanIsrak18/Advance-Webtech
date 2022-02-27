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
    <br>Price:<input type='text' name='price' value='{{old("price")}}'>
    @error('price')
    {{$message}}
    @enderror
    <br>quantity:<input type='number' name='qty' value='{{old("qty")}}'>
    @error('qty')
     {{$message}}
    @enderror
    <br>Description:<textarea name='des' value='{{old("des")}}'></textarea>
    @error('des')
    {{$message}}
    @enderror
    <br><input type='submit' name='submit' value='add'><input type='reset' value='clear'>
</form>
</html>
@endsection