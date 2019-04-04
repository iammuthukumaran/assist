<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Basic Website</title>

    <!-- Fonts -->
    <link href="/css/app.css" rel='stylesheet' type='text/css'>



</head>
<body>
	@include('inc.navbar')

    <div class="container">
        @if(Request::is('website'))
        @include('inc.showcase')
        @endif
        <div class="row">
            <div class="col-md-8">
	 @yield('content')
    </div>
    
        <div class="col-md-4">
	
     </div>
     </div>
     </div>
     <footer  id="footer" class="text-center">
        <p>Copyright 2019 @ tech</p>
    </footer>

</body>
   </html>