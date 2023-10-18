<?php
session_start();
if(!isset($_SESSION["useremail"])){
    header('location:login.php');
}


?>
<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="css/responsive.css" rel="stylesheet" />
   </head>
   <body>
          <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                <a class="navbar-brand" href="index.php"><img width="250" src="images/logo.png" alt="#" /></a>

                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                <a href="" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge">0</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
        <!-- Navbar Start -->
        <div class="container-fluid mb-5 ">
        <div class="row border">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-danger text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 150px">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Jewelery <i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-danger border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">Bridal Jewelery</a>
                                <a href="" class="dropdown-item">Casual Jewelery</a>
                                <a href="" class="dropdown-item">Baby's Dresses</a>
                            </div>
                           </div>
                            <div class="navbar-nav w-100 overflow-hidden" style="height: 150px">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Cosmetics <i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-danger border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">Facial kit</a>
                                <a href="" class="dropdown-item">Make up</a>
                                <a href="" class="dropdown-item"></a>
                            </div>
                </nav>
            </div>
   <div class="hero_area">
         <!-- header section strats -->
         <header class="header_section">
            <div class="container">
               
            <nav class="navbar navbar-expand-lg custom_nav-container py-3 py-lg-0 px-0">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                  <div class="navbar-nav mr-auto py-0">

                     <ul class="navbar-nav">
                        <li class="nav-item">
                           <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown active">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="about.php">About</a></li>
                              <li><a href="testimonial.php">Testimonial</a></li>
                           </ul>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Products <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                              <li><a href="about.php">Jewelery</a></li>
                              <li><a href="testimonial.php">Cosmetics</a></li>
                           </ul>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="blog_list.php">Blog</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">
                              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                               xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
                               viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;"
                                xml:space="preserve">
                                 <g>
                                    <g>
                                       <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                                          c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                                    </g>
                                 </g>
                                 <g>
                                    <g>
                                       <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                                          C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                                          c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                                          C457.728,97.71,450.56,86.958,439.296,84.91z" />
                                    </g>
                                 </g>
                                 <g>
                                    <g>
                                       <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                                          c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                                    </g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                                 <g>
                                 </g>
                              </svg>
                           </a>
                        </li>
                        <form class="form-inline">
                           <!-- <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                           <i class="fa fa-search" aria-hidden="true"></i>
                           </button> -->
                        </form>
                     </ul>
                  </div>
               </nav>
     
         </div>
</div>
         </header>
      