@extends('layouts.layout')

@section('content')
<div class="store-show">
    <h1>Show for <h1>
    @foreach($test as $test)
   <form action="{{ route('changeQ', $test->id) }}" method="get" enctype="multipart/form-data">
   @csrf
     <label for="name">Question Topic:</label>
          <input type="text" id="topic" name="topic" value="{{$test->topic}}"></p>
     <label for="type">Question Type:</label>
          <select name="type" id="type">
               <option value="{{$test->type}}">{{$test->type}}</option>
               <option value="A">A</option>
               <option value="B">B</option>
               <option value="C">C</option>
          </select></p>
     <label for="price">Question users_level:</label>
          <input type="number" id="users_level" name="users_level" value="{{$test->users_level}}" disable></p>
     <label for="price">Question status:</label>
     <select name="status" id="status">
               <option value="{{$test->status}}">{{$test->status}}</option>
               <option value="Waiting">Waiting</option>
               <option value="Processing">Processing</option>
               <option value="Complete">Complete</option>
          </select></p>
     <label for="type">Question Description:</label>
           <input type="text" id="description" name="description" value="{{$test->description}}">  </p>
     
   <input type="submit" value="Send">
     
   </form>
   @endforeach
   <input type ="button" onclick="history.back()" value="Back"></input>
   <a href="/" class="back" style="color:black;font-size:10px;">回首頁</a>
   @for($i=0 ; $i<2 ; $i++)
         <br>
   @endfor
</div>

     
@endsection
