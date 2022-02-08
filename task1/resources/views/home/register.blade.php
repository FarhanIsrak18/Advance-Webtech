
@extends('layout.app')
@section('content')

<html>
    <form action="" method="post">
        Enter name      <input type="text" value="" name="name">   <br>
        Enter email      <input type="email" value="" name="email">   <br>
        Enter dob      <input type="date" value="" name="dob">   <br>
        Enter password<input type="password" value="" name="password"><br>
        <input type="submit" value="submit" name="submit">
</form>
    </html>
    
@endsection
 