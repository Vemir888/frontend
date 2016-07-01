@extends('layouts.layout')

@section('navbar')
	{{--<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	    <div class="container">
	        <!-- Brand and toggle get grouped for better mobile display -->
	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a class="navbar-brand" href="#">Start Bootstrap</a>
	        </div>
	        <!-- Collect the nav links, forms, and other content for toggling -->
	        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	            <ul class="nav navbar-nav">
	                <li>
	                    <a href="#">About</a>
	                </li>
	                <li>
	                    <a href="#">Services</a>
	                </li>
	                <li>
	                    <a href="#">Contact</a>
	                </li>
	            </ul>
	        </div>
	        <!-- /.navbar-collapse -->
	    </div>
	    <!-- /.container -->
	</nav>--}}

@stop

@section('content')


	    <div class="container">

        <div class="row">

            <!-- <div class="col-md-2">
                <div class="list-group">
                    <a href="#" class="list-group-item">О ФОНДЕ</a>
                    <a href="#" class="list-group-item">АКЦИИ</a>
                    <a href="#" class="list-group-item">КАК ПОМОЧЬ</a>
                    <a href="#" class="list-group-item">НУЖНА ПОМОЩЬ</a>
                    <a href="#" class="list-group-item">КОНТАКТЫ</a>
                </div>
            </div> -->
            <div class="col-md-2 col-sm-2 col-xs-2">
                <div id="wrapper" class="active">
                  
                  <!-- Sidebar -->
                        <!-- Sidebar -->
                  <div id="sidebar-wrapper">
                  <ul id="sidebar_menu" class="sidebar-nav">
                       <li class="sidebar-brand"><a id="menu-toggle" href="#">Menu<span id="main_icon" class="glyphicon glyphicon-align-justify"></span></a></li>
                  </ul>
                    <ul class="sidebar-nav" id="sidebar">     
                        <li><a class="menu_item" href="{{url('/about-fond')}}">О ФОНДЕ</a><span data-toggle="collapse" data-target="#fond" class="sub_icon glyphicon glyphicon-triangle-bottom triangles"></span></li>
                        <ul class="sub-menu collapse" id="fond">
                          <li>New Service 1</li>
                          <li>New Service 2</li>
                          <li>New Service 3</li>
                        </ul>
                        <li data-toggle="collapse" data-target="#stocks"><a class="menu_item" href="{{url('/stocks')}}">АКЦИИ</a><span class="sub_icon glyphicon glyphicon-triangle-bottom triangles"></span></li>
                        <ul class="sub-menu collapse" id="stocks">
                          <li>New Service 1</li>
                          <li>New Service 2</li>
                        </ul>
                        <li data-toggle="collapse" data-target="#help"><a class="menu_item">КАК ПОМОЧЬ</a><span class="sub_icon glyphicon glyphicon-triangle-bottom triangles"></span></li>
                        <ul class="sub-menu collapse" id="help">
                          <li>New Service 1</li>
                          <li>New Service 2</li>
                          <li>New Service 3</li>
                        </ul>
                        <li data-toggle="collapse" data-target="#need_help"><a class="menu_item">НУЖНА ПОМОЩЬ</a><span class="sub_icon glyphicon glyphicon-triangle-bottom triangles"></span></li>
                        <ul class="sub-menu collapse" id="need_help">
                          <li>New Service 1</li>
                          <li>New Service 2</li>
                          <li>New Service 3</li>
                          <li>New Service 4</li>
                        </ul>
                        <li data-toggle="collapse" data-target="#contact"><a class="menu_item">КОНТАКТЫ</a><span class="sub_icon glyphicon glyphicon-triangle-bottom triangles"></span></li>
                        <ul class="sub-menu collapse" id="contact">
                          <li>New Service 1</li>
                          <li>New Service 2</li>
                          <li>New Service 3</li>
                        </ul>
                    </ul>
                  </div>
                  
                </div>
            </div>
            <div class="col-md-10 col-sm-10 col-xs-10">
                <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                       
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        {{-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> --}}
                            <img class="navbar_logo" width="70px" height="70px" src="assets/images/logo-images/MainLogo.png">
                        {{-- </div> --}}
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container -->
                </nav>
                <div class="row carousel-holder">

                    <div class="col-md-12 test">
                        {{-- <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="assets/images/slider-images/1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="assets/images/slider-images/2.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="assets/images/slider-images/3.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="assets/images/slider-images/4.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="assets/images/slider-images/5.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div> --}}
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                          <!-- Indicators -->
                          {{-- <ul class="carousel-indicators">
                            <li></li>
                            <li></li>
                          </ul> --}}

                        
                          <!-- Wrapper for slides -->
                          <div class="carousel-inner">
                            <div class="item active">
                              <img src="assets/images/slider-images/1.jpg" alt="...">
                              <div class="carousel-caption">
                                <h4>Все жизни имеют равные значения</h4>
                                <div class="buttons pull-right">
                                    <a class="slider-left" href="#carousel-example-generic" data-slide="prev">
                                        <span class="glyphicon glyphicon-menu-left "></span>
                                    </a>
                                    <a class="slider-right" href="#carousel-example-generic" data-slide="next">
                                        <span class="glyphicon glyphicon-menu-right"></span>
                                    </a>
                                </div>
                              </div>
                            </div>
                            <div class="item">
                              <img src="assets/images/slider-images/2.jpg" alt="...">
                              <div class="carousel-caption">
                                <h4>Все жизни имеют равные значения</h4>
                                <div class="buttons pull-right">
                                    <a class="slider-left" href="#carousel-example-generic" data-slide="prev">
                                        <span class="glyphicon glyphicon-menu-left"></span>
                                    </a>
                                    <a class="slider-right" href="#carousel-example-generic" data-slide="next">
                                        <span class="glyphicon glyphicon-menu-right"></span>
                                    </a>
                                </div>
                              </div>
                            </div>
                            <div class="item">
                              <img src="assets/images/slider-images/3.jpg" alt="...">
                              <div class="carousel-caption">
                                <h4>Все жизни имеют равные значения</h4>
                                <div class="buttons pull-right">
                                    <a class="slider-left" href="#carousel-example-generic" data-slide="prev">
                                        <span class="glyphicon glyphicon-menu-left "></span>
                                    </a>
                                    <a class="slider-right" href="#carousel-example-generic" data-slide="next">
                                        <span class="glyphicon glyphicon-menu-right"></span>
                                    </a>
                                </div>
                              </div>
                            </div>
                            <div class="item">
                              <img src="assets/images/slider-images/4.jpg" alt="...">
                              <div class="carousel-caption">
                                <h4>Все жизни имеют равные значения</h4>
                                <div class="buttons pull-right">
                                    <a class="slider-left" href="#carousel-example-generic" data-slide="prev">
                                        <span class="glyphicon glyphicon-menu-left "></span>
                                    </a>
                                    <a class="slider-right" href="#carousel-example-generic" data-slide="next">
                                        <span class="glyphicon glyphicon-menu-right"></span>
                                    </a>
                                </div>
                              </div>
                            </div>
                            <div class="item">
                              <img src="assets/images/slider-images/5.jpg" alt="...">
                              <div class="carousel-caption">
                                <h4>Все жизни имеют равные значения</h4>
                                <div class="buttons pull-right">
                                    <a class="slider-left" href="#carousel-example-generic" data-slide="prev">
                                        <span class="glyphicon glyphicon-menu-left "></span>
                                    </a>
                                    <a class="slider-right" href="#carousel-example-generic" data-slide="next">
                                        <span class="glyphicon glyphicon-menu-right"></span>
                                    </a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <!-- Controls -->
                          
                        </div>

                </div>

                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                    	<img class="col-md-offset-5 col-md-2 col-sm-offset-5 col-sm-2 col-xs-offset-4 col-xs-4 second_logo" src="assets/images/logo-images/SecondLogo.png">
                    	<div class="col-md-12 col-sm-12 col-xs-12 main_page_text">
	                    	<b>ГРОЗНЫЙ</b>
	                    	<p>-создай свой профиль-</p>
                    	</div>
                    	<div class="col-md-offset-4 col-md-4 col-sm-offset-4 col-sm-4 col-xs-offset-2 col-xs-8 main_page_text_2">
                    		<p>Только высшая цель, имеющая святые помыслы, достойна жить, рождая Великое. Имя Великому - "Грозный"</p>
                    	</div>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <script type="text/javascript">
      $('span').on('click', function() {
        $('.menu_item').attr('href', '');
      })
    </script>
@stop

@section('footer')
      <!-- /.container -->

      <div class="container">

          <hr>

          <!-- Footer -->
          <footer class="pull-right">
              <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <p>Copyright © Your Website 2016</p>
                  </div>
              </div>
          </footer>

      </div>
      <!-- /.container -->

      <!-- jQuery -->
@stop



