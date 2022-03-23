<?php
session_start();
include('connection.php');
if(isset($_POST['submitt'])){


$sql="INSERT INTO public.recipe(image,title,description,ingredients)VALUES('".$_POST['filename']."','".$_POST['tittle']."'
,'".$_POST['descr']."','".$_POST['ing']."')";
$result=pg_query($sql);
if($result){
  $message_sucess="recipe was uploaded";


 }
 else{

        $message_fail="upload unsuccesful";
 }
 header('location:upload.php?msg='.$message_sucess);
 exit();
}
 ?>
