
    <div class="">            
        <div class="logo">
            <a href="index.php"><img src="<?php echo base_url();?>img/logo.png" style="max-width:150px;"></a>                 
        </div>        
        <div class="top-nav">
            <ul class="memenu">
                <li class=""><a href="<?php echo site_url("Home/index"); ?>">Home</a></li>
                <li class=""><a href="<?php echo site_url("Products/index"); ?>">Products</a></li>
                <li class=""><a href="<?php echo site_url("Contact/index"); ?>">Contact</a></li>               
                
            </ul>               
        </div>
        <div class="top-nav"  style="float:right; width:40%;">
            <ul class="memenu" >
                <li><a style="float:right;" href="" class="glyphicon glyphicon-shopping-cart"></a>  
                <?php if(isset($_SESSION['name'])){ ?>
                <li class="" ><a style="float:right;" href="<?php echo site_url("Signin/sign_out"); ?>">Welcome , <?php echo $_SESSION['name']; ?></a></li>
                <li class="" ><a style="float:right;" href="<?php echo site_url("Signin/sign_out"); ?>">Sign Out</a></li>
                <?php }
                else{ ?>
                <li class="" ><a style="float:right;" href="<?php echo site_url("SignUp/index"); ?>">Sign up</a></li>

                <li class="" ><a style="float:right;" href="<?php echo site_url("SignIn/index"); ?>">Login</a></li>
                <?php }?>
            </ul>               
        </div>
        <div class="clearfix"> </div>
    </div>

