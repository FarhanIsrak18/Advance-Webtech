@extends('layout.layoutproduct')
@section('contents')
<html>
<h1>This is delete page</h1>
<form action='' method=''>
    ID:<input type='text' name='id'><br>
    Name:<input type='text' name='name'><br>
    Price:<input type='text' name='price'><br>
    quantity:<input type='number'><br>
    Description:<textarea></textarea><br>
    <input type='submit' name='submit' value='update'>
</form>
</html>
@endsection