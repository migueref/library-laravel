<header class="header">
     <!-- Navbar -->
     <nav class="navbar navbar-default">
          <div class="container">

               <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                         <span class="sr-only">Toggle navigation</span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                    </button>
                    <a  href="index.html"><h1>Games <img src="images/c1.png" alt=" " /> Zone</h1></a>
               </div>

               <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li class="hover-effect"><a href="index.html">Home</a></li>
                         <li class="hover-effect"><a href="about.html">About</a></li>
                         <li class="hover-effect"><a href="games.html">Games</a></li>
                         <li class="hover-effect"><a href="news.html">News</a></li>
                         <li class="hover-effect"><a href="contact.html">Contact</a></li>
                    </ul>
               </div>

          </div>
     </nav>
     <!-- //Navbar -->

     <!-- Slider -->
     <div class="slider">
          <ul class="rslides" id="slider">
               <li>
                    <img src="{{ asset('images/banner3.jpg') }}" alt="" />
               </li>
          </ul>
     </div>
     <!-- //Slider -->

</header>
<!-- Banner-Slider-JavaScript -->
<script src="{{ asset('js/responsiveslides.min.js') }}"></script>
<script>
     $(function () {
          $("#slider").responsiveSlides({
               auto: true,
               nav: true,
               speed: 800,
               namespace: "callbacks",
               pager: true,
          });
     });
</script>
<!-- //Banner-Slider-JavaScript -->
