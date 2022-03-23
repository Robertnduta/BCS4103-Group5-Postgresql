<?php
include('connection.php');
if(isset($_POST['formsubmit'])){


$sql="INSERT INTO public.user(email,password)VALUES('".$_POST['emaill']."','".$_POST['passwordd']."')";
$result=pg_query($sql);
if($result){

         $message_success="registration Successfull";

 }
 else{

          $message_fail="email is already in use";
 }
}
header('location:login.php?msg='.$message_success);

exit();






 ?>
