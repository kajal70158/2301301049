<?php

include("../../config1/config1.php");
if(isset($_POST['title']) && trim($_POST['title'])!=''){
    //insert
   // echo 'here';  
   $title = $_POST['title'];
   $description = $_POST['description'];
    $query = "INSERT INTO blog1(blog_name,description) VALUES ('$title','$description')";
    $checkResult = $conn->query($query);

    if($checkResult){
        $_SESSION['status']='success';
        header("location:../blog1.php");
        
    }
    else{
        $_SESSION['status']='fail';
        header("location:../blog1.php");
        
    }
}
//update
//delete

?>