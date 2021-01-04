
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "r_voting_db";


$conn = mysqli_connect($servername , $username , $password ,$database);





 ?>

<?php
  
  session_start();
    if(isset($_POST['login']))
    {

        
        $admin_name=$_POST['admin_name'];
        $pass =$_POST['admin_password'];
       

        if($admin_name=="admin" and $pass=="admin123"){

            $_SESSION['admin_name']=$admin_name;

            header("location:/rvoting/admin/dashboard.php");

        }
        else{
            
            header("location:/rvoting/admin/index.php");
        }

    }
?>
