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
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="welcome.css">
    <style>
    </style>
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




    <div class="container-fluid" id="header">
        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-8 header-img">
                <img class="image1 img-fluid animated" src="svg/elections_02.svg" alt="election">

            </div>

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">

                <div class="container mt-4 pt-4 ">
                    <h2 class="mt-4">INFORMATION SCIENCE AND ENGINEERING</h2>
                    <h1 class="mt-4">CLASS REPRESENTATIVE ELECTION</h1>
                    <h1 class="mt-4">2020-2021</h1>

                    <a class="btn btn-vote mt-4 " href="vote.php">Vote</a>
                    <a class="btn btn-result mt-4 " href="votes.php">Results</a>
                    
                </div>


            </div>

        </div>
    </div>

    <div class="container">
      <div class="container">
        <h1 class="text-center text-dark text-uppercase">
          Candidates
        </h1>
      </div>
    </div>

































    <!-- candidates -->



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