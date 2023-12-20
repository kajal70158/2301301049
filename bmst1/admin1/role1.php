<?php
include("../config1/config1.php");
include("header1.php");

if(isset($_SESSION['status']) && $_SESSION['status']!=''){
    $message= '<p>'.$_SESSION['status'].'</p>';
    unset($_SESSION['status']);
}
$roleHtml='';
$result = $conn->query("select * from role1");
//print_r("result");
//die;
if($result->num_rows > 0){
    
    while($row = $result->fetch_assoc()){
        //echo 'dgfgh';
        $id = $row['id']; 
       $roleHtml .= '
      <tr>   
        <td>'.$row['id'].'</td>
        <td>'.$row['name'].'</td>
        <td>'.$row['description'].'</td>
        <td><a href="role_manage1.php?id='.$id.'"> Edit</a>/<button>Delete</button></td>
       </tr> ';
    }
    print_r($_GET);
}
?>
<h2>Role</h2>
<a href="role_manage1.php">Add New Role</a>
<table border="1" style="width:100%">
    <thead>
        <tr>   
        <th>S.no</th>
        <th>Title</th>
        <th>Description</th>
        <th>Action</th>
       </tr>   
</thead>
<tbody>
    <thead>
    <?php 
    echo $roleHtml;
    ?>
</thead>
        <!--<tr>   
        <td>1</td>
        <td>Admin</td>
        <td>This is Kajal</td>
        <td><button> Edit </button>/<button>Delete</button></td>
       </tr>--> 
</tbody> 
</table>
<?php
include("footer1.php");
?>