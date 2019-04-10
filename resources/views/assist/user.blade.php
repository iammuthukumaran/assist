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
  <h2>click start to log in</h2>
  
<div class="timer well"></div>
<div id="demo"></div>
<p>
<button class="btn btn-default" id="ctime" onClick="$('.timer').countimer('start');">Start</button>
 <button class="btn btn-warning" onClick="$('.timer').countimer('stop');">Stop</button> 
 <button class="btn btn-success" onClick="$('.timer').countimer('resume');">Resume</button></p>
</div>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>

<script src="/js/ez.countimer.js"></script>
<script type="text/javascript">
    $( document ).ready(function() {
        $('.timer').countimer({
      autoStart : false
      });
    });
</script>
<script>
$(document).ready(function(){
  $("#ctime").click(function(){
  var currentdate = new Date(); 
    var datetime = "Log In Time: " + currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/" 
                + currentdate.getFullYear() + " @ "  
                + currentdate.getHours() + ":"  
                + currentdate.getMinutes() + ":" 
                + currentdate.getSeconds();


   document.getElementById("demo").innerHTML = (datetime);;
  });
});
</script>
  </div>
@endsection
</body>