<?php
include("header1.php");
include("../config1/config1.php");
print_r($_GET);
$title='';
$description='';
if(isset($_GET['id']) && $_GET['id']>0){
//edit
$result = $conn->query("select * from role1 where id=".$_GET['id']);
if($result->num_rows>0){
$row = $result->fetch_assoc();
print_r($row);
$title=$row['name'];
$description=$row['description'];

}
}
?>
<h2>blog Manage</h2>
<form method="post" action="callback/blog1.php" enctype="multipart/form-data">
<input type="text" name="title" required>
<input type="description" name="description">
<input type="password" name="password">
<input type="submit">
</form>
<?php
include("footer1.php");
?>