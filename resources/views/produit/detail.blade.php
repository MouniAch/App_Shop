<!DOCTYPE html>
<html>
<head>
	<title>Product Detail Page</title>
	<!-- Font Awesome, Style -->
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/style1.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/owl.carousel.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{URL::asset('css/smoothproducts.css')}}">
  
   <!-- Bootstrap core CSS -->
   <link href= "{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="{{URL::asset('css/shop-homepage.css')}}" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">ShopNow</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{url('/')}}">Home
              
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{URL('/page')}}">Shop</a>
             <span class="sr-only">(current)</span>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Categories</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
<!-- Product Detail Page Start -->
<div class="product-detail">
		<div class="container">
			<div class="product-detail-left">
				<div class="sp-loading">
					<img src="{{URL::asset('assets/img/sp-loading.gif')}}">
					Loading Images
				</div>
				<div class="sp-wrap">
					<a href="{{URL::asset('uploads/produit/'.$produit->image)}}"><img src="{{asset('uploads/produit/'.$produit->image)}}"  alt="image" height=500px width=400px></a>
				
				</div>
			</div>
			<div class="product-detail-right">
			    <form method="post" action="{{url('form')}}">
				   @csrf
				  <input type="hidden" value="{{$produit->id}}" name="id">
				 <h3>{{$produit->designation}}<br><small>Code : GA00006488</small></h3>
				 <h5><b>Price : </b> <i class="fas fa-dollar-sign"></i>{{$produit->price}}</h5>
				 <h5><b>Brand : </b> Aggroom</h5>
				<h5><b>Warranty : </b> 12 Months</h5>
				<h5><b>Delivery of the city : </b> Free</h5>
				<h5><b>Payment : </b> At home</h5>
				<h5><b>Availability : </b> in Stock</h5>
				<h5><b>Quantity :</b></h5> <div class="col-md-3"> <select name="quantity" id="quantity" class="custom-select">
		    	  	   	   		    @for($i = 1 ; $i<6; $i++)
                                      <option value="{{$i}}"> {{$i}} </option>
		    	  	   	   		    @endfor
																
				            </select>
				        </div></h5>
				
				
				<button type="submit" class="buynow"><i class="fas fa-shopping-cart"></i> Buy Now</button>
			 </form>
      </div>
      
      <!-- Jquery V.3.3.1 -->
<script src="{{URL::asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.cycle.js')}}"></script>
<script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
<script src="{{URL::asset('js/smoothproducts.min.js')}}"></script>
<script>
	$("#sliderShuffle").cycle({
		next: '#next',
		prev: '#prev'
	});
	
	$('.owl-carousel').owlCarousel({
		items:4,
		loop:true,
		margin:15,
		autoplay:true,
		autoplayTimeout:3000, //3 Second
		nav:true,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			600:{
				items:3,
				nav:true
			},
			1000:{
				items:4,
				nav:true
			}
		}

	});

	$(function(){
		$(".topbar ul li").click(function(){
			$(".topbar ul li").not(this).find("ul").slideUp();
			$(this).find("ul").slideToggle();
		});
		$(".topbar ul li ul li, productCategories ul li .megamenu").click(function(e){
			e.stopPropagation();	
		});
		$(".productCategories ul li").click(function(){
			$(".productCategories ul li").not(this).find(".megamenu").hide();
			$(this).find(".megamenu").toggle();
		});
		$(".otherInfoBody").hide();
		$(".otherInfoHandle").click(function(){
			$(".otherInfoBody").slideToggle();
		});
		$(".signBtn").click(function(){
			$("body").css("overflow", "hidden");
			$(".loginBox").slideDown();
		});
		$(".closeBtn").click(function(){
			$("body").css("overflow", "visible");
			$(".loginBox").slideUp();
		});
		$(".productViewBtn").click(function(e){
			e.preventDefault();
			$("body").css("overflow", "hidden");
			$(".productViewBox").slideDown();
		});
		$(".productViewBox-closeBtn").click(function(){
			$("body").css("overflow", "visible");
			$(".productViewBox").slideUp();
		});

		$(".sp-wrap").smoothproducts();
	});
</script>
</body>
</html>