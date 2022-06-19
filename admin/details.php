<?php
include('security.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<header>
<script language="javascript" type="text/javascript">
var popUpWin=0;
function popUpWindow(URLStr, left, top, width, height)
{
 if(popUpWin)
{
if(!popUpWin.closed) popUpWin.close();
}
popUpWin = open(URLStr,'popUpWin', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,copyhistory=yes,width='+600+',height='+600+',left='+left+', top='+top+',screenX='+left+',screenY='+top+'');
}

</script>
</header>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Receipt Details
    </h6>
  </div>

  <div class="card-body">

    <div class="table-responsive">

    <?php
        $query = "SELECT receipts.*,users.house_no as number from receipts join users on users.username=receipts.tenant where receipts.invoiceNumber='".$_GET['cid']."'";
       $query_run = mysqli_query($connection,$query);
    ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Invoice Number</th>
            <th>Tenant Contact</th>
            <th>Rental Year</th>
            <th>Rental Month</th>
            <th>Payment Type</th>
            <th>Mode of Payment</th>
            <th>Tenant Comment/Add. Info</th>
            <th>Receipt Document</th>
            <th>Final status</th>
            <th>action</th>
  
          </tr>
        </thead>
        <tbody>
        <?php
            while($main_result = mysqli_fetch_array($query_run))
            {
             ?>

          
          <tr>
            <td><?php echo $main_result['invoiceNumber']; ?></td>
            <td><?php echo $main_result['contact']; ?></td>
            <td><?php echo $main_result['year']; ?></td>
            <td><?php echo $main_result['month']; ?></td>
            <td><?php echo $main_result['paymenttype']; ?></td>
            <td><?php echo $main_result['mode']; ?></td>
            <td> <?php $cfile=$main_result['details'];
                    if($cfile=="" || $cfile=="NULL")
                    {
                      echo "No Comments By tenant";
                    }
                    else{?>
                        <?php echo $main_result['details'];?>
                    <?php } ?></td>
            <td> <?php $cfile=$main_result['compfile'];
                    if($cfile=="" || $cfile=="NULL")
                    {
                      echo "File NA";
                    }
                    else{?>
                    <a href="../receipts/<?php echo $main_result['compfile'];?>" ? target="_blank"><button type="button" class="btn btn-info">View File</button></a>
                    <?php } ?></td>
           <td><?php 
                
                    if($main_result['status']=="" or $main_result['status']=="NULL")
                    { ?>
                      <button type="button" class="btn btn-warning">Pending</button>
                    <?php }
                  if($main_result['status']=="declined"){ ?>
                  <button type="button" class="btn btn-danger">Declined</button>
                  <?php }
                  if($main_result['status']=="closed") {
                  ?>
                  <button type="button" class="btn btn-success">Approved</button>
                  <?php } ?>
                              </td>
            <td>  <?php if($main_result['status']=="closed"){
                  echo"No Action Needed";
} else {?>
           <a href="javascript:void(0);" onClick="popUpWindow(' http://babusounds.online/admin/action.php?cid=<?php echo htmlentities($main_result['invoiceNumber']);?>');" title="Update order">
											 <button type="button" class="btn btn-success">Take Action</button></td>
											</a><?php } ?>
            </td>

          </tr>
       
        
        </tbody>
       
										
      </table>

    </div>
  </div>
</div>
<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>


<?php
            } 
          ?>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>