<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- css file -->
    <link rel="stylesheet" href="style.css">
    <title>Online Voting System</title>
</head>

<body>

    <!-- db connection -->
    <?php     session_start();
  include 'includes/_db.php';       ?>

    <!-- navbar -->
    <?php
    include("includes/_loginheader.php");
?>


    <?php

    
    if(!$_SESSION['user_email']){

        header("location:login.php");
    }

?>



    <div class="container r_form col-md-6 ">

        <h1>Login</h1>
        <div class="container">
            <form method="post">

                <div class="form-group">
                    <label for="exampleInputEmail1">USN</label>
                    <input type="text" class="form-control" id="user_usn" name="user_usn" aria-describedby="emailHelp"
                        required>

                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="user_password" id="exampleInputPassword1"
                        required>
                </div>

                <button type="submit" class="btn btn-primary" name="login">Enter voting area</button>
            </form>

        </div>


    </div>

    <?php

        if(isset($_POST['login'])){
            $user_usn = $_POST['user_usn'];
            $user_password =$_POST['user_password'];


            $sql = "SELECT * FROM `user_db` WHERE user_usn='$user_usn' AND user_password = '$user_password'";
            // $result = mysqli_query($conn, $sql);
            $result=$conn->query($sql);

            if($result->num_rows>0)
            {
                while($row=$result->fetch_array()){
                    $_SESSION['user_usn'] =$user_usn= $row['user_usn'];

                }
                // header("location:vote.php");
                echo "<script>window.location.href='vote.php'</script>";
            }
            else{
                echo "Error";

            }
   
   
        }

    ?>
































    <!-- candidates -->


    <!-- 
<div class="container my-5 categories">
        <div class="row">
            <?php

                $sql = "SELECT * FROM `users_db`";

                $result = mysqli_query($conn ,$sql);

                while($row = mysqli_fetch_assoc($result)){

                    $user_name = $row['user_name'];
                    $user_usn =$row['user_usn'];
                    

                   echo'<div class="card" style="width: 18rem;">
                   <img src="..." class="card-img-top" alt="...">
                   <div class="card-body">
                     <h5 class="card-title">'.$user_usn.'</h5>
                     <p class="card-text">'.$user_name.'</p>
                     <a href="#" class="btn btn-primary">Go somewhere</a>
                   </div>
                 </div>';
                    


                }

            ?>




            
        </div>
    </div> -->

    <!-- Footer -->
    <?php
    include("includes/_footer.php");
?>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>