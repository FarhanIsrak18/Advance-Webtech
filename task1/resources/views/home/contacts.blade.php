
@extends('layout.app')
@section('content')
<h1 style=>Contacts</h1>
<?php


foreach($courses as $cs => $cs1){
    echo "$cs<br> " ;
          foreach($cs1 as $cs2 ){
              echo "$cs2<br> ";
          }
    
}
echo "<br>";
?>
    
@endsection
 