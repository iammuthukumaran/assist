 <!DOCTYPE html>
<html lang="en">
<head>
  <title>dev app</title>
  <meta charset="utf-8">
  </head>
<body>
  @extends('layouts.app')

@section('content')
<div class="container"> 
  <h2>registration form</h2>
  <form method="POST" action="/assist/store">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="degree">E-Mail Address</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
     <div class="form-group">
      <label for="degree">Password</label>
      <input type="password" class="form-control" id="password" placeholder="password" name="password">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  </div>
@endsection
</body>