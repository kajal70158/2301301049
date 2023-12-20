<?php
    include("../config1/config1.php");
    include("header1.php");
    $message='';
    if(isset($_SESSION['status']) && $_SESSION['status']!=''){
        $message= '<p>'.$_SESSION['status'].'</p>';
        unset($_SESSION['status']);
    }
    $blogHtml='';
$result = $conn->query("select * from blog1");
if($result->num_rows > 0){
   
    while($row = $result->fetch_assoc()){
        $id = $row['id'];
    $blogHtml .='
    <tr>
    <td>'.$row['id'].'</td>
    <td>'.$row['blog_name'].'</td>
    <td>'.$row['description'].'</td>
    <td><a href="blog_manage1.php?id='.$id.'">Edit</a>/<button>Delete</button></td>
</tr>';
}
// echo $result->num_rows;
// print_r($finalResult);
}
?>
<h2>blog</h2>
<a href="blog_manage1.php">Add New blog</a>
<table border="1" style="width:100%;">
    <thead>
        <tr>
            <th>S.no</th>
            <th>Title</th>
            <th>description</th>
            <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php 
    echo $blogHtml;
    ?>
    </tbody>
    </table>
<?php
include("footer1.php");
?>