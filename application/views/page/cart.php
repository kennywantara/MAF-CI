
                       <?php 
                if(isset($cart) && is_array($cart) && count($cart)){
                        $i=1;
                       foreach ($cart as $data) {
                         echo"
                    <div id='rowid".$data['rowid']."' >
                        <li>
                            <span class=''>
                                ";?><button onclick="javascript:deleteproduct('<?php echo $data['rowid'] ?>')" class="btn btn-xs btn-danger pull-right" style="margin-right:20px;">x</button>
                            <?php echo"
                            </span>
                        </li>
                        
                       <li style='padding:5px;'>
                          <div class='row'>
                              <div class='col-md-3 col-xs-3'>
                                <img style='width:50px' src='".base_url()."assets/uploads/files/img/".$data['picture']."' alt='' />  
                              </div>
                              <div class='col-md-7 item-info'>
                                  <span>".$data['name']."</span><br>
                                    <span>Rp.".$data['price']."</span>
                              </div>
                          </div>
                        </span>
                        
                      </li>
                      <li class='divider'></li>
                    </div>";
                       }
                }
                      ?>
                      <li><a class="text-center" href="<?php echo site_url();?>/products/checkout">View Cart</a></li>

                 
