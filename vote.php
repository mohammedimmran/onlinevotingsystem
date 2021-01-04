<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
            crossorigin="anonymous">

        <!-- css file -->
        <link rel="stylesheet" href="style.css">
        <title>Online Voting System</title>
    </head>

    <body>

        <!-- db connection -->
        <?php     session_start();
  include 'includes/_db.php';       
  include 'admin/_dbconnect.php';       ?>

        <!-- navbar -->
        <?php
    include("includes/_loginheader.php");
?>

        <?php

           
        if(!$_SESSION['user_email']){

            header("location:login.php");
        }

    ?>

        <!-- voting -->

        <div class="container">
            <div class="row">

                <div class="col">
                    <h1>
                        BOYS
                    </h1>

                    <?php

                    
                        $user_email= $_SESSION['user_email'];

                        $sql1 ="SELECT `m_vote` FROM `user_db` WHERE `user_email` = '".$user_email."'";

                        $result1=mysqli_query($conn , $sql1);
                        while($row1 = mysqli_fetch_assoc($result1))
                        {

                            $m_vote=$row1['m_vote'];
                            


                            if($m_vote>0){
                                echo "Voted";

                            }
                            else{
                                ?>



<?php echo'<form action=" '.$_SERVER["REQUEST_URI"].'" method="post">'; ?>

                    <?php
                        

                    $sql="SELECT * FROM `male_candidates_db`";
                    $result=mysqli_query($conn , $sql);

                    while($row = mysqli_fetch_assoc($result))
                    {
                        $candidate_id_m = $row['candidate_id_m'];
                        $candidate_name_m = $row['candidate_name_m'];
                        $candidate_votes_m = $row['candidate_votes_m'];
                        // $candidate_id_m = $row['candidate_id_m'];

                        echo'
                        <div class="form-check">
                        
                        <label class="form-check-label" for="exampleRadios2">
                            '.$candidate_name_m.'
                        </label>
                        
                    </div>
                    <a type="submit" class="btn btn-primary"  href="voted.php?candidate_id_m='.$candidate_id_m.'">Vote</a>
                    ';
                    }
                    echo' 
                    
                    </form>';
                
                ?>


                                <?php
                            }
                        }


                        
                           



                        

                    ?>
                    
                </div>

                <script
                    src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                    crossorigin="anonymous"></script>
                <script
                    src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
                    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
                    crossorigin="anonymous"></script>
            </body>

        </html>