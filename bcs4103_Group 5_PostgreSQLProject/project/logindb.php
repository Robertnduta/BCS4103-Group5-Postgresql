<?php
include('connection.php');
if(isset($_POST['submitt'])){
$sql="SELECT * fROM public.user WHERE email='".($_POST['user'])."' AND password='".($_POST['pass'])."'";
    $data = pg_query($sql);
    $login_check = pg_num_rows($data);
    if($login_check > 0){

               $message_success="you are logged in";

    }else{

      $message_fail="login failed";

    }

    header('location:landing.php?msgpass='.$message_success);

}
