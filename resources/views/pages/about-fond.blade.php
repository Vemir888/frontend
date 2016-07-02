@extends('layouts.layout')


@section('title')
about fond
@stop
@section('navbar')
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	    <div class="container-fluid">
	        <!-- Brand and toggle get grouped for better mobile display -->
	        <div class="col-lg-2 col-lg-offset-5 col-md-2 col-md-offset-5 col-sm-2 col-sm-offset-5 col-xs-2 col-xs-offset-5">
	        	<div class="navbar-header">
	            	<a href="/"><img src="/assets/images/logo-images/MainLogo.png" class="navbar-logo"></a>
	            </div>
	        </div>
	        <!-- Collect the nav links, forms, and other content for toggling -->
	        
	        <!-- /.navbar-collapse -->
	    </div>
	    <!-- /.container -->
	</nav>

@stop

@section('content')


	    <!-- Navigation -->
	    

	    <!-- Page Content -->
	    <div class="container-fluid about_cont">

	        <div class="row">

	            <div class="col-md-3 menu">
	                <p class="lead"></p>
	                <div class="list-group">
	                    <a href="#" class="list-group-item border about_links">Команда</a>
	                    <a href="#" class="list-group-item border about_links">Попечительский совет</a>
	                    <a href="#" class="list-group-item border about_links">Документы</a>
	                    <a href="#" class="list-group-item border about_links">Отчеты</a>
	                </div>
	            </div>

	            <div class="col-md-9">

	                <div class="row carousel-holder">

	                    <div class="col-md-12">
                        	<div class="stock_header"><b>О ФОНДЕ</b></div>
	                    </div>

	                </div>

	                <div class="row">

	                    <div class="col-xs-12">
		                    
	                    </div>

	                </div>

	            </div>

	        </div>

	    </div>
@stop