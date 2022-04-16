<!DOCTYPE html>
<html>
    <head>
        <base href="/public">
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>I-MED User Cart</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">


<header class="top-header">
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<!--<a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="image"></a>-->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                <h1 align="center"><b>Welcome to your Cart, User! &nbsp&nbsp&nbsp &nbsp  &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp</b></h1>    
				<ul class="navbar-nav">
                        <!-- <li><a class="nav-link active" href="#home">Home</a></li>
                        <li><a class="nav-link" href="#about">About Us</a></li>
                        <li><a class="nav-link" href="#services">Medicine Inventory</a></li>
						<li><a class="nav-link" href="#appointment">Order</a></li>
                        <li><a class="nav-link" href="#contact">Contact</a></li> -->
                        <li>
                        @auth    
                        <a class="nav-link" href="{{url('/showcart', Auth::user()->id)}}">Cart [{{$count}}]</a>
                        @endauth

                        @guest
                        Cart[0]
                        @endguest
                        </li>
                        <li>
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <li>
                                <x-app-layout>
    
                                </x-app-layout>
                                </li>
                        @else
                            <li><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">LOG IN</a></li>
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">REGISTER</a></li>
                        @endif
                        @endauth
                        </div>
                        @endif
            </li>

                </ul>
                </div>
            </div>
        </nav>
	</header>
	
    <div id="appointment" class="appointment-main">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Cart</h2>
						<p>Check your Items </p>
					</div>
				</div>
			</div>
        </div>
   
    <div align="center">
        <table bgcolor="#AFEEEE"; border=3px> 
            <tr align="center">
                <th style="padding: 30px">Medicine Name</th>
                <th style="padding: 30px">Price</th>
                <th style="padding: 30px">Quantity</th>
                <th style="padding: 30px">Remove Item</th>
                
            </tr>
            <form action="{{url('placeorder')}}" method="POST">
            @csrf
            @foreach($data as $data)
            
            <tr align="center">
                <td style="padding: 30px"><input type="text" name="medname[]" value="{{$data->title}}" hidden>{{$data->title}}</td>
                <td style="padding: 30px"><input type="text" name="price[]" value="{{$data->price}}" hidden>tk. {{$data->price}}</td>
                <td style="padding: 30px"><input type="text" name="quantity[]" value="{{$data->quantity}}" hidden>{{$data->quantity}}</td>
                
            </tr>
            
            @endforeach

            @foreach($d as $d)
            <tr style="position: relative; top: -250px; right: -400px">
                <td style="padding: 20px"><a href="{{url('/remove',$d->id)}}" class="btn btn-info">Remove</a></td>
            </tr>
            @endforeach
            
        </table>
        <div align="center" style="padding: 10px">
        <button class="btn btn-info" type="button" style="color: black" id="placeorder">Place Order</button>
    </div>
    <div id="show" align="center" style="padding: 10px; display: none">
        <div style="padding: 10px">
        <label>Name</label>
        <input type="text" name="name" placeholder="Name">
        </div>
        <div style="padding: 10px">
        <label>Contact</label>
        <input type="number" name="phone" placeholder="Contact">
        </div>
        <div style="padding: 10px">
        <label>Address</label>
        <input type="text" name="address" placeholder="Address">
        </div>
        <div style="padding: 10px">
        <input class="btn btn-success" type="submit" style="color: black" value="Confirm Order">
        <button class="btn btn-info" style="color: black" type="button" id="close">Close</button>
    </div>
        
    </div>
</form>
    











    <a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>


    <script type="text/javascript">

        $("#placeorder").click(

            function(){

                $("#show").show();
            }
        );

        $("#close").click(

        function(){

            $("#show").hide();
        }
        );
    </script>
	<!-- ALL JS FILES -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script> 
	<script src="js/slider-index.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/TweenMax.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
	<script src="js/isotope.min.js"></script>	
	<script src="js/images-loded.min.js"></script>	
    <script src="js/custom.js"></script>


</body>
    
</html>