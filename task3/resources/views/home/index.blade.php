@extends('layout.app')
@section('content')
                                    <!-- this is home page -->
    <h1>This is  Home page</h1>
    <?php


foreach($courses as $cs => $cs1){
    echo "Course:$cs<br> " ;
          foreach($cs1 as $cs2 ){
              echo "$cs2<br> ";
          }
    
}
echo "<br>";
?>
    
@endsection
 