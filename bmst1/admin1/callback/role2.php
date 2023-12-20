<?php

include("../../config1/config1.php");

if(isset($_POST['title']) && trim($_POST['title'])!=''){
    //insert
   // echo 'here';  
   $title = $_POST['title'];
   $description = $_POST['description'];
   $query = "INSERT INTO `role1` ( `name`, `description`) VALUES ('$title', '$description')";
   $checkResult = $conn->query($query);
  //echo'here';
    if($checkResult)
    {
        $_SESSION['status']='success';
        header("location:../role1.php");
        
    }
    else{
        $_SESSION['status']='fail';
        header("location:../role1.php");
        
    }
}
//update
//delete

?>