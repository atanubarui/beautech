
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Parlour a Beauty and Spa Category Responsive Web Template | About :: W3layouts</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{url('/frontend/assets/css/style-starter.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
  </head>
  <body id="home">
<section class=" w3l-header-4 header-sticky">
    <header class="absolute-top">
        <div class="container">
       
      @include("inc/menu")


    </div>
      </header>
</section>

<script src="{{url('/frontend/assets/js/jquery-3.3.1.min.js')}}"></script> <!-- Common jquery plugin -->
<!--bootstrap working-->
<script src="{{url('/frontend/assets/js/bootstrap.min.js')}}"></script>
<!-- //bootstrap working-->
<!-- disable body scroll which navbar is in active -->
<script>
$(function () {
  $('.navbar-toggler').click(function () {
    $('body').toggleClass('noscroll');
  })
});
</script>
<!-- disable body scroll which navbar is in active -->

<!-- breadcrumbs -->
    <section class="w3l-inner-banner-main">
        <div class="about-inner about ">
            <div class="container">   
                <div class="main-titles-head text-center">
                <h3 class="header-name ">
					About Us
                </h3>
                <p class="tiltle-para  ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic fuga sit illo modi aut aspernatur tempore laboriosam saepe dolores eveniet.</p>
            </div>
</div>
   </div>
   <div class="breadcrumbs-sub">
   <div class="container">   
    <ul class="breadcrumbs-custom-path">
        <li class="right-side propClone"><a href="index.html" class="">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
        <li class="active ">About</li>
    </ul>
</div>
</div>
        </div>
    </section>
<!-- breadcrumbs //-->


<div class="container">
    
<div class="row">
@foreach($srv as $s)
  <div class="col-md-3">
  <div class="card" >
  <img style="height:240px" class="card-img-top" src="{{url('/service_img')}}/{{$s->simg}}" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">{{$s->sname}}</h4>
    <p class="card-text">{{$s->scharge}}</p>

	<div class="row">
		<div class="col-md-6">
    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{$s->service_id}}">Details</a>
  </div>
 
	<div class="col-md-6">
    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#book{{$s->service_id}}">Book</a>
  </div>
</div>
</div>

</div>
</div>



<div class="modal" id="myModal{{$s->service_id}}">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Description</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
		<p>{!!$s->sdetails!!}</p>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  <div class="modal" id="book{{$s->service_id}}">

    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Book</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
		<form action="{{url('/booking')}}" method="post" >
			@csrf
		<input type="hidden" name="sn" class="form-control" value="{{$s->sname}}"/>
			<p>Name</p>
			<p><input type="text" name="name" class="form-control"/></p>
			<p>Email</p>
			<p><input type="email" name="email" class="form-control" /></p>
			<p>Contact No.</p>
			<p><input type="text" name="contact" class="form-control"/></p>
			<p>Address</p>
			<p><input type="text" name="address" class="form-control"/></p>
			<p style="margin-top:30px;"><input class="btn btn-success" type="submit" name="save" value="Submit"/></p>
			

		</form>
 		</div>
    
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>


@endforeach
</div>
</div>




<!-- @footbat -->
<section class="w3l-footer-29-main">
	<div class="footer-29 py-5">
	  <div class="container py-lg-4">
		<div class="row footer-top-29">
		  <div class="col-lg-3 col-md-6 col-sm-8 footer-list-29 footer-1">
			<h6 class="footer-title-29">Contact Us</h6>
			<ul>
			  <li>
				<span class="fa fa-map-marker"></span> <p>IHRM college gate, Tegharia, Rajpur Sonarpur, West Bengal - 700150<br>West Bengal - 700150, India.

  
					</p>
			  </li>
			  <li><span class="fa fa-phone"></span><a href="tel:+7-800-999-800"> +(91)77186 46746 <br>+(91)93308 57090</a></li>
			  <li><span class="fa fa-envelope-open-o"></span><a href="mailto:parlour@mail.com" class="mail">
				  atanubarui7021@gmail.com</a></li>
			</ul>
		  </div>
		  <div class="col-lg-2 col-md-6 col-sm-4 footer-list-29 footer-2 ">
  
			<ul>
			  <h6 class="footer-title-29">Useful Links</h6>
			  <li><a href="http://localhost:8000/">Home</a></li>
			  <li><a href="http://localhost:8000/about">About</a></li>
			  <li><a href="http://localhost:8000/gallery"> Gallery posts</a></li>
			  <li><a href="http://localhost:8000/contact">Contact us</a></li>
			</ul>
		  </div>
		  <div class="col-lg-3 col-md-6 col-sm-5 footer-list-29 footer-3">
			  <h6 class="footer-title-29">Information</h6>
			  <div class="footer-post mb-3">
				<a href="blog-single.html">Hair Salon</a>
				<p class="small"><span class="fa fa-clock-o"></span> March 9, 2020</p>
			  </div>
			  <div class="footer-post">
				<a href="blog-single.html">Skin Care
					and FaceMasks</a>
				<p class="small"><span class="fa fa-clock-o"></span> March 9, 2020</p>
			  </div>
			  
		  </div>
		  <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4">
			<h6 class="footer-title-29">Newsletter </h6>
			<p>Enter your email and receive the latest news from us.
			 We'll never share your email address</p>
  
			<form action="#" class="subscribe" method="post">
			  <input type="email" name="email" placeholder="Your Email Address" required="">
			  <button><span class="fa fa-envelope-o"></span></button>
			</form>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  <section class="w3l-footer-29-main w3l-copyright">
	<div class="container">
	  <div class="row bottom-copies">
		<p class="col-lg-8 copy-footer-29">© 2020  Parlour. All rights reserved | Designed by ATANU & PRIYANKA</p>
  
		<div class="col-lg-4 main-social-footer-29">
		  <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
		  <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
		  <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
		  <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
		</div>
  
	  </div>
	</div>
  </section>
<!-- move top -->
<button onclick="topFunction()" id="movetop" title="Go to top">
	<span class="fa fa-long-arrow-up"></span>
</button>
<script>
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function () {
		scrollFunction()
	};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			document.getElementById("movetop").style.display = "block";
		} else {
			document.getElementById("movetop").style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script>
<!-- /move top -->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> 

</body>  

</html> 











<!---
<section class="w3l-footer-29-main">
	<div class="footer-29 py-5">
	  <div class="container py-lg-4">
		<div class="row footer-top-29">
		  <div class="col-lg-3 col-md-6 col-sm-8 footer-list-29 footer-1">
			<h6 class="footer-title-29">Contact Us</h6>
			<ul>
			  <li>
				<span class="fa fa-map-marker"></span> <p>California, #32841 block,<br>#221DRS 75 West Rock, Maple Building,

  
					UK.</p>
			  </li>
			  <li><span class="fa fa-phone"></span><a href="tel:+7-800-999-800"> +(21)-255-999-8888</a></li>
			  <li><span class="fa fa-envelope-open-o"></span><a href="mailto:parlour@mail.com" class="mail">
				  parlour@mail.com</a></li>
			</ul>
		  </div>
		  <div class="col-lg-2 col-md-6 col-sm-4 footer-list-29 footer-2 ">
  
			<ul>
			  <h6 class="footer-title-29">Useful Links</h6>
			  <li><a href="http://localhost:8000/">Home</a></li>
			  <li><a href="about.html">About</a></li>
			  <li><a href="blog.html"> Gallery</a></li>
			  <li><a href="contact.html">Contact us</a></li>
			</ul>
		  </div>
		  <div class="col-lg-3 col-md-6 col-sm-5 footer-list-29 footer-3">
			  <h6 class="footer-title-29">Latest from blog</h6>
			  <div class="footer-post mb-3">
				<a href="blog-single.html">Hair Salon</a>
				<p class="small"><span class="fa fa-clock-o"></span> March 9, 2020</p>
			  </div>
			  <div class="footer-post">
				<a href="blog-single.html">Skin Care
					and FaceMasks</a>
				<p class="small"><span class="fa fa-clock-o"></span> March 9, 2020</p>
			  </div>
			  
		  </div>
		  <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4">
			<h6 class="footer-title-29">Newsletter </h6>
			<p>Enter your email and receive the latest news from us.
			 We'll never share your email address</p>
  
			<form action="#" class="subscribe" method="post">
			  <input type="email" name="email" placeholder="Your Email Address" required="">
			  <button><span class="fa fa-envelope-o"></span></button>
			</form>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  <section class="w3l-footer-29-main w3l-copyright">
	<div class="container">
	  <div class="row bottom-copies">
		<p class="col-lg-8 copy-footer-29">© 2020  Parlour. All rights reserved | Designed by <a href="https://w3layouts.com">W3layouts</a></p>
  
		<div class="col-lg-4 main-social-footer-29">
		  <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
		  <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
		  <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
		  <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
		</div>
  
	  </div>
	</div>
  </section>
-----------------------


move top

<button onclick="topFunction()" id="movetop" title="Go to top">
	<span class="fa fa-long-arrow-up"></span>
</button>
<script>
	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function () {
		scrollFunction()
	};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			document.getElementById("movetop").style.display = "block";
		} else {
			document.getElementById("movetop").style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script>


-------------------------------------------/move top

<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>