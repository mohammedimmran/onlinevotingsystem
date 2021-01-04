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


    <div class="container mt-4">


        <div class="row mt-4">






            <div class="col mt-4">
                <h1 class="text-success">Boys</h1>
                <form method="post">


                    <div class="form-group">
                        <label for="exampleInputEmail1">Full Name</label>
                        <input type="text" name="candidate_name_m" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" required="required">

                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">USN</label>
                        <input type="text" name="candidate_usn_m" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" required="required">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="candidate_email_m" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" required="required">

                    </div>



                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Gender</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="candidate_gender_m"
                            required="required">

                            <option value="Male">Male</option>

                        </select>
                    </div>





                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Semester</label>
                        <select class="form-control" data-placeholder="Choose Semester ..."
                            id="exampleFormControlSelect1" name="candidate_sem_m" required="required">

                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </div>





                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Branch</label>
                        <select class="form-control" data-placeholder="Choose Branch ..." id="exampleFormControlSelect1"
                            name="candidate_branch_m" required="required">

                            <option value="ISE">Information science and engineering</option>
                            <option value="CSE">Computer Science and Engineering</option>
                            <option value="ECE">Electronics and communication Engineering</option>
                            <option value="EEE">Electrical Engineering</option>
                            <option value="ME">Mechanical Engineering</option>
                            <option value="CE">Civil Engineering</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">About</label>
                        <textarea name="candidate_about_m" class="form-control" id="exampleFormControlTextarea1"
                            rows="3" required="required"></textarea>
                    </div>


                    <button type="submit" class="btn btn-primary" name="register_male_candidate">Submit</button>
                </form>
            </div>


            <div class="col mt-4">
                <h1 class="text-success">Girls</h1>
                <form method="post">


                    <div class="form-group">
                        <label for="exampleInputEmail1">Full Name</label>
                        <input type="text" name="candidate_name_f" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" required="required">

                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">USN</label>
                        <input type="text" name="candidate_usn_f" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" required="required">

                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" name="candidate_email_f" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" required="required">

                    </div>




                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Gender</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="candidate_gender_f"
                            required="required">

                            <option value="Female">Female</option>

                        </select>
                    </div>








                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Semester</label>
                        <select class="form-control" data-placeholder="Choose Semester ..."
                            id="exampleFormControlSelect1" name="candidate_sem_f" required="required">

                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </div>





                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Branch</label>
                        <select class="form-control" data-placeholder="Choose Branch ..." id="exampleFormControlSelect1"
                            name="candidate_branch_f" required="required">

                            <option value="ISE">Information science and engineering</option>
                            <option value="CSE">Computer Science and Engineering</option>
                            <option value="ECE">Electronics and communication Engineering</option>
                            <option value="EEE">Electrical Engineering</option>
                            <option value="ME">Mechanical Engineering</option>
                            <option value="CE">Civil Engineering</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">About</label>
                        <textarea name="candidate_about_f" class="form-control" id="exampleFormControlTextarea1"
                            rows="3" required="required"></textarea>
                    </div>


                    <button type="submit" class="btn btn-primary" name="register_female_candidate">Submit</button>
                </form>
            </div>












        </div>
    </div>

    </div>



    <!-- INSERT INTO `male_candidates_db` (`candidate_id_m`, `candidate_name_m`, `candidate_usn_m`, `candidate_email_m`,
    `candidate_gender_m`, `candidate_sem_m`, `candidate_branch_m`, `candidate_about_m`, `candidate_votes_m`, `datetime`)
    VALUES (NULL, 'mohammed imran', '1va18is013', 'mohammedimran@saividya.ac.in', 'male', '5', 'ISE', 'about 1234', '0',
    current_timestamp()); -->




    <?php
     

    if(isset($_POST['register_male_candidate'])){

        
        $candidate_name_m=$_POST['candidate_name_m'];
        $candidate_usn_m=$_POST['candidate_usn_m'];
        $candidate_email_m=$_POST['candidate_email_m'];
        $candidate_sem_m=$_POST['candidate_sem_m'];
        $candidate_gender_m=$_POST['candidate_gender_m'];
        $candidate_branch_m=$_POST['candidate_branch_m'];
        $candidate_about_m=$_POST['candidate_about_m'];


        $sql="INSERT INTO `male_candidates_db` ( `candidate_name_m`, `candidate_usn_m`, `candidate_email_m`,`candidate_gender_m`,
                          `candidate_sem_m`, `candidate_branch_m`, `candidate_about_m`,  `datetime`)
                VALUES('$candidate_name_m', '$candidate_usn_m', '$candidate_email_m', '$candidate_gender_m','$candidate_sem_m', 
                        '$candidate_branch_m', '$candidate_about_m',current_timestamp());";

        $result2 = mysqli_query($conn, $sql);


        


    }
?>

<?php
     

    if(isset($_POST['register_female_candidate'])){

        
        $candidate_name_f=$_POST['candidate_name_f'];
        $candidate_usn_f=$_POST['candidate_usn_f'];
        $candidate_email_f=$_POST['candidate_email_f'];
        $candidate_sem_f=$_POST['candidate_sem_f'];
        $candidate_gender_f=$_POST['candidate_gender_f'];
        $candidate_branch_f=$_POST['candidate_branch_f'];
        $candidate_about_f=$_POST['candidate_about_f'];


        $sql="INSERT INTO `female_candidates_db` ( `candidate_name_f`, `candidate_usn_f`, `candidate_email_f`,`candidate_gender_f`,
                          `candidate_sem_f`, `candidate_branch_f`, `candidate_about_f`,  `datetime`)
                VALUES('$candidate_name_f', '$candidate_usn_f', '$candidate_email_f', '$candidate_gender_f','$candidate_sem_f', 
                        '$candidate_branch_f', '$candidate_about_f',current_timestamp());";

        $result2 = mysqli_query($conn, $sql);


        


    }
?>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

</body>

</html>