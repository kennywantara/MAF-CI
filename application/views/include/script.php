<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
  	
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- start menu -->
<script src="<?php echo base_url(); ?>assets/js/simpleCart.min.js"> </script>
    <!-- start menu -->
 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="<?php echo base_url(); ?>assets/js/responsiveslides.min.js"></script>


<script type="text/javascript">
function deleteproduct(rowid)
{
/*var answer = confirm ("Are you sure you want to delete?");
if (answer)
{*/
$.ajax({
      type: "POST",
      url: "<?php echo site_url('products/remove');?>",
      data: "rowid="+rowid,
      success: function (response) {
          $("#rowid"+rowid).remove("#rowid"+rowid); 
          }           
      });
/*}*/
}

var total = 0;
$('.subtotal').each(function(){
total += parseInt($(this).text());
$('.grandtotal').text(total);
});


function updateproduct(rowid)
{
var qty = $('.qty'+rowid).val();
var price = $('.price'+rowid).text();
var subtotal = $('.subtotal'+rowid).text();
$.ajax({
  type: "POST",
  url: "<?php echo site_url('welcome/update_cart');?>",
  data: "rowid="+rowid+"&qty="+qty+"&price="+price+"&subtotal="+subtotal,
  success: function (response) {
          $('.subtotal'+rowid).text(response);
          var total = 0;
          $('.subtotal').each(function(){
              total += parseInt($(this).text());
              $('.grandtotal').text(total);
          });     
  }
});
}

 function opencart()
  {
      $.ajax({
                  type: "POST",
                  url: "<?php echo site_url('products/shopping_cart');?>",
                  data: "",
                  success: function (response) {
                  $(".dropdown-menu").html(response);
                  }
              });
  }


    



</script>