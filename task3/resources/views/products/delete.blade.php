@extends('layout.layoutproduct')
@section('contents')
<html>
<h1>This is delete page</h1>
<form action='{{route("deletesubmit")}}' method='post'>
    {{@csrf_field()}}
    ID:<input type='text' name='id'><br>
    <input type='submit' name='submit' value='delete'>
</form>
</html>
@endsection