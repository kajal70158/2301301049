<?php
include("../config1/config1.php");
include("header1.php");

$id='';
$title='';
$description='';
if(isset($_GET['id'])&& $_GET['id']>0){
$id=$_GET['id'];

  $a = $conn->query("select name,description from role1 where id=".$id);
  //echo $a->num__rows;
  if($a->num_rows>0){
    $c = $a->fetch_assoc();
    $title=$c['name'];
    $description=$c['description'];
  }
}
//add
/*$title='';
$description='';
//print_r($_GET);
if(isset($_GET['id'])&& $_GET['id']>0){
    //edit
    $result = $conn->query("select * from role1 where id=".$_GET['id']);
    if($result->num_rows >0){
        $row = $result->fetch_assoc();  
        print_r($row);
        $title=$row['name'];
        $description=$row['description'];
    }
}
if($conn->connect_error){
    echo "failed";
}
else{
    echo "pass";
}*/
?>
<h2>Role Manage</h2>
<form method="post" action="callback/role2.php" enctype="multipart/form-data">
<input type="text" name="title" value="<?php echo $title;?>" required>
<textarea name="description"><?php echo $description;?> </textarea>
<input type="Submit">
</form>
<?php

include("footer1.php");
?>