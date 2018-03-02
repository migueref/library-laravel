<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
     <title>@yield('title')</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <meta name="keywords" content="Games Zone Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
     Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
     <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
     <!-- css -->
     <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
     <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="screen" property="" />
     <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
     <!--// css -->
     <!-- font -->
     <link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
     <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
     <!-- //font -->
     <script src="{{ asset('js/jquery.min.js') }}"></script>
     <script src="{{ asset('js/bootstrap.js') }}"></script>

</head>
<body>
     @include('layouts.partials.header')
     <!-- trend -->
     <section class="trend-w3layouts">
     	<div class="container">
     		<h2>Trending Games</h2>
     		<ul id="flexiselDemo1">
     				<li>
     					<div class="trend-grid">
     						<h4>Racing Games</h4>
     						<img src="images/tg1.jpg" alt=" " class="img-responsive" />
     					</div>
     				</li>
     				<li>
     					<div class="trend-grid">
     						<h4>3D Games</h4>
     						<img src="images/tg2.jpg" alt=" " class="img-responsive" />
     					</div>
     				</li>
     				<li>
     					<div class="trend-grid">
     						<h4>Action Games</h4>
     						<img src="images/tg3.jpg" alt=" " class="img-responsive" />
     					</div>
     				</li>
     				<li>
     					<div class="trend-grid">
     						<h4>Toy Games</h4>
     						<img src="images/tg4.jpg" alt=" " class="img-responsive" />
     					</div>
     				</li>
     			</ul>
     						<script type="text/javascript">
     							$(window).load(function() {
     								$("#flexiselDemo1").flexisel({
     									visibleItems: 4,
     									animationSpeed: 1000,
     									autoPlay: true,
     									autoPlaySpeed: 3000,
     									pauseOnHover: true,
     									enableResponsiveBreakpoints: true,
     									responsiveBreakpoints: {
     										portrait: {
     											changePoint:480,
     											visibleItems: 2
     										},
     										landscape: {
     											changePoint:640,
     											visibleItems:3
     										},
     										tablet: {
     											changePoint:768,
     											visibleItems: 4
     										}
     									}
     								});

     							});
     					</script>
     					<script type="text/javascript" src="js/jquery.flexisel.js"></script>
     	</div>
     </section>
     <!-- //trend -->


     <!-- services-->
     <main class="services-agileits-w3layouts">
     	<div class="container">
               @yield('content')
     		<div class="clearfix"></div>
     	</div>
     </main>
     <!-- //services-->

     <!-- new games -->
     <section class="new-w3-agile">
     	<div class="container">
     		<h3>New Games</h3>
     		<div class="col-md-3 new-grid-w3l view view-eighth">
     			<img src="images/ng1.jpg" alt=" " />
     			<div class="mask">
     				<a href="single.html"><h4>Click here</h4></a>
     				<p>To learn more about this</p>
     			</div>
     		</div>
     		<div class="col-md-3 new-grid-w3l view view-eighth">
     			<img src="images/ng2.jpg" alt=" " />
     			<div class="mask">
     				<a href="single.html"><h4>Click here</h4></a>
     				<p>To learn more about this</p>
     			</div>
     		</div>
     		<div class="col-md-3 new-grid-w3l view view-eighth">
     			<img src="images/ng3.jpg" alt=" " />
     			<div class="mask">
     				<a href="single.html"><h4>Click here</h4></a>
     				<p>To learn more about this</p>
     			</div>
     		</div>
     		<div class="col-md-3 new-grid-w3l view view-eighth">
     			<img src="images/ng4.jpg" alt=" " />
     			<div class="mask">
     				<a href="single.html"><h4>Click here</h4></a>
     				<p>To learn more about this</p>
     			</div>
     		</div>
     		<div class="col-md-3 new-grid-agile view view-eighth">
     			<img src="images/ng5.jpg" alt=" " />
     			<div class="mask">
     				<a href="single.html"><h4>Click here</h4></a>
     				<p>To learn more about this</p>
     			</div>
     		</div>
     		<div class="col-md-3 new-grid-agile view view-eighth">
     			<img src="images/ng6.jpg" alt=" " />
     			<div class="mask">
     				<a href="single.html"><h4>Click here</h4></a>
     				<p>To learn more about this</p>
     			</div>
     		</div>
     		<div class="col-md-3 new-grid-agile view view-eighth">
     			<img src="images/ng7.jpg" alt=" " />
     			<div class="mask">
     				<a href="single.html"><h4>Click here</h4></a>
     				<p>To learn more about this</p>
     			</div>
     		</div>
     		<div class="col-md-3 new-grid-agile view view-eighth">
     			<img src="images/ng8.jpg" alt=" " />
     			<div class="mask">
     				<a href="single.html"><h4>Click here</h4></a>
     				<p>To learn more about this</p>
     			</div>
     		</div>
     		<div class="clearfix"></div>
     	</div>
     </section>
     <!-- //new games-->



     <div class="services-bottom-w3-agileits">
     		<div class="container">
     			<div class="wthree_info">
     				<section class="slider">
     					<div class="flexslider">
     						<ul class="slides">
     							<li>
     								<div class="wthree_info_grid">
     									<h3>Duis aute dolor reprehenderit</h3>
     									<p>Excepteur sint occaecat cupidatat non proident, sunt officia.</p>
     									<a href="single.html" class="learn">Learn More</a>
     								</div>
     							</li>
     							<li>
     								<div class="wthree_info_grid">
     									<h3>Aliquip commodo consequat</h3>
     									<p>Curabitur lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
     									<a href="single.html" class="learn">Learn More</a>
     								</div>
     							</li>
     							<li>
     								<div class="wthree_info_grid">
     									<h3>Quis autem vel eum iure ea</h3>
     									<p>Phasellus ornare consectetur erat, eu vehicula orci finibus at.</p>
     									<a href="single.html" class="learn">Learn More</a>
     								</div>
     							</li>
     						</ul>
     					</div>
     				</section>
     						<!-- flexSlider -->

     							<script defer src="js/jquery.flexslider.js"></script>
     							<script type="text/javascript">
     							$(window).load(function(){
     							  $('.flexslider').flexslider({
     								animation: "slide",
     								start: function(slider){
     								  $('body').removeClass('loading');
     								}
     							  });
     							});
     						  </script>
     						<!-- //flexSlider -->
     			</div>
     		</div>
     	</div>

     <!-- footer -->
     @include('layouts.partials.footer')

     <!-- //footer -->
</body>
</html>
