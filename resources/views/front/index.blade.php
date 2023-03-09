<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Mk landing page.">
    <meta name="author" content="Meera Kukadiya">
    <title>MK PORTFOLIO</title>
    <!-- font icons -->
    <link rel="stylesheet" href="{{asset('public/assets/vendors/themify-icons/css/themify-icons.css')}}">
    <!-- Bootstrap + MK main styles -->
	<link rel="stylesheet" href="{{asset('public/assets/css/portfolio.css')}}">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page Navbar -->
    <nav class="custom-navbar" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="logo" href="{{url('/')}}">MK Portfolio</a>         
            <ul class="nav">
                <li class="item">
                    <a class="link" href="#home">Home</a>
                </li>
                <li class="item">
                    <a class="link" href="#about">About</a>
                </li>
                <li class="item">
                    <a class="link" href="#portfolio">Portfolio</a>
                </li>
                <!-- <li class="item">
                    <a class="link" href="#testmonial">Testmonial</a>
                </li> -->
                <!-- <li class="item">
                    <a class="link" href="#blog">Blog</a>
                </li> -->
                <li class="item">
                    <a class="link" href="{{URL::To('contact-us')}}">Contact</a>
                </li>
                <!-- <li class="item ml-md-3">
                    <a href="components.html" class="btn btn-primary">Components</a>
                </li> -->
            </ul>
            <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
                <div class="hamburger-box">
                  <div class="hamburger-inner"></div>
                </div>
            </a>
        </div>          
    </nav><!-- End of Page Navbar -->

    <!-- page header -->
    <header id="home" class="header">
        <div class="overlay"></div>
        <div class="header-content container">
            <h1 class="header-title">
                <span class="up">HI!</span>
                <span class="down">I am Meera Kukadiya</span>
            </h1>
            <p class="header-subtitle">BACKEND DEVELOPER</p>            

            <!-- <button class="btn btn-primary">Visit My Works</button> -->
            <!-- <button class="btn btn-info">Visit My Works</button> -->
        </div>              
    </header><!-- end of page header -->

    <!-- about section -->
    <section class="section pt-0" id="about">
        <!-- container -->
        <div class="container text-center">
            <!-- about wrapper -->
            <div class="about">
            <div class="about-img-holder">
                    <img src="public/assets/imgs/meera_png.png" class="about-img" alt="image">
                </div>
                <div class="about-caption">
                    <p class="section-subtitle">Who Am I ?</p>
                    <h2 class="section-title mb-3">About Me</h2>
                    <p>
                    Hi, My name is Meera Kukadiya. I carry 4+ years of quality experience in PHP and JS Frameworks. I have excellent knowledge in Frontend frameworks and Backend framework like Laravel and WordPress in PHP and React JS , Angular JS and Node JS framework with my SQL, MongoDB, and PgAdmin , MySQL Workbench . 
                        <br>I have experience in all types of applications like E-Commerce, Tracking, Social Media . I have good skill for development, I can develop web application in providing flexible work with timing, and more security maintain in my work.              
                    </p>
                    <button class="btn-rounded btn btn-outline-primary mt-4 download-cv">Download CV</button>
                </div>              
            </div><!-- end of about wrapper -->
        </div><!-- end of container -->
    </section> <!-- end of about section -->

    <!-- service section -->
    <section class="section" id="service">
        <div class="container text-center">
            <p class="section-subtitle">What I Give You?</p>
            <h6 class="section-title mb-6">Services</h6>
            <!-- row -->
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="{{asset('public/assets/imgs/download (1).png')}}"  class="icon">
                            <h6 class="title">NODE JS</h6>
                            <p class="subtitle">Node.js is an open-source and cross-platform JavaScript runtime environment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="{{asset('public/assets/imgs/laravel.svg')}}"  class="icon">
                            <h6 class="title">LARAVEL</h6>
                            <p class="subtitle">Laravel is a web application framework with expressive, elegant syntax.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="{{asset('public/assets/imgs/react.jpg')}}"  class="icon">
                            <h6 class="title">REACT JS</h6>
                            <p class="subtitle">ReactJS is a declarative, efficient, and flexible JavaScript library for building reusable UI components.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="{{asset('public/assets/imgs/wordpress.webp')}}"  class="icon">
                            <h6 class="title">WORDPRESS</h6>
                            <p class="subtitle">The most important features of WordPress are that you can create a dynamic website without any programming and design knowledge.</p>
                        </div>
                    </div>
                </div>
              
                
            </div><!-- end of row -->
            <br/>
            <div class="row">
            <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="{{asset('public/assets/imgs/UIUX.webp')}}"  class="icon">
                            <h6 class="title">UI/UX</h6>
                            
                            <p class="subtitle">The term UI/UX stands for user interface/user experience design and refers to the practice of designing digital products with a user-first approach.</p>
                        </div>
                    </div>
                </div>
</div>
        </div>
    </section><!-- end of service section -->

    <!-- portfolio section -->
    <section class="section" id="portfolio">
        <div class="container text-center">
            <p class="section-subtitle">What I Did ?</p>
            <h6 class="section-title mb-6">Portfolio</h6>
            <!-- row -->
            <div class="row">
                <div class="col-md-4">
                    <a href="https://www.orbofi.com/" class="portfolio-card" target="_blank">
                        <img src="{{asset('public/assets/imgs/react_js.png')}}" class="portfolio-card-img">    
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>React JS</h5>
                                <!-- <p class="font-weight-normal">Category: Web Templates</p> -->
                            </span>                         
                        </span>                     
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="https://dribbble.com/Meera_Kukadiya/shots" class="portfolio-card" target="_blank">
                        <img class="portfolio-card-img" src="{{asset('public/assets/imgs/ui_ux.png')}}" class="img-responsive rounded" >
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>UI/UX</h5>
                                <!-- <p class="font-weight-normal">Category: Web Templates</p> -->
                            </span>                         
                        </span>                         
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="https://cygnilab.com/" class="portfolio-card" target="_blank">
                        <img class="portfolio-card-img" src="{{asset('public/assets/imgs/wordpress.png')}}" class="img-responsive rounded" >    
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>WordPress</h5>
                                <!-- <p class="font-weight-normal">Category: Web Templates</p> -->
                            </span>                         
                        </span>                     
                    </a>
                </div>
            </div><!-- end of row -->
            <br/>
            <div class="row">
 <div class="col-md-4">
                    <a href="#" class="portfolio-card" target="_blank">
                        <img class="portfolio-card-img" src="{{asset('public/assets/imgs/node_js.png')}}" class="img-responsive rounded" >    
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Node JS</h5>
                                <!-- <p class="font-weight-normal">Category: Web Templates</p> -->
                            </span>                         
                        </span>                     
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="portfolio-card" target="_blank">
                        <img class="portfolio-card-img" src="{{asset('public/assets/imgs/laravel.png')}}" class="img-responsive rounded" >    
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>Laravel</h5>
                                <!-- <p class="font-weight-normal">Category: Web Templates</p> -->
                            </span>                         
                        </span>                     
                    </a>
                </div>
</div>
        </div><!-- end of container -->
    </section> <!-- end of portfolio section -->

    <!-- section -->
    <section class="section-sm bg-primary">
        <!-- container -->
        <div class="container text-center text-sm-left">
            <!-- row -->
            <div class="row align-items-center">
                <div class="col-sm offset-md-1 mb-4 mb-md-0">
                    <h6 class="title text-light">Want to work with me?</h6>
                    <p class="m-0 text-light">Always feel Free to Contact & Hire me</p>
                </div>
                <div class="col-sm offset-sm-2 offset-md-3">
                    <a href="{{URL::To('contact-us')}}"><button class="btn btn-lg my-font btn-light rounded">Hire Me</button></a>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of section -->

    <!-- testimonial section -->
    <!-- <section class="section" id="testmonial">
        <div class="container text-center">
            <p class="section-subtitle">What Think Client About Me ?</p>
            <h6 class="section-title mb-6">Testmonial</h6>

          
            <div class="row">
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-card-img-holder">
                            <img src="{{asset('assets/imgs/avatar2.jpg')}}" class="testimonial-card-img" alt="image">                           
                        </div>
                        <div class="testimonial-card-body">
                            <p class="testimonial-card-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque doloribus autem aperiam earum nostrum omnis blanditiis corporis perspiciatis adipisci nihil.</p>
                            <h6 class="testimonial-card-title">Emily Reb</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-card-img-holder">
                            <img src="{{asset('assets/imgs/avatar3.jpg')}}" class="testimonial-card-img" alt="image">                        
                        </div>
                        <div class="testimonial-card-body">
                            <p class="testimonial-card-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque doloribus autem aperiam earum nostrum omnis blanditiis corporis perspiciatis adipisci nihil.</p>
                            <h6 class="testimonial-card-title">Emily Reb</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>  -->
    
    <!-- blog section -->
    <!-- <section class="section" id="blog">

        <div class="container text-center">
            <p class="section-subtitle">Recent Posts?</p>
            <h6 class="section-title mb-6">Blog</h6>
           
            <div class="blog-card">
                <div class="blog-card-header">
                    <img src="{{asset('assets/imgs/img-1.jpg')}}" class="blog-card-img" alt="image">
                </div>
                <div class="blog-card-body">
                    <h5 class="blog-card-title">Consectetur adipisicing elit</h6>

                    <p class="blog-card-caption">
                        <a href="#">By: Admin</a>
                        <a href="#"><i class="ti-heart text-danger"></i> 234</a>
                        <a href="#"><i class="ti-comment"></i> 123</a>
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet nesciunt qui sit velit delectus voluptates, repellat ipsum culpa id deleniti. Rerum debitis facilis accusantium neque numquam mollitia modi quasi distinctio.</p>

                    <p><b>Necessitatibus nihil impedit! Ex nisi eveniet, dolor aliquid consequuntur repudiandae.</b></p>
                    <p>Magnam in repellat enim harum omnis aperiam! Explicabo illo, commodi, dolor blanditiis cupiditate harum nisi vero accusamus laudantium voluptatibus dolores quae obcaecati.</p>

                    <a href="#" class="blog-card-link">Read more <i class="ti-angle-double-right"></i></a>
                </div>
            </div>
            <div class="blog-card">
                <div class="blog-card-header">
                    <img src="{{asset('assets/imgs/img-2.jpg')}}" class="blog-card-img" alt="image">
                </div>
                <div class="blog-card-body">
                    <h5 class="blog-card-title">Explicabo illo</h6>

                    <p class="blog-card-caption">
                        <a href="#">By: Admin</a>
                        <a href="#"><i class="ti-heart text-danger"></i> 456</a>
                        <a href="#"><i class="ti-comment"></i> 264</a>
                    </p>
                    
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit excepturi laborum enim, vitae ipsam atque eum, ad iusto consequuntur voluptas, esse doloribus. Perferendis porro quisquam vitae exercitationem aliquid, minus eos laborum repudiandae, cumque debitis iusto omnis praesentium? Laborum placeat sit adipisci illum tempore maxime, esse qui quae? Molestias excepturi corporis similique doloribus. Esse vitae earum architecto nulla non dolores illum at perspiciatis quod, et deleniti cupiditate reiciendis harum facere, delectus eum commodi soluta distinctio sit repudiandae possimus sunt. Ipsum, rem.</p>

                    <a href="#" class="blog-card-link">Read more <i class="ti-angle-double-right"></i></a>
                </div>
            </div>

        </div>
    </section> -->
    <!-- end of blog section -->

    <!-- contact section -->
    <!-- <section class="section" id="contact">
        <div class="container text-center">
            <p class="section-subtitle">How can you communicate?</p>
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
</section> -->

    <!-- footer -->
    <div class="container">
        <footer class="footer">       
            <p class="mb-0">Copyright <script>document.write(new Date().getFullYear())</script> &copy; <a href="http://www.devcrud.com">Meera Kukadiya</a></p>
            <div class="social-links text-right m-auto ml-sm-auto">
                <!-- <a href="javascript:void(0)" class="link"><i class="ti-facebook"></i></a> -->
                <!-- <a href="javascript:void(0)" class="link"><i class="ti-twitter-alt"></i></a> -->
                <!-- <a href="javascript:void(0)" class="link"><i class="ti-google"></i></a>
                <a href="javascript:void(0)" class="link"><i class="ti-pinterest-alt"></i></a> -->
                <!-- <a href="javascript:void(0)" class="link"><i class="ti-instagram"></i></a> -->
                <!-- <a href="javascript:void(0)" class="link"><i class="ti-rss"></i></a> -->
                <a href="https://dribbble.com/Meera_Kukadiya/shots" class="link"><i class="ti-dribbble"></i></a>
                <!-- <a href="javascript:void(0)" class="link"><i class="ti-fiverr"></i></a> -->
            </div>
        </footer>
    </div> <!-- end of page footer -->
	
	<!-- core  -->
    <script src="{{asset('public/assets/vendors/jquery/jquery-3.4.1.js')}}"></script>
    <script src="{{asset('public/assets/vendors/bootstrap/bootstrap.bundle.js')}}"></script>

    <!-- bootstrap 3 affix -->
	<script src="{{asset('public/assets/vendors/bootstrap/bootstrap.affix.js')}}"></script>

    <!-- MK js -->
    <script src="{{asset('public/assets/js/portfolio.js')}}"></script>
    <script>
$(document).on('click','.download-cv',function(){

      
    var data = '';
    $.ajax({
            url: "{{URL::TO('download-resume')}}",
            method: 'GET',
            data: data,
            xhrFields: {
                responseType: 'blob'
            },
            success:function(response)
            {
                var blob = new Blob([response]);
                var link= document.createElement('a');
                link.href=window.URL.createObjectURL(blob); 
                link.download="Meera-Kukadiya"+ ".pdf";
                link.click();

            },
            error: function(response) {
            }
        });
})

</script>

</body>
</html>
