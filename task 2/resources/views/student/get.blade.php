@extends('layout.app')
@section('content')

<html>
    <h1>student name is:{{$student->name}}<h1>
    <h1>student ID is:{{$student->id}}<h1>
    <h1>student dept is:{{$student->dept}}<h1>
    <h1>result of the subtraction is:{{$sub}}<h1>
</html>
    
@endsection
 