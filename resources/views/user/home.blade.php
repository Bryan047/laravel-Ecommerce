<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Sixteen Clothing HTML Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>แก่นจันทร์ <em>หมูกระทะ</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">หน้าหลัก
                  <span class="sr-only">(current)</span> 
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="products.html">เมนูอื่นๆ</a>
              </li>
              

              <li class="nav-item">
              
              @if (Route::has('login'))
                
                    @auth
                        <x-app-layout>
    
                        </x-app-layout>                    
                    @else
                        <li><a class="nav-link" href="{{ route('login') }}" >Log in</a></li>

                        @if (Route::has('register'))
                          <li><a class="nav-link" href="{{ route('register') }}" >Register</a></li>
                        @endif
                    @endauth
                
            @endif

        </li>

            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
          <h4>ร้านยอดนิยม</h4>
            <h2>ต้องแก่นจันทร์เนื้อย่าง</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>สะอาด</h4>
            <h2>ใส่ใจทุกรายละเอียกเพืดภัยของผู้บริโภค</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>โปรโมชันทุกวันพุธ</h4>
            <h2>ซื้อ 2 แถม 1 </h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    @include('user.product')


    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; ร้านแกนจันทร์หมูกะทะ
            
            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">genjun</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
