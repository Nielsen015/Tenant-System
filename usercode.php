<?php
include('security.php'); 



if(isset($_POST['submit']))
{
$tenant=$_SESSION['username'];
$year=$_POST['year'];
$month=$_POST['month'];
$paymenttype=$_POST['paymenttype'];
$mode=$_POST['mode'];
$contact=$_POST['contact'];
$details=$_POST['details'];
$compfile=$_FILES["compfile"]["name"];



move_uploaded_file($_FILES["compfile"]["tmp_name"],"receipts/".$_FILES["compfile"]["name"]);
$query= "INSERT INTO receipts(tenant,year,month,paymenttype,mode,contact,details,compfile) values('$tenant','$year','$month','$paymenttype','$mode','$contact','$details','$compfile')";
$query_run = mysqli_query($connection,$query);
$query = "SELECT invoiceNumber from receipts  order by invoiceNumber desc limit 1";
$query_run = mysqli_query($connection,$query);

while($row=mysqli_fetch_array($query_run))
{
 $inn=$row['invoiceNumber'];
}
$invoiceno=$inn;
echo '<script> alert("Your Receipt has been successfully filed and your Invoice Number is  "+"'.$invoiceno.'")</script>';
 
if($query_run)
{
    $_SESSION['status'] = "Data has been Successfully filed";
    $_SESSION['status_code'] = "success";
    header('Location: upload.php');

}
else
{
    $_SESSION['status'] = "Error! cannot submit data, please contact Admin";
    $_SESSION['status_code'] = "error";
    header('Location: upload.php');


}
}
?>