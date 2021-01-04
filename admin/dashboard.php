<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
       
    }

    .card-box {
        align-items: center;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.26);
        margin: 2rem;
        border: 10px #103045;
        background-color: #ededed;
        font-family: 'Baloo Tamma 2', cursive;
        border-radius:0.5rem;
    }
    .jumbotron{
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.26);

    }
    </style>

    <title>Hello, world!</title>
</head>

<body>

    <!-- db connection -->
    <?php    
  include '_dbconnect.php';       ?>

    <?php

    session_start();
     
    if(!$_SESSION['admin_name']){

        header("location:index.php");
    }

?>







    <?php    
include '_admin_header.php';       ?>



   






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>




