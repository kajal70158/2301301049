<?php
    include("../config1/config1.php");
    include("header1.php"); 
    print_r($_GET);

    $title='';
    $email_id='';
    
      if(isset($_GET['id']) && $_GET['id']>0){
        //edit
    
        $result=$conn->query("select * from employee1 where id=".$_GET['id']);
        //$checkResult ke sath kuch or bhi bhi likh sakte ho
         if($result->num_rows>0)//
         {
         $row=$result->fetch_assoc();
         print_r($row);
         $title=$row['name'];
         $email_id=$row['email_id'];
    
         }
        }
    if($conn->connect_error){
        echo'failed';
    }else{
        echo'pass';
    }
    // select
?>
<h2>employee Manage</h2>
<form method="post" action="callback\employee1.php" enctype="multipart/form-data">
<input type="text" name="title" required>
<input type="email_id" name="email_id">
<input type="password" name="password">
<input type="submit">
<?php
include("footer1.php");
?>