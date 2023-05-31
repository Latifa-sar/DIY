@extends('layouts.app')

@section('content')
<body>
   
    <!-- Navigation Block -->
    <div class="bloc l-bloc" id="nav-bloc">
        <div class="container">
            <nav class="navbar row">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Company</a>
                    <button id="nav-toggle" type="button" class="ui-navbar-toggle navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-1">
                    <ul class="site-navigation nav">
                        <li>
                            <a href="#">about</a>
                        </li>
                        <li>
                            <a href="#">team</a>
                        </li>
                        <li>
                            <a href="#">projects</a>
                        </li>
                        <li>
                            <a href="#">feed</a>
                        </li>
                        <li>
                            <a href="#">contacts</a>
                        </li>
              </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navigation Block END -->
    
    
    <!-- Carousel -->
    <div class="container">
      <div class="row">
        <!-- Carousel -->
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
              <div class="item active">
                <img src="https://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg" alt="First slide">
                        <!-- Static Header -->
                        <div class="header-text hidden-xs">
                            <div class="col-md-12 text-center">
                                <h2>
                                  <span>OUR VISION</span>
                                </h2>
                                <br>
                                <div class="">
                                    <a class="btn btn-theme btn-sm btn-min-block" href="#">Read More</a></div>
                            </div>
                        </div><!-- /header-text -->
              </div>
              <div class="item">
                <img src="https://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg" alt="Second slide">
                <!-- Static Header -->
                        <div class="header-text hidden-xs">
                            <div class="col-md-12 text-center">
                                <h2>
                                    <span>OUR VISION</span>
                                </h2>
                                <br>
                                <div class="">
                                    <a class="btn btn-theme btn-sm btn-min-block" href="#">Read More</a></div>
                            </div>
                        </div><!-- /header-text -->
              </div>
              <div class="item">
                <img src="https://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg" alt="Third slide">
                <!-- Static Header -->
                        <div class="header-text hidden-xs">
                            <div class="col-md-12 text-center">
                                <h2>
                                    <span>OUR VISION</span>
                                </h2>
                                <br>
                                <div class="">
                                    <a class="btn btn-theme btn-sm btn-min-block" href="#">Read More</a></div>
                            </div>
                        </div><!-- /header-text -->
              </div>
          </div>
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div><!-- Carousel END -->
      </div>
    </div>
    
    <!-- Posts -->
    
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-4">
                <div class="post news">
                    <div class="post-img-content">
                        <img src="http://placehold.it/460x250/e67e22/ffffff&text=Lorem" class="img-responsive" />
                        <span class="post-date">Lorem Ipsum</span>
                    </div>
                    <br>
                    <div class="content">
                        <div>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-5 col-md-5">
                <div class="post work">
                    <div class="post-img-content">
                        <img src="http://placehold.it/460x250/2980b9/ffffff&text=Lorem" class="img-responsive" />
                        <span class="post-date">Lorem Ipsum</span>
                    </div>
                    <br>
                    <div class="content">
                        <div>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3">
                <div class="post feed">
                    <div class="post-img-content">
                        <img src="http://placehold.it/460x250/47A447/ffffff&text=Lorem" class="img-responsive" />
                        <span class="post-date">Lorem Ipsum</span>
                    </div>
                    <br>
                    <div class="content">
                        <div>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    
<style>
    html,body {
  height:100%;
}
body{
	margin:0;
	padding:0;
  background:#FFF;
  -webkit-font-smoothing: antialiased;
}
a:hover{text-decoration: none;}


/* Globals type styling */

h1,h2,h3,h4,h5,h6,p,label,.btn,a{
	font-family:"Open Sans", sans-serif;
  color: #333;
} 

/* NavBar */

#nav-bloc {
  margin-top: 30px;
}

.navbar{
	margin-bottom: 0;
}
.navbar-brand{
	font-size: 25px;
	font-weight: bold;
	font-family: "Open Sans", Helvetica, Arial, sans-serif;
	font-weight: 600;
}
.navbar-brand img{
	width: auto;
	max-height: 40px;
	margin: -12px 5px 0 0;
}
.navbar-brand{
	padding: 15px 15px;
}
.navbar .nav{
	padding-top: 2px;
	margin-right: -16px;
	float:right;
}
.nav > li{
	float: left;
	margin-top: 4px;
	font-size: 16px;
}
.nav > li a:hover{
	background:transparent;
}
.navbar-toggle{
	margin: 12px;
	border: 0px;
}
.navbar-toggle:hover{
	background:transparent!important;
}
.navbar-toggle .icon-bar{
	background-color: rgba(0,0,0,.5);
	width: 26px;
}
.navbar-collapse.in {
overflow-y: visible;
float: left;
width: 100%;
}
.navbar-1 {
  float: right;
}
.site-navigation:first-child {
  float: left;
}
.site-navigation:nth-child(2) {
  float: right;
}
.site-navigation:nth-child(2) a {
  color: #ccc;
  font-size: 85%;
  padding-right: 0px;
}

.site-navigation .nav > .active{
  color: #333;
}


/* Carousel */

.container {
    margin-top: 20px;
}

/* Carousel Styles */
.carousel-indicators .active {
    background-color: #fff;
}

.carousel-inner img {
    width: 100%;
    max-height: 460px
}

.carousel-control {
    width: 0;
}

.carousel-control.left,
.carousel-control.right {
  opacity: 1;
  filter: alpha(opacity=100);
  background-image: none;
  background-repeat: no-repeat;
  text-shadow: none;
}

.carousel-control.left span {
  margin-left: 15px;
}

.carousel-control.right span {
  margin-right: 15px;
}

.carousel-control .glyphicon-chevron-left, 
.carousel-control .glyphicon-chevron-right, 
.carousel-control .icon-prev, 
.carousel-control .icon-next {
  position: absolute;
  top: 45%;
  z-index: 5;
  display: inline-block;
}

.carousel-control .glyphicon-chevron-left,
.carousel-control .icon-prev {
  left: 0;
}

.carousel-control .glyphicon-chevron-right,
.carousel-control .icon-next {
  right: 0;
}

.carousel-control.left span,
.carousel-control.right span {
  
}

.carousel-control.left span:hover,
.carousel-control.right span:hover {
  opacity: .7;
  filter: alpha(opacity=70);
}

/* Carousel Header Styles */
.header-text {
    position: absolute;
    top: 30%;
    left: 1.8%;
    right: auto;
    width: 96.66666666666666%;
    color: #fff;
}

.header-text h2 {
    font-size: 40px;
    font-weight: bold;
}

.header-text h2 span {
    padding: 10px;
    color: #fff;
}

.btn-min-block {
    min-width: 170px;
    line-height: 26px;
}

.btn-theme {
    color: #fff;
    background-color: transparent;
    border-color: #fff;
    margin-right: 15px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
}

.btn-theme:hover {
    color: #fff;
    background-color: transparent;
    border-color: #fff;
}



/* Posts */

.post {
  background-color: #FFF;
  overflow: hidden;
}
.post .content {
}

.post .post-img-content img {
  position: relative;
}

.post .post-date  {
  background-color: rgba(51, 51, 51, 0.58);
  position: absolute;
  bottom: 0px;
  width: 50%;
  color: #FFF;
  padding: 10px 15px;
}
.news .post-img-content {
  width: 350px;
  height: 180px;
  position: relative;
}

.work .post-img-content {
  width: 450px;
  height: 230px;
  position: relative;
}
.feed .post-img-content {
  width: 260px;
  height: 130px;
  position: relative;
}




/* Mobile adjustments */

@media (max-width: 768px)
{
    .bloc{
        text-align: center;
        -webkit-background-size: auto 200%;
        -moz-background-size: auto 200%;
        -o-background-size: auto 200%;
        background-size: auto 200%;
    }
    .navbar .nav{
        padding-top: 0;
        border-top:1px solid rgba(0,0,0,.2);
        float:none!important;
    }
    .nav > li{
        margin-top: 0;
        border-bottom:1px solid rgba(0,0,0,.1);
        background:rgba(0,0,0,.05);
        text-align: left;
        width:100%;
    }
    .nav > li:hover{
        background:rgba(0,0,0,.08);
    }
    .navbar-collapse{
        -webkit-box-shadow: none;
        box-shadow: none;
    }
    .btn.pull-left, .btn.pull-right{
       float:none!important; 
    }
    .bloc-xl,.bloc-lg{
        padding: 40px 0;
    }
    .a-block{
        text-align: center;
    }
}
    </style>    

    <script>

        // Startup Scripts
$(document).ready(function()
{
	$('.hero').css('height', ($(window).height() - $('header').outerHeight()) + 'px'); // Set hero to fill page height

	$('#scroll-hero').click(function()
	{
		$('html,body').animate({scrollTop: $("#hero-bloc").height()}, 'slow');
	});
});


// Window resize 
$(window).resize(function()
{
	$('.hero').css('height', ($(window).height() - $('header').outerHeight()) + 'px'); // Refresh hero height  	
}); 
    </script>
    @endsection
