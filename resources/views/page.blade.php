<!DOCTYPE html>
<html lang="en">

<head>
   
<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href= "{{URL::asset('vendor1/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
   <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
   <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
   <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href= "{{URL::asset('vendor1/font-awesome/css/font-awesome.min.css')}}">
    <!-- Google fonts - Roboto-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="{{URL::asset('vendor1/bootstrap-select/css/bootstrap-select.min.css')}}">
    <!-- owl carousel-->
    <link rel="stylesheet" href="{{URL::asset('vendor1/owl.carousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{URL::asset('vendor1/owl.carousel/assets/owl.theme.default.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{URL::asset('css/style.default.css')}}" id="theme-stylesheet">
    
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
   <title>Shop Homepage</title>

  <!-- Bootstrap core CSS -->
  <link href= "{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  

  <!-- Custom styles for this template -->
  <link href="{{URL::asset('css/shop-homepage.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
       <img class="logo" src="{{URL::asset('assets/images/Capture.png')}}" alt="logo" height="72" width="250">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link" href="{{URL('login')}}">LOGIN</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('/')}}">HOME
              
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{URL('/page')}}">Shop</a>
             <span class="sr-only">(current)</span>
          </li>
          
          
        </ul>
      </div>
    </div>
  </nav>
 <br><br>

  <!-- Page Content -->
  <div class="container">

   <div class="row">

       <!-- MENUS AND FILTERS-->  
 <div class="col-lg-2">
      <div class="panel panel-default sidebar-menu"><br>
                <div class="panel-heading">
                  <h3 class="h4 panel-title"><b>Categories</b></h3>
                </div>
                <div class="panel-body">
                  <ul class="nav nav-pills flex-column text-sm category-menu">
                    <li class="nav-item"><a href="shop-category.html" class="nav-link d-flex align-items-center justify-content-left "><span>Men </span><span class="badge badge-secondary"></span></a>
                      <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="{{url('accessory')}}" class="nav-link">T-shirts</a></li>
                        <li class="nav-item"><a href="{{url('accessory')}}" class="nav-link">Shirts</a></li>
                        <li class="nav-item"><a href="{{url('accessory')}}" class="nav-link">Pants</a></li>
                        <li class="nav-item"><a href="{{url('accessory')}}" class="nav-link">Accessories</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a href="shop-category.html" class="nav-link active d-flex align-items-center justify-content-left"><span>Ladies  </span><span class="badge badge-light"></span></a>
                      <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="{{url('getaccessory')}}" class="nav-link">T-shirts</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Skirts</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Pants</a></li>
                        <li class="nav-item"><a href="{{url('accessory')}}" class="nav-link">Accessories</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a href="shop-category.html" class="nav-link d-flex align-items-center  justify-content-left"><span>Kids  </span><span class="badge badge-secondary"></span></a>
                      <ul class="nav nav-pills flex-column">
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">T-shirts</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Skirts</a></li>
                        <li class="nav-item"><a href="shop-category.html" class="nav-link">Pants</a></li>
                        <li class="nav-item"><a href="{{url('accessory')}}" class="nav-link">Accessories</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
      </div>      
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="assets/img/portfolio/first.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="assets/img/portfolio/second.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="assets/img/portfolio/third.png" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
          <div class="row">
             @foreach ($produits as $produit)
      
      
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="{{ url('produits/'.$produit->id)}}"><img src="{{asset('uploads/produit/'.$produit->image)}}"  alt="image" height=200px width=255px></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">{{$produit->designation}}</a>
                </h4>
                <h5>${{$produit->price}}</h5>
                <p class="card-text">{{$produit->description}}</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>
    
        @endforeach
         </div>
        



    <div>
      {{$produits->links()}}
    </div>

  <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
           <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
        </div>
    <!-- /.container -->
    </footer>

      <!-- Bootstrap core JavaScript -->
      <script src="{{URL::asset('vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
