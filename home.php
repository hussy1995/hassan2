<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<!-- HEAD SECTION -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>LOCAME Multipurpose Template</title>
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--BOOTSTRAP MAIN STYLES -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!--FONTAWESOME MAIN STYLE -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--CUSTOM STYLE -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!--END HEAD SECTION -->
<body>   
     <!-- NAV SECTION -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">L<i class="fa fa-tint"></i>CAME</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="home.php">HOME</a></li>
                    <li><a href="home.php?pg=disb">BRAND</a></li>
                    <li><a href="home.php?pg=dispro">PRODUCTS</a></li>
                    <li><a href="home.php?pg=discat">cATEGORY</a></li>
                    <li><a href="home.php?pg=disprob">PRODUCT-BRAND</a></li>
                    <li><a href="home.php?pg=disrat">RATING</a></li>
                    <li><a href="home.php?pg=disu">USER</a></li>
                </ul>
            </div>
           
        </div>
    </div>
     <!--END NAV SECTION -->
     <!-- HEADER SECTION -->
    <div id="header-section">
        <div class="container">
            
                  

            <?php
            if(isset($_REQUEST['pg']))
            {
                $pg=$_REQUEST['pg'];
                switch ($pg)
                {
                    case 'disb':
                        include 'display_brand.php';
                        break;
                    case 'ib':
                        include 'insert_brand_form.php';
                        break;
                    case 'eb':
                        include 'edit_brand_form.php';
                        break;
                    case 'delb':
                        include 'delete_brand.php';
                        break;
                    case 'discat':
                        include 'display_category.php';
                        break;
                    case 'icat':
                        include 'insert_category_form.php';
                        break;
                    case 'ecat':
                        include 'edit_category_form.php';
                        break;
                    case 'delcat':
                        include 'delete_category.php';
                        break;
                    case 'dispro':
                        include 'display_product.php';
                        break;
                    case 'ipro':
                        include 'insert_product_form.php';
                        break;
                    case 'epro':
                        include 'edit_product_form.php';
                        break;
                    case 'delpro':
                        include 'delete_product.php';
                        break;
                    case 'disprob':
                        include 'display_prodbrand.php';
                        break;
                    case 'iprob':
                        include 'insert_prodbrand_form.php';
                        break;
                    case 'eprob':
                        include 'edit_prodbrand_form.php';
                        break;
                    case 'delprob':
                        include 'delete_prodbrand.php';
                        break;
                    case 'disrat':
                        include 'display_rating.php';
                        break;
                    case 'irat':
                        include 'insert_rating_form.php';
                        break;
                    case 'erat':
                        include 'edit_rating_form.php';
                        break;
                    case 'delrat':
                        include 'delete_rating.php';
                        break;
                    case 'disu':
                        include 'display_user.php';
                        break;
                    case 'iu':
                        include 'insert_user_form.php';
                        break;
                    case 'eu':
                        include 'edit_user_form.php';
                        break;
                    case 'delu':
                        include 'delete_user.php';
                        break;
                }
            }
            ?>
                         
        </div>
       
    </div> 
      <!--END HEADER SECTION -->
    <!--ABOUT SECTION -->
<!--    <div id="about-section" >
        <div class="container" >
            <div class="row main-top-margin text-center">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1" data-scrollreveal="enter top and move 100px, wait 0.5s">
                    <h1>About Our Team</h1>
                    <h4>
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                    </h4>
                </div>
            </div>
             ./ Main Heading
            <div class="row main-low-margin text-center">
                <div class="col-md-3 col-sm-3" data-scrollreveal="enter left and move 100px, wait 0.7s">
                    <img class="img-circle" src="assets/img/team/team1.png" alt="">
                    <h4>Jhon Deo</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.

                    </p>
                    <p>
                       <a href="#"><i class="fa fa-facebook-square fa-2x color-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter-square fa-2x color-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x color-google-plus"></i></a>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x color-linkedin"></i></a>
                        <a href="#"><i class="fa fa-pinterest-square fa-2x color-pinterest"></i></a>

                    </p>

                </div>
              <div class="col-md-3 col-sm-3" data-scrollreveal="enter bottom and move 100px, wait 0.7s">
                    <img class="img-circle" src="assets/img/team/team2.jpg" alt="">
                    <h4>Romson Lediro</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.

                    </p>
                    <p>
                       <a href="#"><i class="fa fa-facebook-square fa-2x color-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter-square fa-2x color-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x color-google-plus"></i></a>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x color-linkedin"></i></a>
                        <a href="#"><i class="fa fa-pinterest-square fa-2x color-pinterest"></i></a>

                    </p>

                </div>
                <div class="col-md-3 col-sm-3" data-scrollreveal="enter bottom and move 100px, wait 0.7s">
                    <img class="img-circle" src="assets/img/team/team1.png" alt="">
                    <h4>Rooklin Bruce</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.

                    </p>
                    <p>
                       <a href="#"><i class="fa fa-facebook-square fa-2x color-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter-square fa-2x color-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x color-google-plus"></i></a>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x color-linkedin"></i></a>
                        <a href="#"><i class="fa fa-pinterest-square fa-2x color-pinterest"></i></a>

                    </p>

                </div>
                <div class="col-md-3 col-sm-3" data-scrollreveal="enter right and move 100px, wait 0.7s">
                    <img class="img-circle" src="assets/img/team/team2.jpg" alt="">
                    <h4>Donseny Riopsh</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.

                    </p>
                    <p>
                       <a href="#"><i class="fa fa-facebook-square fa-2x color-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter-square fa-2x color-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus-square fa-2x color-google-plus"></i></a>
                        <a href="#"><i class="fa fa-linkedin-square fa-2x color-linkedin"></i></a>
                        <a href="#"><i class="fa fa-pinterest-square fa-2x color-pinterest"></i></a>

                    </p>

                </div>
            </div>
               ./ Row Content
        </div>
    </div>
     END ABOUT SECTION 
     SERVICES SECTION 
    <div id="services-section" >
        <div class="container" >
            <div class="row main-top-margin text-center">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1" data-scrollreveal="enter top and move 100px, wait 0.5s">
                    <h1>Our Services</h1>
                    <h4>
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                    </h4>
                </div>
            </div>
             ./ Main Heading
           
            <div class="row main-low-margin text-center">
                <div class="col-md-4 col-sm-4" data-scrollreveal="enter left and move 100px, wait 0.8s">
                    <i class="fa fa-bolt fa-5x color-red"></i>
                    <h3>RESPONSIVE DESIGN</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                        Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                    </p>
                </div>               
                <div class="col-md-4 col-sm-4" data-scrollreveal="enter bottom and move 100px, wait 0.8s">
                    <i class="fa fa-comments fa-5x color-green"></i>
                    <h3>24x7 SUPPORT</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                        Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                    </p>
                </div>
                <div class="col-md-4 col-sm-4" data-scrollreveal="enter right and move 100px, wait 0.8s">
                    <i class="fa fa-desktop fa-5x color-light-blue"></i>
                    <h3>AWESOME DISPLAY </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                        Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                    </p>
                </div>
            </div>
               ./ Row Content
               <div class="row main-low-margin text-center" >
                <div class="col-md-4 col-sm-4" data-scrollreveal="enter left and move 100px, wait 0.8s">
                    <i class="fa fa-flask fa-5x color-brown"></i>
                    <h3>TESTED DESIGN</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                        Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                    </p>
                </div>               
                    <div class="col-md-4 col-sm-4" data-scrollreveal="enter bottom and move 100px, wait 0.8s">
                    <i class="fa fa-pencil fa-5x color-blue"></i>
                    <h3>EASY TO CUSTOMIZE</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                        Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                    </p>
                </div>
                <div class="col-md-4 col-sm-4" data-scrollreveal="enter right and move 100px, wait 0.8s">
                    <i class="fa fa-thumbs-up fa-5x color-black"></i>
                    <h3>WELL DOCUMENTED</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                        Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                    </p>
                </div>
            </div>
               ./ Row Content
        </div>
    </div>
    END SERVICES SECTION 
    PRICE SECTION 
    <div id="price-section">
       <div class="container" >
            <div class="row main-top-margin text-center" data-scrollreveal="enter top and move 100px, wait 0.5s">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <h1>Price Options</h1>
                    <h4>
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                    </h4>
                </div>
            </div>
            ./ Main Heading
            <div class="row row main-low-margin">
               <div class="col-md-4 col-sm-4" data-scrollreveal="enter left and move 100px, wait 0.8s">                 
                    <div class="pricing">
                        <div class="pricing-head">
                            <span class="price">
                                <sup>$</sup>
                                <span class="price-amount">12</span>
                                <small>/month</small>
                            </span>
                        </div>
                        <ul>
                            <li><strong>BASIC PLAN</strong></li>
                            <li><strong>1 GB </strong> Data</li>
                            <li>10 <strong>Emails</strong></li>
                            <li>Limit Of<strong>10</strong> Users</li>
                            <li><strong>24x7</strong> Support</li>
                            <li><strong>Online</strong> Access Available</li>
                             <li><strong>Online</strong> Management Tool</li>
                        </ul>
                        <a href="#" class="pricing-grab">GET TI NOW</a>
                    </div>
                   
                </div>
                <div class="col-md-4 col-sm-4" data-scrollreveal="enter bottom and move 100px, wait 0.8s">                 
                    <div class="pricing">
                        <div class="pricing-head">
                            <span class="price">
                                <sup>$</sup>
                                <span class="price-amount">15</span>
                                <small>/month</small>
                            </span>
                        </div>
                        <ul>
                            <li class="backcolor-li"><strong>MEDIUM PLAN</strong></li>
                            <li><strong>1 GB </strong> Data</li>
                            <li>10 <strong>Emails</strong></li>
                            <li>Limit Of<strong>10</strong> Users</li>
                            <li><strong>24x7</strong> Support</li>
                            <li><strong>Online</strong> Access Available</li>
                             <li><strong>Online</strong> Management Tool</li>
                        </ul>
                        <a href="#" class="pricing-grab">GET TI NOW</a>
                    </div>
                   
                </div>               
 <div class="col-md-4 col-sm-4" data-scrollreveal="enter right and move 100px, wait 0.8s">                 
                    <div class="pricing">
                        <div class="pricing-head">
                            <span class="price">
                                <sup>$</sup>
                                <span class="price-amount">18</span>
                                <small>/month</small>
                            </span>
                        </div>
                        <ul>
                            <li><strong>ADVANCE PLAN</strong></li>
                            <li><strong>1 GB </strong> Data</li>
                            <li>10 <strong>Emails</strong></li>
                            <li>Limit Of<strong>10</strong> Users</li>
                            <li><strong>24x7</strong> Support</li>
                            <li><strong>Online</strong> Access Available</li>
                             <li><strong>Online</strong> Management Tool</li>
                        </ul>
                        <a href="#" class="pricing-grab">GET TI NOW</a>
                    </div>
                   
                </div>
              

            </div>
              ./ Row Content
        </div>
    </div>
    END PRICE SECTION 
    PRODUCTS SECTION 
    <div id="products-section" >
         <div class="container" >
            <div class="row main-top-margin text-center" data-scrollreveal="enter top and move 100px, wait 0.5s">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <h1>Our Products</h1>
                    <h4>
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                    </h4>
                </div>
            </div>
              ./ Main Heading
             <hr />
            <div class="row main-low-margin" >
                <div class="col-md-10  col-md-offset-1 col-sm-12">
 <div class="col-md-4 col-sm-4" data-scrollreveal="enter left and move 100px, wait 0.8s">
                    <img src="assets/img/product/prd1.png" alt="">
                </div>
                <div class="col-md-8 col-sm-8" data-scrollreveal="enter right and move 100px, wait 0.8s">
                    <h4 ><i class="fa fa-tint"></i>  <strong class="color-red"> AWESOME PRODUCT # 1 </strong></h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                    </p>
                    <p>
                        <i class="fa fa-check"></i> Responsive Design<br />
                     <i class="fa fa-check"></i> 24x7 Support <br />
                       <i class="fa fa-check"></i> Well Documented<br />
                    </p>
                    <a href="#" class="btn btn-success btn-lg" > Download Now</a>
                </div>
                </div>
               
            </div>
             ./ Row Content
            <hr />
           <div class="row main-low-margin bottam-pad" >

                 <div class="col-md-10  col-md-offset-1 col-sm-12">
                <div class="col-md-8 col-sm-8" data-scrollreveal="enter left and move 100px, wait 0.8s">
                    <h4 ><i class="fa fa-tint"></i>  <strong class="color-brown"> AWESOME PRODUCT # 2 </strong></h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                         Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Curabitur nec nisl odio. Mauris vehicula at nunc id posuere.
                    </p>
                    <p>
                        <i class="fa fa-check"></i> Responsive Design<br />
                     <i class="fa fa-check"></i> 24x7 Support <br />
                       <i class="fa fa-check"></i> Well Documented<br />
                    </p>
                    <a href="#" class="btn btn-danger btn-lg" > Download Now</a>
                </div>
                <div class="col-md-4 col-sm-4" data-scrollreveal="enter right and move 100px, wait 0.8s">
                    
                    <img class="img-margin-product" src="assets/img/product/prd2.png" alt="">
                </div>
                     </div>
            </div>
               ./ Row Content
        </div>
    </div>
    END PRODUCTS SECTION 
    CONTACT SECTION 
    <div id="contact-section">
        <div class="container" >
            <div class="row main-top-margin text-center">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1" data-scrollreveal="enter top and move 100px, wait 0.5s">
                    <h1>Contact Us</h1>
                    <h4>
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                       
                    </h4>
                </div>
            </div>
             ./ Main Heading
            <div class="row">
                <div class="col-md-12  col-sm-12 ">
                    <div class="col-md-6  col-sm-12" data-scrollreveal="enter left and move 100px, wait 0.8s">
                        <h3><i class="fa fa-tint"></i> Reach Us Here</h3>
                        <hr />
                        <p>
                        103, New Street,<br />
                            New York, USA.<br />                          
                        Call: +23-00-89-009<br />
                        Email: demo@yourdomain.com<br />
                            </p>
                        <h3> Social Presence</h3>
                        <a href="#"><i class="fa fa-facebook-square fa-3x color-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter-square fa-3x color-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus-square fa-3x color-google-plus"></i></a>
                        <a href="#"><i class="fa fa-linkedin-square fa-3x color-linkedin"></i></a>
                        <a href="#"><i class="fa fa-pinterest-square fa-3x color-pinterest"></i></a>
                    </div>
                    <div class="col-md-6  col-sm-12" data-scrollreveal="enter right and move 100px, wait 0.8s">
                        <h3>Need Help ? Write Us. </h3>
                        <hr />
                        <form>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required="required" placeholder="Email address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" required="required" class="form-control" rows="8"  placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit Request</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
              ./ Row Content
        </div>
    </div>  -->
    <!--END CONTACT SECTION --> 
    <!--FOOTER SECTION -->
    <div id="footer">
        <div class="container">
            <div class="row ">
                | Designed by Hassan Sarfraz | 				
		
            </div>
            
        </div>
       
    </div>  
    <!--END FOOTER SECTION --> 
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY LIBRARY -->
<!--    <script src="assets/js/jquery.js"></script>
     CORE BOOTSTRAP LIBRARY 
    <script src="assets/js/bootstrap.min.js"></script>
      SCROLL REVEL LIBRARY FOR SCROLLING ANIMATIONS
    <script src="assets/js/scrollReveal.js"></script>
        CUSTOM SCRIPT
    <script src="assets/js/custom.js"></script>-->
</body>
</html>
