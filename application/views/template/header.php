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
                  
                <?php if(isset($_SESSION['name'])){ ?>
                <li class="" ><a style="float:right;" href="<?php echo site_url("Signin/sign_out"); ?>">Welcome , <?php echo $_SESSION['name']; ?></a></li>
                <li class="" ><a style="float:right;" href="<?php echo site_url("Signin/sign_out"); ?>">Sign Out</a></li>
                <?php }
                else{ ?>
                <li class="" ><a style="float:right;" href="<?php echo site_url("SignUp/index"); ?>">Sign up</a></li>

                <li class="" ><a style="float:right;" href="<?php echo site_url("SignIn/index"); ?>">Login</a></li>
                <?php }?>


                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true" style="float:right;"><span class="glyphicon glyphicon-shopping-cart"></span>7 - Items<span  class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-cart" style="margin-top:32px; padding:16px 5px; min-width:300px;" style="width:80%;" role="menu">
                        <li>
                            <span class="item-right">
                                <button class="btn btn-xs btn-danger pull-right">x</button>
                            </span>
                        </li>
                       <li style="padding:5px;">
                          <div class="row">
                              <div class="col-md-3 col-xs-3">
                                <img src="http://lorempixel.com/50/50/" alt="" />  
                              </div>
                              <div class="col-md-7 item-info">
                                  <span>Item name</span>
                                    <span>23$</span>
                              </div>
                          </div>
                        </span>
                      </li>
                      <li class="divider"></li>
                      <li><a class="text-center" href="">View Cart</a></li>
                  </ul>
                </li>
            </ul>               
        </div>
        <div class="clearfix"> </div>
    </div>

