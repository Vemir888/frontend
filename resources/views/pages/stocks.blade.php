@extends('layouts.layout')

@section('title')
	stocks
@stop


@section('navbar')
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	    <div class="container">
	        <!-- Brand and toggle get grouped for better mobile display -->
	        <div class="col-lg-2 col-lg-offset-5 col-md-2 col-md-offset-5 col-sm-2 col-sm-offset-5 col-xs-2 col-xs-offset-5">
	        	<div class="navbar-header">
	            	<a href="/"><img src="/assets/images/logo-images/MainLogo.png" class = "navbar-logo"></a>
	            </div>
	        </div>
	        <!-- Collect the nav links, forms, and other content for toggling -->
	        
	        <!-- /.navbar-collapse -->
	    </div>
	    <!-- /.container -->
	</nav>

@stop


@section('content')
	<div class="container-fluid stocks_cont">

	    <div class="row">

	        <div class="col-md-2 col-sm-2 col-xs-2 col-lg-2">
	            <div id="wrapper">
	              
	              <!-- Sidebar -->
	                    <!-- Sidebar -->
	              <div id="sidebar-wrapper">
	              <ul id="sidebar_menu" class="sidebar-nav">
	                   <li class="sidebar-brand"><a id="menu-toggle" href="#"><span id="main_icon" class="glyphicon glyphicon-menu-hamburger"></span></a></li>
	              </ul>
	                <ul class="sidebar-nav" id="sidebar">     
	                    <li><a class="menu_item" href="{{url('/about-fond')}}">О ФОНДЕ</a><span data-toggle="collapse" data-target="#fond" class="sub_icon glyphicon glyphicon-triangle-bottom triangles"></span></li>
	                    <ul class="sub-menu collapse" id="fond">
	                      <li>New Service 1</li>
	                      <li>New Service 2</li>
	                      <li>New Service 3</li>
	                    </ul>
	                    <li><a class="menu_item" href="{{url('/stocks')}}">АКЦИИ</a><span  data-toggle="collapse" data-target="#stocks" class="sub_icon glyphicon glyphicon-triangle-bottom triangles"></span></li>
	                    <ul class="sub-menu collapse" id="stocks">
	                      <li>New Service 1</li>
	                      <li>New Service 2</li>
	                    </ul>
	                    <li><a class="menu_item">КАК ПОМОЧЬ</a><span data-toggle="collapse" data-target="#help" class="sub_icon glyphicon glyphicon-triangle-bottom triangles"></span></li>
	                    <ul class="sub-menu collapse" id="help">
	                      <li>New Service 1</li>
	                      <li>New Service 2</li>
	                      <li>New Service 3</li>
	                    </ul>
	                    <li><a class="menu_item">НУЖНА ПОМОЩЬ</a><span data-toggle="collapse" data-target="#need_help" class="sub_icon glyphicon glyphicon-triangle-bottom triangles"></span></li>
	                    <ul class="sub-menu collapse" id="need_help">
	                      <li>New Service 1</li>
	                      <li>New Service 2</li>
	                      <li>New Service 3</li>
	                      <li>New Service 4</li>
	                    </ul>
	                    <li><a class="menu_item">КОНТАКТЫ</a><span data-toggle="collapse" data-target="#contact" class="sub_icon glyphicon glyphicon-triangle-bottom triangles"></span></li>
	                    <ul class="sub-menu collapse" id="contact">
	                      <li>New Service 1</li>
	                      <li>New Service 2</li>
	                      <li>New Service 3</li>
	                    </ul>
	                </ul>
	              </div>
	              
	            </div>
	        </div>

	        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

	            <div class="row carousel-holder">

	                <div class="col-xs-12">
	                	<div class="stock_header"><b>АКЦИИ</b></div>
	                	
	                    <p>
	                    	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
	                    </p>
	                </div>

	            </div>

	            <div class="row">

	                <div class="col-sm-4 col-lg-4 col-md-4">
	                    <div class="thumbnail">
	                        <img src="http://placehold.it/320x150" class="img" alt="">
	                        <div class="caption">
	                            <b>Lorem Ipsum</b>
	                            <br><br>
	                            <p>
	                            	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
	                            </p>
	                        </div>
	                        <div class="ratings">
	                            <p></p>
	                        </div>
	                    </div>
	                </div>

	                <div class="col-sm-4 col-lg-4 col-md-4">
	                    <div class="thumbnail">
	                        <img src="http://placehold.it/320x150" class="img" alt="">
	                        <div class="caption">
	                            <b>Lorem Ipsum</b>
	                            <br><br>
	                            <p>
	                            	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
	                            </p>
	                        </div>
	                        <div class="ratings">
	                            <p></p>
	                        </div>
	                    </div>
	                </div>

	                <div class="col-sm-4 col-lg-4 col-md-4">
	                    <div class="thumbnail">
	                        <img src="http://placehold.it/320x150" class="img" alt="">
	                        <div class="caption">
	                            <b>Lorem Ipsum</b>
	                            <br><br>
	                            <p>
	                            	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
	                            </p>
	                        </div>
	                        <div class="ratings">
	                            <p></p>
	                        </div>
	                    </div>
	                </div>

	                <div class="col-sm-4 col-lg-4 col-md-4">
	                    <div class="thumbnail">
	                        <img src="http://placehold.it/320x150" class="img" alt="">
	                        <div class="caption">
	                            <b>Lorem Ipsum</b>
	                            <br><br>
	                            <p>
	                            	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
	                            </p>
	                        </div>
	                        <div class="ratings">
	                            <p></p>
	                        </div>
	                    </div>
	                </div>

	                <div class="col-sm-4 col-lg-4 col-md-4">
	                    <div class="thumbnail">
	                        <img src="http://placehold.it/320x150" class="img" alt="">
	                        <div class="caption">
	                            <b>Lorem Ipsum</b>
	                            <br><br>
	                            <p>
	                            	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
	                            </p>
	                        </div>
	                        <div class="ratings">
	                            <p></p>
	                        </div>
	                    </div>
	                </div>

	                <div class="col-sm-4 col-lg-4 col-md-4">
	                    <div class="thumbnail">
	                        <img src="http://placehold.it/320x150" class="img" alt="">
	                        <div class="caption">
	                            <b>Lorem Ipsum</b>
	                            <br><br>
	                            <p>
	                            	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
	                            </p>
	                        </div>
	                        <div class="ratings">
	                            <p></p>
	                        </div>
	                    </div>
	                </div>

	                

	            </div>

	        </div>

	    </div>

	</div>
@stop