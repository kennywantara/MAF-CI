
<ul class="dropdown-menu dropdown-cart" style="margin-top:32px; padding:16px 5px; min-width:300px;" style="width:80%;" role="menu">
                       <?php 
                if(isset($cart) && is_array($cart) && count($cart)){
                        $i=1;
                       foreach ($cart as $data) {
                         echo"
                        <li>
                            <span class='item-right'>
                                <button class='btn btn-xs btn-danger pull-right'>x</button>
                            </span>
                        </li>
                        
                       <li style='padding:5px;'>
                          <div class='row'>
                              <div class='col-md-3 col-xs-3'>
                                <img src='".$data['picture']."' alt='' />  
                              </div>
                              <div class='col-md-7 item-info'>
                                  <span>".$data['name']."</span>
                                    <span>Rp.".$data['price']."</span>
                              </div>
                          </div>
                        </span>
                        
                      </li>
                      <li class='divider'></li>";
                       }
                }
                      ?>
                      <li><a class="text-center" href="<?php echo site_url();?>/products/checkout">View Cart</a></li>

                  </ul>
