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
    <link rel="stylesheet" href="styles.css">
    <title>Online Voting System</title>
</head>

<body>

    <!-- navbar -->
    <?php

    session_start();
    include("includes/_header.php");
?>
    <?php
    include 'includes/_db.php';  

    if(isset($_POST['login'])){

        
        $user_usn = $_POST['user_usn'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        
        

        $sql = "SELECT * FROM `user_db` WHERE user_email='$user_email' AND user_password='$user_password'";
        
        $result = mysqli_query($conn, $sql);

        if($result->num_rows>0){
            while($row = $result->fetch_array()){
                $_SESSION['user_name']=$user_name = $row['user_name'];
                $_SESSION['user_email']=$user_email=$row['user_email'];
                $_SESSION['user_usn']=$user_usn=$row['user_usn'];
                $_SESSION['user_id']=$user_id=$row['user_id'];
                $_SESSION['m_vote']=$m_vote=$row['m_vote'];

                // echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                //         <strong>Success!</strong>Loged in Successfully...
                //         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                //             <span aria-hidden="true">×</span>
                //         </button>
                //   </div>';
                  
                echo "<script>window.location.href='welcome.php'</script>";

            }
        }
        else{
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong>  Invalid Credentials...
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                  </div>';

        }


    }
?>





    <!-- Registration Form -->
    <div class="container r_form">


        <div class="container ">
            <div class="row">
                <div class="col">

                    <h1>Login</h1>
                    <form method="post">

                        <div class="form-group">
                            <label for="exampleInputEmail1">USN</label>
                            <input type="text" class="form-control" id="usn" name="user_usn"
                                aria-describedby="emailHelp" required>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="v_email" name="user_email"
                                aria-describedby="emailHelp" required>

                        </div>



                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="user_password" id="exampleInputPassword1"
                                required>
                        </div>

                        <button type="submit" class="btn btn-primary" name="login">Login</button>
                    </form>

                </div>
                <div class="col">
                    <img class="image1 img-fluid animated" src="svg/elections_09.svg" alt="election">
                </div>
            </div>

        </div>


    </div>

    <br><br><br><br><br><br><br><br><br><br>


    <!-- Footer -->
    <?php
    include("includes/_footer.php");
?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

</body>

</html>