@extends('layout.app')
@section('content')
<table class='table table-bordered'>
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>  
    @foreach($depts as $d) 
      <tr>
       <td>{{$d->id}}</td> 
       <td><a href ="{{route('department.details',['id'=>encrypt($d->id)])}}">{{$d->name}}</a></td> 
      </tr>
    @endforeach
</table>

@endsection