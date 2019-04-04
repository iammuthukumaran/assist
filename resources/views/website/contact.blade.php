@extends('layouts.app')

@section('content')
<h1>contact us</h1>
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Nullam mollis. Ut justo. Suspendisse potenti.</p>

<form action="/contact" method="POST">
    <div class="form-group">
      <label for="name">Email:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Password:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter password" name="email">
    </div>
    <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
@endsection