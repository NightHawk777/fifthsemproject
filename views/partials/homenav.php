<nav class="navwrapper homenav grey darken-4">
    <div class="container">
        <a href="/project5/TechMart" class="brand-logo"><img src="./views/public/img/logo-techmart.png" alt="logo" class="responsive-img logo"></a>
        <a href="" class="sidenav-trigger" data-target="mobile-menu">
            <i class="material-icons">menu</i>
        </a>
        <ul class="right hide-on-med-and-down" id="homenavlist">
            <?php
                $_SESSION['logged_member'] = NULL;
                if(!empty($_SESSION['logged_user'])){
                    $_SESSION['logged_member'] = $_SESSION['logged_user'];
                }
                if(!empty($_SESSION['logged_vendor'])){
                    $_SESSION['logged_member'] = $_SESSION['logged_vendor'];
                }
                if(empty($_SESSION['logged_member']))
                {
            ?>  
                <li><a href="#" class="homenavlist waves-effect waves-dark active">About</a></li>
                <li><a href="#" class="homenavlist waves-effect waves-dark dropdown-trigger" data-target="dropme1">Shop With Us<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a href="#" class="homenavlist waves-effect waves-dark dropdown-trigger" data-target="dropme2">Sell With Us<i class="material-icons right">arrow_drop_down</i></a></li>
                <?php
            }else{
                if(!empty($_SESSION["logged_user"])){?>
                    <li class="homeprofile homenavlist dropdown-trigger" data-target="profileDrop">
                        <a href="#" class="left active" style="background:none;">
                        <img src="./views/public/img/avatars/<?php echo $_SESSION['user_avatar']; ?>" alt="" class="responsive-img circle homeprofileimg" id="profileImg">
                        </a>
                        <a href="#" class="right" style="margin-left:-20px;background:none;"> <?php echo $_SESSION['logged_user'];?></a>
                    </li>
                    <?php
                    
                }
                
                if(!empty($_SESSION["logged_vendor"])){?>
                    <li class="homeprofile homenavlist dropdown-trigger" data-target="profileDrop2">
                        <a href="#" class="left active" style="background:none;">
                        <img src="./views/public/img/avatars/<?php echo $_SESSION['vendor_avatar']; ?>" alt="" class="responsive-img circle homeprofileimg" id="profileImg">
                        </a>
                        <a href="#" class="right" style="margin-left:-20px;background:none;"> <?php echo $_SESSION['logged_vendor'];?></a>
                    </li>
            <?php  }
            ?>
                
            <?php }   ?>
            <li><a href="list_products" class="homenavlist waves-effect waves-dark">Visit Store</a></li>
        </ul>
     
 

        <!-- dropdown menu -->
        <ul class="dropdown-content accessing" id="dropme1">
            <li><a href="userlogin" class="waves-effect waves-light">Sign In</a></li>
            <li><a href="usersignup" class="waves-effect waves-light">Sign Up</a></li>
        </ul>

        <ul class="dropdown-content accessing" id="dropme2">
            <li><a href="vendorlogin" class="waves-effect waves-light">Sign In</a></li>
            <li><a href="vendorsignup" class="waves-effect waves-light">Sign Up</a></li>
        </ul>

        <ul class="dropdown-content" id="d1">
            <li><a href="userlogin" class="waves-effect waves-light">Sign In</a></li>
            <li><a href="usersignup" class="waves-effect waves-light">Sign Up</a></li>
        </ul>

        <ul class="dropdown-content" id="d2">
            <li><a href="vendorlogin" class="waves-effect waves-light">Sign In</a></li>
            <li><a href="vendorsignup" class="waves-effect waves-light">Sign Up</a></li>
        </ul>

        <ul class="dropdown-content accessing" id="profileDrop">
            <li><a href="userProfile" class="waves-effect waves-light">View Profile</a></li>
            <li><a href="logout" class="waves-effect waves-light">Log out</a></li>
        </ul>

        <ul class="dropdown-content accessing" id="profileDrop2">
            <li><a href="vendorProfile" class="waves-effect waves-light">View Profile</a></li>
            <li><a href="vendor/upload" class="waves-effect waves-light">Upload Product</a></li>
            <li><a href="vendor/updateProduct" class="waves-effect waves-light">My Products</a></li>
            <li><a href="logout" class="waves-effect waves-light">Log out</a></li>
        </ul>
     
        <!-- hamburger menu -->
        <ul class="sidenav grey lighten-1" id="mobile-menu">
                <li><a href="#" class="waves-effect waves-light">About</a></li>
                <li><a href="#" class="waves-effect waves-light dropdown-trigger" data-target="d1">Shop With Us<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a href="#" class="waves-effect waves-light dropdown-trigger" data-target="d2">Sell With Us<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
    </div>
</nav>

<div class="homecontainer">
    <h1 class="hometext left-align white-text">Welcome to TechMart.</h1>
    <p class="flow-text left-align white-text">Discover the best marketplace for your technological accessories.</p>
    <a href="list_products" class="btn-large waves-effect waves-dark hometextbtn orange darken-4 hoverable">Start Shopping</a>
</div>