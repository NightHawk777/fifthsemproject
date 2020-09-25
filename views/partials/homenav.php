<nav class="navwrapper homenav grey transparent">
    <div class="container">
        <a href="#" class="brand-logo"><img src="./views/public/img/logo-techmart.png" alt="logo" class="responsive-img logo"></a>
        <a href="" class="sidenav-trigger" data-target="mobile-menu">
            <i class="material-icons">menu</i>
        </a>
        
        <ul class="right hide-on-med-and-down" id="homenavlist">
        <?php 
        if(empty($_SESSION['logged_user']))
        {
    ?>
            <li><a href="#" class="homenavlist waves-effect waves-light active">About</a></li>
            <li><a href="#" class="homenavlist waves-effect waves-light dropdown-trigger" data-target="dropme1">Shop With Us<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="#" class="homenavlist waves-effect waves-light dropdown-trigger" data-target="dropme2">Sell With Us<i class="material-icons right">arrow_drop_down</i></a></li>
            <?php
        }else{
        //  echo $_SESSION['logged_user'] ;
         ?>
        <li><a href="logout" class="homenavlist waves-effect waves-light active">logout</a></li>
            
        <?php }   ?> 
        </ul>
     
 

        <!-- dropdown menu -->
        <ul class="dropdown-content" id="dropme1">
            <li><a href="userlogin" class="waves-effect waves-light">Sign In</a></li>
            <li><a href="usersignup" class="waves-effect waves-light">Sign Up</a></li>
        </ul>

        <ul class="dropdown-content" id="dropme2">
            <li><a href="" class="waves-effect waves-light">Sign In</a></li>
            <li><a href="" class="waves-effect waves-light">Sign Up</a></li>
        </ul>

        <ul class="dropdown-content" id="d1">
            <li><a href="userlogin" class="waves-effect waves-light">Sign In</a></li>
            <li><a href="usersignup" class="waves-effect waves-light">Sign Up</a></li>
        </ul>

        <ul class="dropdown-content" id="d2">
            <li><a href="" class="waves-effect waves-light">Sign In</a></li>
            <li><a href="" class="waves-effect waves-light">Sign Up</a></li>
        </ul>
     
        <!-- hamburger menu -->
        <ul class="sidenav grey lighten-2" id="mobile-menu">
                <li><a href="#" class="waves-effect waves-light">About</a></li>
                <li><a href="#" class="waves-effect waves-light dropdown-trigger" data-target="d1">Shop With Us<i class="material-icons right">arrow_drop_down</i></a></li>
                <li><a href="#" class="waves-effect waves-light dropdown-trigger" data-target="d2">Sell With Us<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
    </div>
</nav>