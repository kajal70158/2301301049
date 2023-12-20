<?php
    include("../config1/config1.php");
    include("header1.php");
    $message='';
    if(isset($_SESSION['status']) && $_SESSION['status']!=''){
        $message= '<p>'.$_SESSION['status'].'</p>';
        unset($_SESSION['status']);
    }
    $employeeHtml='';
    $result = $conn->query("select * from employee1");
if($result->num_rows > 0){
   
    while($row = $result->fetch_assoc()){
        $id = $row['id'];
        $employeeHtml.='
        <tr>   
        <td>'.$row['id'].'</td>
        <td>'.$row['name'].'</td>
        <td>'.$row['description'].'</td>
        <td><a href="employee_manage1.php?id='.$id.'"> Edit</a>/<button>Delete</button></td>
       </tr>' ;
    }
       // echo $result->num_rows;
      // print_r($finalResult);
}
?>
<h2>employee</h2>
<a href="employee_manage1.php">Add New employee</a>
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
echo $employeeHtml;
?>
    </tbody>
    </table>
<?php
include("footer1.php");
?>