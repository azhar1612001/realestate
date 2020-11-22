location<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Real state</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-md-5 ">
                            <div class="header_left">
                                <p>Welcome to Conbusi consulting service</p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-md-7">
                            <div class="header_right d-flex">
                                    <div class="short_contact_list">
                                            <ul>
                                                <li style="color: #919191; margin-right: 10px;"><i style="color: #efa75bf2;" class="fa fa-envelope"></i> info@docmed.com</li>
                                                <li style="color: #919191;"><i style="color: #efa75bf2;" class="fa fa-phone"></i> 1601-609 6780</li>
                                            </ul>
                                        </div>
                                        <!-- <div class="social_media_links">
                                            <a href="#">
                                                <i class="fa fa-linkedin"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a href="#">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </div> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a  href="index.html">home</a></li>
                                            <!-- <li><a class="active" href="#">pages <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                        <li><a href="about.html">about</a></li>
                                                        <li><a href="property_details.html">property details</a></li>
                                                        <li><a href="elements.html">elements</a></li>
                                                </ul>
                                            </li> -->
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="Property.html">Property</a></li>
                                            <!-- <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">blog</a></li>
                                                    <li><a href="single-blog.html">single-blog</a></li>
                                                </ul>
                                            </li> -->
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="javascript: document.body.scrollIntoView(false);">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <!-- <div class="search_btn">
                                        <a href="#">
                                            <i class="ti-search"></i>
                                        </a>
                                    </div> -->
                                    <div class="book_btn d-none d-lg-block">
                                        <a  href="addProperty.html">Add Property</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
         <!-- bradcam_area  -->
         <div class="bradcam_area bradcam_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                                <h3>Search Record</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ bradcam_area  -->
<div class="container">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Sr no.</th>
                    <th scope="col">City</th>
                    <th scope="col">Type</th>
                    <th scope="col">No. of BedRoom</th>
                    <th scope="col">No. of BathRoom</th>
                    <th scope="col">Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($_GET["delhi"] && $_GET["bedRoom"] && $_GET["bathRoom"] && $_GET["appartment"]){
                	include 'config.php';
                    $selectquery="";
                    $delhi = $_GET["delhi"];
                    $bedRoom = $_GET["bedRoom"];
                    $bathRoom = $_GET["bathRoom"];
                    $appartment = $_GET["appartment"];
                    if($delhi=='delhi'){
                    	if($appartment == 'appartment'){
                    		if($bedRoom==1){
                    			if($bathRoom==1){
                    				$selectquery = "select * from records where location = 'delhi' and appartment='appartment' and bedRoom = 1 and bathRoom = 1";
                    			}
                    			else if($bathRoom==2){
                    				$selectquery = "select * from records where location = 'delhi' and appartment='appartment' and bedRoom = 1 and bathRoom = 2";
                    			}
                    			else if($bathRoom==3){
                    				$selectquery = "select * from records where location = 'delhi' and appartment='appartment' and bedRoom = 1 and bathRoom = 3";
                    			}
                    			else{
                    				echo "delhi bedRoom bathRoom";
                    			}
                    		}
                    		else if($bedRoom==2){
                    			if($bathRoom==1){
                    				$selectquery = "select * from records where location = 'delhi' and appartment='appartment' and bedRoom = 2 and bathRoom = 1";
                    			}
                    			else if($bathRoom==2){
                    				$selectquery = "select * from records where location = 'delhi' and appartment='appartment' and bedRoom = 2 and bathRoom = 2";
                    			}
                    			else if($bathRoom==3){
                    				$selectquery = "select * from records where location = 'delhi' and appartment='appartment' and bedRoom = 2 and bathRoom = 3";
                    			}
                    			else{
                    				echo "delhi bedRoom bathRoom";
                    			}
                    		}
                    		else if($bedRoom==3){
                    			if($bathRoom==1){
                    				$selectquery = "select * from records where location = 'delhi' and appartment='appartment' and bedRoom = 3 and bathRoom = 1";
                    			}
                    			else if($bathRoom==2){
                    				$selectquery = "select * from records where location = 'delhi' and appartment='appartment' and bedRoom = 3 and bathRoom = 2";
                    			}
                    			else if($bathRoom==3){
                    				$selectquery = "select * from records where location = 'delhi' and appartment='appartment' and bedRoom = 3 and bathRoom = 3";
                    			}
                    			else{
                    				echo "delhi bedRoom bathRoom";
                    			}
                    		}
                    		else{
                    			echo "delhi bedroom";
                    		}
                    	}
                    	else if($appartment == 'floor'){
                    		if($bedRoom==1){
                    			if($bathRoom==1){
                    				$selectquery = "select * from records where location = 'delhi' and appartment='floor' and bedRoom = 1 and bathRoom = 1";
                    			}
                    			else if($bathRoom==2){
                    				$selectquery = "select * from records where location = 'delhi' and appartment='floor' and bedRoom = 1 and bathRoom = 2";
                    			}
                    			else if($bathRoom==3){
                    				$selectquery = "select * from records where location = 'delhi' and appartment='floor' and bedRoom = 1 and bathRoom = 3";
                    			}
                    			else{
                    				echo "delhi bedRoom bathRoom";
                    			}
                    		}
                    		else if($bedRoom==2){
                    			if($bathRoom==1){
                    				$selectquery = "select * from records where location = 'delhi' and appartment='floor' and bedRoom = 2 and bathRoom = 1";
                    			}
                    			else if($bathRoom==2){
                    				$selectquery = "select * from records where location = 'delhi' and appartment='floor' and bedRoom = 2 and bathRoom = 2";
                    			}
                    			else if($bathRoom==3){
                    				$selectquery = "select * from records where location = 'delhi' and appartment='floor' and bedRoom = 2 and bathRoom = 3";
                    			}
                    			else{
                    				echo "delhi bedRoom bathRoom";
                    			}
                    		}
                    		else if($bedRoom==3){
                    			if($bathRoom==1){
                    				$selectquery = "select * from records where location = 'delhi' and appartment='floor' and bedRoom = 3 and bathRoom = 1";
                    			}
                    			else if($bathRoom==2){
                    				$selectquery = "select * from records where location = 'delhi' and appartment='floor' and bedRoom = 3 and bathRoom = 2";
                    			}
                    			else if($bathRoom==3){
                    				$selectquery = "select * from records where location = 'delhi' and appartment='floor' and bedRoom = 3 and bathRoom = 3";
                    			}
                    			else{
                    				echo "delhi bedRoom bathRoom";
                    			}
                    		}
                    		else{
                    			echo "delhi bedroom";
                    		}
                    	}
                    	else if($appartment == 'flat'){
                    		if($bedRoom==1){
                    			if($bathRoom==1){
                    				$selectquery = "select * from records where location = 'delhi' and appartment='flat' and bedRoom = 1 and bathRoom = 1";
                    			}
                    			else if($bathRoom==2){
                    				$selectquery = "select * from records where location = 'delhi' and appartment='flat' and bedRoom = 1 and bathRoom = 2";
                    			}
                    			else if($bathRoom==3){
                    				$selectquery = "select * from records where location = 'delhi' and appartment='flat' and bedRoom = 1 and bathRoom = 3";
                    			}
                    			else{
                    				echo "delhi bedRoom bathRoom";
                    			}
                    		}
                    		else if($bedRoom==2){
                    			if($bathRoom==1){
                    				$selectquery = "select * from records where location = 'delhi' and appartment='flat' and bedRoom = 2 and bathRoom = 1";
                    			}
                    			else if($bathRoom==2){
                    				$selectquery = "select * from records where location = 'delhi' and appartment='flat' and bedRoom = 2 and bathRoom = 2";
                    			}
                    			else if($bathRoom==3){
                    				$selectquery = "select * from records where location = 'delhi' and appartment='flat' and bedRoom = 2 and bathRoom = 3";
                    			}
                    			else{
                    				echo "delhi bedRoom bathRoom";
                    			}
                    		}
                    		else if($bedRoom==3){
                    			if($bathRoom==1){
                    				$selectquery = "select * from records where location = 'delhi' and appartment='flat' and bedRoom = 3 and bathRoom = 1";
                    			}
                    			else if($bathRoom==2){
                    				$selectquery = "select * from records where location = 'delhi' and appartment='flat' and bedRoom = 3 and bathRoom = 2";
                    			}
                    			else if($bathRoom==3){
                    				$selectquery = "select * from records where location = 'delhi' and appartment='flat' and bedRoom = 3 and bathRoom = 3";
                    			}
                    			else{
                    				echo "delhi bedRoom bathRoom";
                    			}
                    		}
                    		else{
                    			echo "delhi bedroom";
                    		}
                    	}
                    	else{
                    		echo "something worng delhi";
                    		echo $appartment;
                    	}
                    }
                    else if($delhi=='noida'){
                    	if($appartment == 'appartment'){
                    		if($bedRoom==1){
                    			if($bathRoom==1){
                    				$selectquery = "select * from records where location = 'noida' and appartment='appartment' and bedRoom = 1 and bathRoom = 1";
                    			}
                    			else if($bathRoom==2){
                    				$selectquery = "select * from records where location = 'noida' and appartment='appartment' and bedRoom = 1 and bathRoom = 2";
                    			}
                    			else if($bathRoom==3){
                    				$selectquery = "select * from records where location = 'noida' and appartment='appartment' and bedRoom = 1 and bathRoom = 3";
                    			}
                    			else{
                    				echo "delhi bedRoom bathRoom";
                    			}
                    		}
                    		else if($bedRoom==2){
                    			if($bathRoom==1){
                    				$selectquery = "select * from records where location = 'noida' and appartment='appartment' and bedRoom = 2 and bathRoom = 1";
                    			}
                    			else if($bathRoom==2){
                    				$selectquery = "select * from records where location = 'noida' and appartment='appartment' and bedRoom = 2 and bathRoom = 2";
                    			}
                    			else if($bathRoom==3){
                    				$selectquery = "select * from records where location = 'noida' and appartment='appartment' and bedRoom = 2 and bathRoom = 3";
                    			}
                    			else{
                    				echo "delhi bedRoom bathRoom";
                    			}
                    		}
                    		else if($bedRoom==3){
                    			if($bathRoom==1){
                    				$selectquery = "select * from records where location = 'noida' and appartment='appartment' and bedRoom = 3 and bathRoom = 1";
                    			}
                    			else if($bathRoom==2){
                    				$selectquery = "select * from records where location = 'noida' and appartment='appartment' and bedRoom = 3 and bathRoom = 2";
                    			}
                    			else if($bathRoom==3){
                    				$selectquery = "select * from records where location = 'noida' and appartment='appartment' and bedRoom = 3 and bathRoom = 3";
                    			}
                    			else{
                    				echo "delhi bedRoom bathRoom";
                    			}
                    		}
                    		else{
                    			echo "delhi bedroom";
                    		}
                    	}
                    	else if($appartment == 'floor'){
                    		if($bedRoom==1){
                    			if($bathRoom==1){
                    				$selectquery = "select * from records where location = 'noida' and appartment='floor' and bedRoom = 1 and bathRoom = 1";
                    			}
                    			else if($bathRoom==2){
                    				$selectquery = "select * from records where location = 'noida' and appartment='floor' and bedRoom = 1 and bathRoom = 2";
                    			}
                    			else if($bathRoom==3){
                    				$selectquery = "select * from records where location = 'noida' and appartment='floor' and bedRoom = 1 and bathRoom = 3";
                    			}
                    			else{
                    				echo "delhi bedRoom bathRoom";
                    			}
                    		}
                    		else if($bedRoom==2){
                    			if($bathRoom==1){
                    				$selectquery = "select * from records where location = 'noida' and appartment='floor' and bedRoom = 2 and bathRoom = 1";
                    			}
                    			else if($bathRoom==2){
                    				$selectquery = "select * from records where location = 'noida' and appartment='floor' and bedRoom = 2 and bathRoom = 2";
                    			}
                    			else if($bathRoom==3){
                    				$selectquery = "select * from records where location = 'noida' and appartment='floor' and bedRoom = 2 and bathRoom = 3";
                    			}
                    			else{
                    				echo "delhi bedRoom bathRoom";
                    			}
                    		}
                    		else if($bedRoom==3){
                    			if($bathRoom==1){
                    				$selectquery = "select * from records where location = 'noida' and appartment='floor' and bedRoom = 3 and bathRoom = 1";
                    			}
                    			else if($bathRoom==2){
                    				$selectquery = "select * from records where location = 'noida' and appartment='floor' and bedRoom = 3 and bathRoom = 2";
                    			}
                    			else if($bathRoom==3){
                    				$selectquery = "select * from records where location = 'noida' and appartment='floor' and bedRoom = 3 and bathRoom = 3";
                    			}
                    			else{
                    				echo "delhi bedRoom bathRoom";
                    			}
                    		}
                    		else{
                    			echo "delhi bedroom";
                    		}
                    	}
                    	else if($appartment == 'flat'){
                    		if($bedRoom==1){
                    			if($bathRoom==1){
                    				$selectquery = "select * from records where location = 'noida' and appartment='flat' and bedRoom = 1 and bathRoom = 1";
                    			}
                    			else if($bathRoom==2){
                    				$selectquery = "select * from records where location = 'noida' and appartment='flat' and bedRoom = 1 and bathRoom = 2";
                    			}
                    			else if($bathRoom==3){
                    				$selectquery = "select * from records where location = 'noida' and appartment='flat' and bedRoom = 1 and bathRoom = 3";
                    			}
                    			else{
                    				echo "delhi bedRoom bathRoom";
                    			}
                    		}
                    		else if($bedRoom==2){
                    			if($bathRoom==1){
                    				$selectquery = "select * from records where location = 'noida' and appartment='flat' and bedRoom = 2 and bathRoom = 1";
                    			}
                    			else if($bathRoom==2){
                    				$selectquery = "select * from records where location = 'noida' and appartment='flat' and bedRoom = 2 and bathRoom = 2";
                    			}
                    			else if($bathRoom==3){
                    				$selectquery = "select * from records where location = 'noida' and appartment='flat' and bedRoom = 2 and bathRoom = 3";
                    			}
                    			else{
                    				echo "delhi bedRoom bathRoom";
                    			}
                    		}
                    		else if($bedRoom==3){
                    			if($bathRoom==1){
                    				$selectquery = "select * from records where location = 'noida' and appartment='flat' and bedRoom = 3 and bathRoom = 1";
                    			}
                    			else if($bathRoom==2){
                    				$selectquery = "select * from records where location = 'noida' and appartment='flat' and bedRoom = 3 and bathRoom = 2";
                    			}
                    			else if($bathRoom==3){
                    				$selectquery = "select * from records where location = 'noida' and appartment='flat' and bedRoom = 3 and bathRoom = 3";
                    			}
                    			else{
                    				echo "delhi bedRoom bathRoom";
                    			}
                    		}
                    		else{
                    			echo "delhi bedroom";
                    		}
                    	}
                    	else{
                    		echo "something worng delhi";
                    		echo $appartment;
                    	}
                    }
                    else if($delhi=='gurgaon'){
                    	if($appartment == 'appartment'){
                    		if($bedRoom==1){
                    			if($bathRoom==1){
                    				$selectquery = "select * from records where location = 'gurgaon' and appartment='appartment' and bedRoom = 1 and bathRoom = 1";
                    			}
                    			else if($bathRoom==2){
                    				$selectquery = "select * from records where location = 'gurgaon' and appartment='appartment' and bedRoom = 1 and bathRoom = 2";
                    			}
                    			else if($bathRoom==3){
                    				$selectquery = "select * from records where location = 'gurgaon' and appartment='appartment' and bedRoom = 1 and bathRoom = 3";
                    			}
                    			else{
                    				echo "delhi bedRoom bathRoom";
                    			}
                    		}
                    		else if($bedRoom==2){
                    			if($bathRoom==1){
                    				$selectquery = "select * from records where location = 'gurgaon' and appartment='appartment' and bedRoom = 2 and bathRoom = 1";
                    			}
                    			else if($bathRoom==2){
                    				$selectquery = "select * from records where location = 'gurgaon' and appartment='appartment' and bedRoom = 2 and bathRoom = 2";
                    			}
                    			else if($bathRoom==3){
                    				$selectquery = "select * from records where location = 'gurgaon' and appartment='appartment' and bedRoom = 2 and bathRoom = 3";
                    			}
                    			else{
                    				echo "delhi bedRoom bathRoom";
                    			}
                    		}
                    		else if($bedRoom==3){
                    			if($bathRoom==1){
                    				$selectquery = "select * from records where location = 'gurgaon' and appartment='appartment' and bedRoom = 3 and bathRoom = 1";
                    			}
                    			else if($bathRoom==2){
                    				$selectquery = "select * from records where location = 'gurgaon' and appartment='appartment' and bedRoom = 3 and bathRoom = 2";
                    			}
                    			else if($bathRoom==3){
                    				$selectquery = "select * from records where location = 'gurgaon' and appartment='appartment' and bedRoom = 3 and bathRoom = 3";
                    			}
                    			else{
                    				echo "delhi bedRoom bathRoom";
                    			}
                    		}
                    		else{
                    			echo "delhi bedroom";
                    		}
                    	}
                    	else if($appartment == 'floor'){
                    		if($bedRoom==1){
                    			if($bathRoom==1){
                    				$selectquery = "select * from records where location = 'gurgaon' and appartment='floor' and bedRoom = 1 and bathRoom = 1";
                    			}
                    			else if($bathRoom==2){
                    				$selectquery = "select * from records where location = 'gurgaon' and appartment='floor' and bedRoom = 1 and bathRoom = 2";
                    			}
                    			else if($bathRoom==3){
                    				$selectquery = "select * from records where location = 'gurgaon' and appartment='floor' and bedRoom = 1 and bathRoom = 3";
                    			}
                    			else{
                    				echo "delhi bedRoom bathRoom";
                    			}
                    		}
                    		else if($bedRoom==2){
                    			if($bathRoom==1){
                    				$selectquery = "select * from records where location = 'gurgaon' and appartment='floor' and bedRoom = 2 and bathRoom = 1";
                    			}
                    			else if($bathRoom==2){
                    				$selectquery = "select * from records where location = 'gurgaon' and appartment='floor' and bedRoom = 2 and bathRoom = 2";
                    			}
                    			else if($bathRoom==3){
                    				$selectquery = "select * from records where location = 'gurgaon' and appartment='floor' and bedRoom = 2 and bathRoom = 3";
                    			}
                    			else{
                    				echo "delhi bedRoom bathRoom";
                    			}
                    		}
                    		else if($bedRoom==3){
                    			if($bathRoom==1){
                    				$selectquery = "select * from records where location = 'gurgaon' and appartment='floor' and bedRoom = 3 and bathRoom = 1";
                    			}
                    			else if($bathRoom==2){
                    				$selectquery = "select * from records where location = 'gurgaon' and appartment='floor' and bedRoom = 3 and bathRoom = 2";
                    			}
                    			else if($bathRoom==3){
                    				$selectquery = "select * from records where location = 'gurgaon' and appartment='floor' and bedRoom = 3 and bathRoom = 3";
                    			}
                    			else{
                    				echo "delhi bedRoom bathRoom";
                    			}
                    		}
                    		else{
                    			echo "delhi bedroom";
                    		}
                    	}
                    	else if($appartment == 'flat'){
                    		if($bedRoom==1){
                    			if($bathRoom==1){
                    				$selectquery = "select * from records where location = 'gurgaon' and appartment='flat' and bedRoom = 1 and bathRoom = 1";
                    			}
                    			else if($bathRoom==2){
                    				$selectquery = "select * from records where location = 'gurgaon' and appartment='flat' and bedRoom = 1 and bathRoom = 2";
                    			}
                    			else if($bathRoom==3){
                    				$selectquery = "select * from records where location = 'gurgaon' and appartment='flat' and bedRoom = 1 and bathRoom = 3";
                    			}
                    			else{
                    				echo "delhi bedRoom bathRoom";
                    			}
                    		}
                    		else if($bedRoom==2){
                    			if($bathRoom==1){
                    				$selectquery = "select * from records where location = 'gurgaon' and appartment='flat' and bedRoom = 2 and bathRoom = 1";
                    			}
                    			else if($bathRoom==2){
                    				$selectquery = "select * from records where location = 'gurgaon' and appartment='flat' and bedRoom = 2 and bathRoom = 2";
                    			}
                    			else if($bathRoom==3){
                    				$selectquery = "select * from records where location = 'gurgaon' and appartment='flat' and bedRoom = 2 and bathRoom = 3";
                    			}
                    			else{
                    				echo "delhi bedRoom bathRoom";
                    			}
                    		}
                    		else if($bedRoom==3){
                    			if($bathRoom==1){
                    				$selectquery = "select * from records where location = 'gurgaon' and appartment='flat' and bedRoom = 3 and bathRoom = 1";
                    			}
                    			else if($bathRoom==2){
                    				$selectquery = "select * from records where location = 'gurgaon' and appartment='flat' and bedRoom = 3 and bathRoom = 2";
                    			}
                    			else if($bathRoom==3){
                    				$selectquery = "select * from records where location = 'gurgaon' and appartment='flat' and bedRoom = 3 and bathRoom = 3";
                    			}
                    			else{
                    				echo "gurgaon bedRoom bathRoom";
                    			}
                    		}
                    		else{
                    			echo "gurgaon bedroom";
                    		}
                    	}
                    	else{
                    		echo "something worng gurgaon";
                    		echo $appartment;
                    	}
                    }
                    else{
                    	echo "something worng";
                    }
                    $query = mysqli_query($conn,$selectquery);
                    $i=1;
                    $num = mysqli_num_rows($query);
                    while($res = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <th scope="row"><?php echo $i ?></th>
                    <td><?php echo strtoupper($res['location']); ?></td>
                    <td><?php echo $res['appartment']; ?></td>
                    <td><?php echo $res['bedRoom']; ?></td>
                    <td><?php echo $res['bathRoom']; ?></td>
                    <td><?php echo $res['price']; ?></td>
                </tr>
                <?php
                        $i++;
                    }
                }
                ?>
            </tbody>
        </table>
        </div>        


    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                
                                    <img src="img/footer_logo.png" alt="">
                                
                            </div>
                            <p>
                                    conbusi@support.com <br>
                                    +10 873 672 6782 <br>
                                    600/D, Green road, NewYork
                            </p>
                            <!-- <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div> -->

                        </div>
                    </div>
                    <!-- <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Services
                            </h3>
                            <ul>
                                <li><a href="#">Marketing & SEO</a></li>
                                <li><a href="#"> Startup</a></li>
                                <li><a href="#">Finance solution</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Travel</a></li>
                            </ul>

                        </div>
                    </div> -->
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Useful Links
                            </h3>
                            <ul>
                                <li><a href="about.html">About</a></li>
                                <li><a href="Property.html">Property</a></li>
                                <li><a href="blog.html">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-lg-4">
                            <div style="text-align: center;" class="footer_widget">
                                    <h3 class="footer_title">
                                            Contact Us
                                    </h3>
                                    <form class="newsletter_form">
                                        <input id="mesName" style="margin-bottom: 10px;border: 1px solid #f0ad5b;" type="text" placeholder="Enter your Name" required>
                                        <input id="mesEmail" style="margin-bottom: 10px;border: 1px solid #f0ad5b;" type="email" placeholder="Enter your mail" required>
                                        <input id="mesMobile" style="margin-bottom: 10px;border: 1px solid #f0ad5b;" type="number" placeholder="Enter your Mobile Number" required>
                                        <input id="mesMessage" style="margin-bottom: 10px;border: 1px solid #f0ad5b;" type="text" placeholder="Enter your Massage" required>
                                        <!-- <button type="submit">Subscribe</button> -->
                                        <input type="submit" id="satyam" value="Send" onclick="messages()" style="background: #ed925b;color: white;cursor: pointer;">
                                    </form>
                                    <p class="newsletter_text">Esteem spirit temper too say adieus who direct esteem esteems luckily.</p>
                                </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- link that opens popup -->
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <!-- <script src="js/gijgo.min.js"></script> -->
    <script src="js/slick.min.js"></script>
   

    
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>
    <script type="text/javascript">
        function messages(){
            let name=document.getElementById('mesName').value;
            let email=document.getElementById('mesEmail').value;
            let mobile=document.getElementById('mesMobile').value;
            let message=document.getElementById('mesMessage').value;
            var httpr = new XMLHttpRequest();
            httpr.open("GET","message.php?name="+name+"&email="+email+"&mobile="+mobile+"&message="+message,true);
            httpr.send();
            alert("Message has send to Owner, Our team will contact you as much as early");
        }
    </script>
</body>

</html>