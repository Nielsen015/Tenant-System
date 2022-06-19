<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
date_default_timezone_set('Africa/Nairobi');
$currentTime = date( 'd-m-Y h:i:s A', time () );
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"> Approved Receipts Data Tables </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Invoice Number</th>
                                            <th>Tenant</th>
                                            <th>Reg Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Invoice Number</th>
                                            <th>Tenant</th>
                                            <th>Reg Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                    $st='declined';
$query = "SELECT receipts.*,users.last_name as name from receipts join users on users.username=receipts.tenant where receipts.status='$st'";
$query_run = mysqli_query($connection,$query);
while($row=mysqli_fetch_array($query_run))
{
?>										
										<tr>
											<td><?php echo $row['invoiceNumber']; ?></td>
											<td><?php echo $row['name'];?></td>
											<td><?php echo $row['regDate'];?></td>
										
											<td><button type="button" class="btn btn-danger">Declined</button></td>
											
											<td>   <a href="details.php?cid=<?php echo $row['invoiceNumber'];?>"> <button type="button" class="btn btn-info">View Details</button></a> 
											</td>
                                            
											</tr>

										<?php  } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>