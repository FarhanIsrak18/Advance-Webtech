@extends('layout.layoutproduct')
@section('contents')
<html>
<h1>This is edit page</h1>
<form action='{{route("editsubmit")}}' method='post'>
{{@csrf_field()}}
    ID:<input type='text' name='id'><br>
    Name:<input type='text' name='uname'><br>
    Price:<input type='text' name='price'><br>
    quantity:<input type='number' name='qty'><br>
    Description:<textarea name='des'></textarea><br>
    <input type='submit' name='submit' value='update'>
</form>
</html>
@endsection