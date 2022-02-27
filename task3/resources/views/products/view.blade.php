@extends('layout.layoutproduct')
@section('contents')
<h1>THIs is view page</h1>
<table table-border:1px>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Price</th>
    <th>quantity</th>
    <th>description</th>
</tr>
@foreach($products as $p) 
<tr>
    <td>{{$p->id}}</td>
    <td>{{$p->name}}</td>
    <td>{{$p->price}}</td>
    <td>{{$p->qty}}</td>
    <td>{{$p->description}}</td>
</tr>
@endforeach
</table>
@endsection