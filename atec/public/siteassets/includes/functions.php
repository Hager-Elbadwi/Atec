<?php 
ob_start();
session_start();
include_once("includes/config.php");

####################################### PAGESTART
function pageStart(){
    ECHO "
            <!DOCTYPE html>
            <html lang='en'>
            
            <head>
            <!-- Required meta tags -->
            <meta charset='utf-8' />
            <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no' />
            <link rel='icon' href='assets/img/favicon.png' type='image/png' />
            <title>Eiser ecommerce</title>
            <!-- Bootstrap CSS -->
            <link rel='stylesheet' href='assets/css/bootstrap.css' />
            <link rel='stylesheet' href='vendors/linericon/style.css' />
            <link rel='stylesheet' href='assets/css/font-awesome.min.css' />
            <link rel='stylesheet' href='assets/css/themify-icons.css' />
            <link rel='stylesheet' href='assets/css/flaticon.css' />
            <link rel='stylesheet' href='vendors/owl-carousel/owl.carousel.min.css' />
            <link rel='stylesheet' href='vendors/lightbox/simpleLightbox.css' />
            <link rel='stylesheet' href='vendors/nice-select/assets/css/nice-select.css' />
            <link rel='stylesheet' href='vendors/animate-assets/css/animate.css' />
            <link rel='stylesheet' href='vendors/jquery-ui/jquery-ui.css' />
            <!-- main css -->
            <link rel='stylesheet' href='assets/css/style.css' />
            <link rel='stylesheet' href='assets/css/responsive.css' />
            </head>
            
            <body>           
            
        ";
}


####################################### HEADER
function drawHeader(){
    pageStart();
    $cartItemsCount = getCartItemsCount();

    //Check if user is logged or not 
    if(isLogged()){
        //Logged 
        $data = welcomeMessage();
        $userDestination = "editProfile.php";
    }else{
        $data = drawLoginForm();
        $userDestination = "register.php";
    }
    

    //Prepare categories links 
    $catsArray = getCategories();
    $catsLinks = '';
    foreach($catsArray as $catId=>$catName){
        $catsLinks .= "
                        <li class='nav-item'>
                            <a class='nav-link' href='category.php?cid=$catId'>$catName</a>
                        </li>
                        ";
    }

    ECHO "
                <header class='header_area'>
                <div class='top_menu' style='height:auto !important;'>
                {$data}
                </div>
                <div class='main_menu'>
                <div class='container'>
                    <nav class='navbar navbar-expand-lg navbar-light w-100'>
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class='navbar-brand logo_h' href='index.php'>
                        <img src='assets/img/logo.png' alt='' />
                    </a>
                    <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent'
                        aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class='collapse navbar-collapse offset w-100' id='navbarSupportedContent'>
                        <div class='row w-100 mr-0'>
                        <div class='col-lg-7 pr-0'>
                            <ul class='nav navbar-nav center_nav pull-right'>
                            <li class='nav-item active'>
                                <a class='nav-link' href='index.php'>Home</a>
                            </li>
                            <li class='nav-item submenu dropdown'>
                                <a href='#' class='nav-link dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true'
                                aria-expanded='false'>Shop</a>
                                <ul class='dropdown-menu'>
                                {$catsLinks}
                                </ul>
                            </li>
                          
                            <li class='nav-item'>
                                <a class='nav-link' href='contact.php'>Contact</a>
                            </li>
                            </ul>
                        </div>

                        <div class='col-lg-5 pr-0'>
                            <ul class='nav navbar-nav navbar-right right_nav pull-right'>
                           
                            <li class='nav-item'>
                                <a href='cart.php' class='icons'>
                                <i class='ti-shopping-cart'></i> ($cartItemsCount)
                                </a>
                            </li>

                            <li class='nav-item'>
                                <a href='$userDestination' class='icons'>
                                <i class='ti-user' aria-hidden='true'></i>
                                </a>
                            </li>

                            </ul>
                        </div>
                        </div>
                    </div>
                    </nav>
                </div>
                </div>
            </header>
            ";
}


####################################### Footer
function drawFooter(){
    ECHO "
                <footer class='footer-area section_gap'>
                <div class='container'>
                <div class='row'>
                    <div class='col-lg-2 col-md-6 single-footer-widget'>
                    <h4>Top Products</h4>
                    <ul>
                        <li><a href='#'>Managed Website</a></li>
                        <li><a href='#'>Manage Reputation</a></li>
                        <li><a href='#'>Power Tools</a></li>
                        <li><a href='#'>Marketing Service</a></li>
                    </ul>
                    </div>
                    <div class='col-lg-2 col-md-6 single-footer-widget'>
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href='#'>Jobs</a></li>
                        <li><a href='#'>Brand Assets</a></li>
                        <li><a href='#'>Investor Relations</a></li>
                        <li><a href='#'>Terms of Service</a></li>
                    </ul>
                    </div>
                    <div class='col-lg-2 col-md-6 single-footer-widget'>
                    <h4>Features</h4>
                    <ul>
                        <li><a href='#'>Jobs</a></li>
                        <li><a href='#'>Brand Assets</a></li>
                        <li><a href='#'>Investor Relations</a></li>
                        <li><a href='#'>Terms of Service</a></li>
                    </ul>
                    </div>
                    <div class='col-lg-2 col-md-6 single-footer-widget'>
                    <h4>Resources</h4>
                    <ul>
                        <li><a href='#'>Guides</a></li>
                        <li><a href='#'>Research</a></li>
                        <li><a href='#'>Experts</a></li>
                        <li><a href='#'>Agencies</a></li>
                    </ul>
                    </div>
                    <div class='col-lg-4 col-md-6 single-footer-widget'>
                    <h4>Newsletter</h4>
                    <p>You can trust us. we only send promo offers,</p>
                    <div class='form-wrap' id='mc_embed_signup'>
                        <form target='_blank' action='https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01'
                        method='get' class='form-inline'>
                        <input class='form-control' name='EMAIL' placeholder='Your Email Address' onfocus='this.placeholder = '''
                            onblur='this.placeholder = 'Your Email Address '' required='' type='email'>
                        <button class='click-btn btn btn-default'>Subscribe</button>
                        <div style='position: absolute; left: -5000px;'>
                            <input name='b_36c4fd991d266f23781ded980_aefe40901a' tabindex='-1' value='' type='text'>
                        </div>

                        <div class='info'></div>
                        </form>
                    </div>
                    </div>
                </div>
                <div class='footer-bottom row align-items-center'>
                    <p class='footer-text m-0 col-lg-8 col-md-12'><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class='fa fa-heart-o' aria-hidden='true'></i> by <a href='https://colorlib.com' target='_blank'>Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class='col-lg-4 col-md-12 footer-social'>
                    <a href='#'><i class='fa fa-facebook'></i></a>
                    <a href='#'><i class='fa fa-twitter'></i></a>
                    <a href='#'><i class='fa fa-dribbble'></i></a>
                    <a href='#'><i class='fa fa-behance'></i></a>
                    </div>
                </div>
                </div>
            </footer> 
            ";

    pageEnd();         
}


####################################### PAGEEND
function pageEnd(){
    ECHO "
                        
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src='assets/js/jquery-3.2.1.min.js'></script>
            <script src='assets/js/popper.js'></script>
            <script src='assets/js/bootstrap.min.js'></script>
            <script src='assets/js/stellar.js'></script>
            <script src='vendors/lightbox/simpleLightbox.min.js'></script>
            <script src='vendors/nice-select/assets/js/jquery.nice-select.min.js'></script>
            <script src='vendors/isotope/imagesloaded.pkgd.min.js'></script>
            <script src='vendors/isotope/isotope-min.js'></script>
            <script src='vendors/owl-carousel/owl.carousel.min.js'></script>
            <script src='assets/js/jquery.ajaxchimp.min.js'></script>
            <script src='vendors/counter-up/jquery.waypoints.min.js'></script>
            <script src='vendors/counter-up/jquery.counterup.js'></script>
            <script src='assets/js/mail-script.js'></script>
            <script src='assets/js/theme.js'></script>
            </body>

            </html>
        ";
}


####################################### Connection TO DB 
function dbConnect(){
    global  $dbHost, $dbUser, $dbPass, $dbName ;
    
    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName) or die("DB Connection Error");
    return $conn;
}

$ch = dbConnect();

####################################### ShowMessage
function outputMessage($message,$type='success'){
    ECHO "<div class='alert alert-{$type}'>$message</div>";
}


####################################### DrawLoginForm
function drawLoginForm(){
    return "
            <div class='container'>
            <div class='row'>
                <div class='col-md-12>
                    <div class='float-left'>
                     <!-- ----------------------------- -->
                        <form action='signinSave.php' method='post'>
                            <div class='form-row align-items-center'>
                                <div class='col-auto'>
                                <label class='sr-only' for='inlineFormInput'>Username</label>
                                <input name='username' type='text' class='form-control' id='inlineFormInputGroup' placeholder='Username'>
                                </div>
                                <div class='col-auto'>
                                <label class='sr-only' for='inlineFormInputGroup'>Username</label>
                                <div class='input-group mb-2'>
                                    <input name='password' type='password' class='form-control' id='inlineFormInputGroup' placeholder='Password'>
                                </div>
                                </div>
                               
                                <div class='col-auto'>
                                <button type='submit' class='btn btn-primary mb-2'>Submit</button>
                                </div>
                            </div>
                            </form>
                     <!-- ----------------------------- -->
                    </div>
                </div>
                <!--
                <div class='col-md-0'>
                    <div class='float-right'>
                    <ul class='right_side'>
                        <li>
                        <a href='cart.php'>
                            -
                        </a>
                        </li>
                        <li>
                        <a href='tracking.php'>
                            -
                        </a>
                        </li>
                        <li>
                        <a href='contact.php'>
                            -
                        </a>
                        </li>
                    </ul>
                    </div>
                </div>
                -->
            </div>
        </div>
        ";
}


####################################### DrawLoginForm
function welcomeMessage(){
    return "
            <div class='container'>
            <div class='row'>
                <div class='col-md-0>
                    <div class='float-left'>
                     <!-- ----------------------------- -->
                     Welcome : {$_SESSION['loggedInUsername']}
                     <!-- ----------------------------- -->
                    </div>
                </div>
                
                <div class='col-md-12'>
                    <div class='float-right'>
                    <ul class='right_side'>
                        <li>
                        <a href='myOrders.php'>
                            My Orders
                        </a>
                        </li>
                        <li>
                        <a href='myProducts.php'>
                            My Products
                        </a>
                        </li>
                        <li>
                        <a href='logout.php'>
                            Logout
                        </a>
                        </li>
                    </ul>
                    </div>
                </div>
                
            </div>
        </div>
        ";
}


####################################### GetCartItemsCount
function getCartItemsCount(){
    //Get count from session cart 
    return (isset($_SESSION['cart']))?count($_SESSION['cart']):0;
}

####################################### IsLogged 
function isLogged(){
    if(isset($_SESSION['loggedIn'])){
        return true ;
    }else{
        return false;
    }
}


####################################### loggedInUserData 
function loggedInUserData(){
        return $_SESSION['loggedInUsername'] ;
}



####################################### getCategories as an array
function getCategories(){
    $categoriesArray = [];
    $res = runSQL("SELECT * FROM categories order by name ASC");
    while($row = mysqli_fetch_assoc($res)){
        $categoriesArray[$row['id']] = $row['name'];
    }

    return $categoriesArray;
}


####################################### runSQL
function runSQL($sqlStatement){
    global $ch;
    $result = mysqli_query($ch, $sqlStatement);
    return $result ;
}


####################################### Num Rows
function num_rows($result){
    //global $ch;
   return mysqli_num_rows($result);
}


####################################### redirect
function redirectTo($destination,$seconds=0){
    if($seconds == 0)
        header("location:{$destination}");
    else
        header("refresh:$seconds;url={$destination}");
 }
 

?>