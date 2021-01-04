<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link rel="stylesheet" href="admin.css">

    <title>Document</title>
</head>

<body>

</body>

</html>


<body>

 <!-- db connection -->
 <?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "r_voting_db";


$conn = mysqli_connect($servername , $username , $password ,$database);





?>



    <!-- admin login -->
    

    <div class="admin_form_parent">



        <div class="admin_form_child">
        <h1 class="text-success txt-center ml-4 pl-4">ADMIN</h1>
        <form method="POST" action="/rvoting/admin/_handle_admin_login.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Username or Email address</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="admin_name" placeholder="">
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="admin_password" id="exampleInputPassword1" >
            </div>
            
            <button type="submit" class="btn btn-primary" name="login">Submit</button>
        </form>

        </div>
    </div>


    <?php
     

    if(isset($_POST['login'])){

        
        $admin_name = $_POST['admin_name'];
        $admin_password = $_POST['admin_password'];

        $sql = "SELECT * FROM `admin` WHERE admin_name='$admin_name' AND admin_password='$admin_password' ";
        
        $result = mysqli_query($conn, $sql);

        

        if($result->num_rows>0){
            


            
            while($row = $result->fetch_array()){
                $admin_name = $row['admin_name'];
                

                // echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                //         <strong>Success!</strong>Loged in Successfully...
                //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                //             <span aria-hidden="true">×</span>
                //         </button>
                //   </div>';
                  
                echo "<script>window.location.href='dashboard.php'</script>";

            }
        }
        


    }
?>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>

</body>

</html>