<?php
include("header1.php");
$title='';
$description='';
if(isset($_GET['id']) && $_GET['id']>0){
//edit
$result = $conn->query("select * from category where id=".$_GET['id']);
if($result->num_rows>0){
$row = $result->fetch_assoc();
print_r($row);
$title=$row['name'];
$description=$row['description'];

}
}
?>
<h2>Category Manage</h2>

<form method='POST'action='callback\category1.php'enctype="multipart/form-date">
    <input type='text'name='title'>
    <input type='text'name="description">
    <input type='submit'>
</form>
<?php 
include("footer1.php");
?>