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
    include("includes/_header.php");
?>
    <?php
    include 'includes/_db.php';  

    if(isset($_POST['register'])){

        $user_name = $_POST['user_name'];
        $user_usn = $_POST['user_usn'];
        $user_email = $_POST['user_email'];
        $user_gender = $_POST['user_gender'];
        $user_password = $_POST['user_password'];

        if(($user_usn[5] == "i" and $user_usn[6] == "s") or ($user_usn[5] == "i" and $user_usn[6] == "s") )
        {

            $select = "SELECT * FROM `user_db` WHERE `user_usn` = '$user_usn'"; 
            $result1 = mysqli_query($conn, $select);

            if($result1->num_rows>0)
            {
                echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> USN already Registered Login now...
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
          </div>';

            }
            else{

                $sql = "INSERT INTO `user_db` ( `user_name`, `user_usn`, `user_email`, `user_gender`, `user_password` , `datetime`) 
                     VALUES ( '$user_name', '$user_usn', '$user_email', '$user_gender', '$user_password', current_timestamp())";
            $result2 = mysqli_query($conn, $sql);


            $alert = true;
            if($alert){
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> Your Registration is Done ... Login now
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                  </div>';
                    }

            }


            
        }
        else{
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Error!</strong>Only IS department are eligible for voting...
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                </div>';
            
        }


    }
?>





    <!-- Registration Form -->
    <div class="container r_form " >

        <h1>Registration</h1>
        <div class="container" style="height:70vh;">
            <div class="row">
                <div class="col">
                <form method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1"> Full Name</label>
                    <input type="text" class="form-control" id="name" name="user_name" aria-describedby="emailHelp"
                        required>

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">USN</label>
                    <input type="text" class="form-control" id="usn" name="user_usn" aria-describedby="emailHelp"
                        required>

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="v_email" name="user_email" aria-describedby="emailHelp"
                        required>

                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Gender</label>
                    <select name="user_gender" class="form-control" required>
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>


                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="user_password" id="exampleInputPassword1"
                        required>
                </div>

                <button type="submit" class="btn btn-primary" name="register">Submit</button>
            </form>
                </div>
                <div class="col">
                <img class="image1 img-fluid animated" src="svg/elections_05.svg" alt="election">
                </div>
            </div>

        </div>


    </div>

    <br><br><br><br><br><br><br><br><br><br>


    <!-- Footer -->
    <?php
    include("includes/_footer.php");
?>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>