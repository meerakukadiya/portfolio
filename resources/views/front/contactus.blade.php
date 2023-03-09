<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Meera Kukadiya">
    <title>MK PORTFOLIO</title>
    <!-- font icons -->
    <link rel="stylesheet" href="{{asset('public/assets/vendors/themify-icons/css/themify-icons.css')}}">

	<link rel="stylesheet" href="{{asset('public/assets/css/portfolio.css')}}">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page Navbar -->
    <nav class="custom-navbar" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="logo" href="{{url('/')}}">MK Portfolio</a>         
            <ul class="nav">
                <li class="item">
                    <a class="link" href="{{url('/')}}">Home</a>
                </li>
                <li class="item">
                    <a class="link" href="{{url('/')}}">About</a>
                </li>
                <li class="item">
                    <a class="link" href="{{url('/')}}">Portfolio</a>
                </li>
                <li class="item">
                    <a class="link" href="{{url('/contact-us')}}">Contact</a>
                </li>
                
            </ul>
            <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
                <div class="hamburger-box">
                  <div class="hamburger-inner"></div>
                </div>
            </a>
        </div>          
    </nav><!-- End of Page Navbar -->

    <!-- page header -->
    <header id="home" class="contact-header">
        <div class="overlay"></div>
        <div class="header-content container">
        </div>              
    </header><!-- end of page header -->

  
  

    <!-- contact section -->
     <section class="section" id="contact">
        <div class="container text-center">
            <h6 class="section-title mb-5">Contact Me</h6>

            <form action="" class="contact-form col-md-10 col-lg-8 m-auto">
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <input type="text" size="50" class="form-control" placeholder="Your Name" required>                 
                    </div>
     
  
                    <div class="form-group col-sm-6">
                        <input type="email" class="form-control" placeholder="Enter Email"requried>                 
                    </div>
                    <div class="form-group col-sm-12">
                        <textarea name="comment" id="comment" rows="6"   class="form-control" placeholder="Write Something"></textarea>
                    </div>
                    <div class="form-group col-sm-12 mt-3">
                        <input type="submit" value="Send Message" class="btn btn-outline-primary rounded">                  
                    </div>
                </div>  
            </form>
        </div>
</section> 

    <!-- footer -->
    <div class="container">
        <footer class="footer">       
            <p class="mb-0">Copyright <script>document.write(new Date().getFullYear())</script> &copy; <a href="http://www.devcrud.com">Meera Kukadiya</a></p>
            <div class="social-links text-right m-auto ml-sm-auto">
                <a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-dribbble"></i></a>
            </div>
        </footer>
    </div> <!-- end of page footer -->
	
	<!-- core  -->
    <script src="{{asset('public/assets/vendors/jquery/jquery-3.4.1.js')}}"></script>
    <script src="{{asset('public/assets/vendors/bootstrap/bootstrap.bundle.js')}}"></script>

    <!-- bootstrap 3 affix -->
	<script src="{{asset('public/assets/vendors/bootstrap/bootstrap.affix.js')}}"></script>

    <!-- Mk js -->
    <script src="{{asset('public/assets/js/portfolio.js')}}"></script>
    <script>


</script>

</body>
</html>
