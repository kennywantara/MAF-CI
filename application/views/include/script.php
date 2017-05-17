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
<script src="http://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>


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
          $(".cart-header"+rowid).remove(".cart-header"+rowid); 
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


    
$(document).ready(function(){
    $('#myTable').DataTable();
});


</script>

<script type="text/javascript">
      /* Formatting function for row details - modify as you need */
    function format ( d ) {
        // `d` is the original data object for the row
        return '<table class="table">'+
                  '<tr>'+
                      '<td>Product ID</td>'+
                      '<td>'+d.productID+'</td>'+
                  '</tr>'+
                  '<tr>'+
                      '<td>Name</td>'+
                      '<td>'+d.productName+'</td>'+
                  '</tr>'+
                  '<tr>'+
                      '<td>Category</td>'+
                      '<td>'+d.productCategory+'</td>'+
                  '</tr>'+
                  '<tr>'+
                      '<td>Price</td>'+
                      '<td>'+d.productPrice+'</td>'+
                  '</tr>'+
                '<tr>'+
                      '<td>Description</td>'+
                      '<td>'+d.productDescription+'</td>'+
                  '</tr>'+
                  '<tr>'+
                      '<td>Picture</td>'+
                      '<td>'+d.productPicture+'</td>'+
                  '</tr>'+
              '</table>';
    }
   
  $(document).ready(function() {
  //     var table = $('#example').DataTable( {
  //         "columns": 
  //  [
  //             { "data": "productID" },
  //             { "data": "productName" },
  //             { "data": "productCategory" },
  //             { "data": "productPrice" },
  //             { "data": "productPicture" }         ] 
  //     ]} );
  //     $('#example tbody').on( 'click', 'tr', function () {
  //         if ( $(this).hasClass('selected') ) {
  //             $(this).removeClass('selected');
  //         }
  //         else {
  //             table.$('tr.selected').removeClass('selected');
  //             $(this).addClass('selected');
  //         }
  //     } );
 
      $('#button').click( function () {
          table.row('.selected').remove().draw( false );
      } ); 
     
  } );

  $('#example tbody').on( 'click', 'tr', function () {
    console.log( table.row( this ).data() );
} );
    </script>