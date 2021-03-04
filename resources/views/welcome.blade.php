<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fundi Works Website</title>
        <!-- Fonts -->
        <!--
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        Styles 
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

    </body>
</html>
-->
<!DOCTYPE html>
<html>
<head>
	<!-- Fonts -->
        
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
 
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
</head>
<body>

 <div class="nav">
    <a href="" class="active">  Home</a> 
    	 <a href=""> About Us</a> 
    	 <a href=""> Services</a> 
    	 
    	 <a href=""> Contact Us</a>
</div>

<div class="image"></div>

	<div class="main">

<br>
<br>
   <h2> Find the best fundi on the go!</h2>

<br>
<div class=row>
	<div class="elec"></div>
	<div class="col-4">
<i class="material-icons">
power
</i>
<br>
ELECTRICITY
</div>
<div class="image2"></div>
	<div class="col-4">
		<i class="material-icons">format_paint</i>
		<br>
		PAINT
</div>
<div class="image2"></div>
	<div class="col-4">
		<i class="material-icons">home</i>
	<br>
		ROOFING		
</div>
</div>
<br>
<br>
<br>
<div class=row>
	<div class="image2"></div>
	<div class="col-4">
		<i class="material-icons">create</i>
		<br>
	RENOVATION.
</div>
<div class="image2"></div>
	<div class="col-4">
	<i class="material-icons">build</i>
			<br>
	PLUMBING.
</div>
<div class="image2"></div>
	<div class="col-4">
		<i class="material-icons">opacity</i>
				<br>
	SANITARY.
</div>
</div>

</body>
</html>