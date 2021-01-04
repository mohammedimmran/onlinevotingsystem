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



    <!--<div class="container mt-4 pt-4">

        <div class="jumbotron">

            <div class="row m-4">

                <?php

            $sql = "SELECT * FROM `male_candidates_db`";

            $result = mysqli_query($conn ,$sql);

            while($row = mysqli_fetch_assoc($result)){

                $candidate_id_m=$row['candidate_id_m'];
                $candidate_name_m=$row['candidate_name_m'];
                $candidate_usn_m=$row['candidate_usn_m'];
                $candidate_email_m=$row['candidate_email_m'];
                $candidate_sem_m=$row['candidate_sem_m'];
                $candidate_gender_m=$row['candidate_gender_m'];
                $candidate_branch_m=$row['candidate_branch_m'];
                $candidate_about_m=$row['candidate_about_m'];
                $candidate_vote_m=$row['candidate_votes_m'];


                echo'

                <div class="col-md-4 col-sm-12 col-xsm-12   ">
                <div class="card card-box bg-light text-dark"  style="width:300px; height:420px">
                        <img class="card-img-top mt-2"  style="width:50% ;height:60px; " src="https://cdn2.iconfinder.com/data/icons/ios-7-icons/50/user_male2-512.png" alt="Card image" style="width:100%">
                        <div class="card-body bg-light text-dark">
                          <h4 class="card-title text-success text-center">'.$candidate_name_m.'</h4>
                          <p class="card-text text-center text-warning"> USN:'.$candidate_usn_m.' <br>
                          Email :'.$candidate_email_m.' <br>
                          Semester :'.$candidate_sem_m.'<br>
                          Genger :'.$candidate_gender_m.'<br>
                          Branch :'.$candidate_branch_m.' <br>

                          About :'.$candidate_about_m.'
                          </p>
                          

                          <p class="text-danger text-center">Vote:'.$candidate_vote_m.'<br><p>
                          <div class="container" style="justify-content:center; align-itmes:center; display:flex;"><a href="#" class="btn btn-dark  text-center">Delete Candidate</a></div>
                          
                          
                </div>
                </div>
                        </div>
                
                ';
            }
            
            ?>
            


            </div>

        </div>
    </div>




    <div class="container mt-4 pt-4">

        <div class="jumbotron">

            <div class="row m-4">

                <?php

                    $sql = "SELECT * FROM `female_candidates_db`";

                    $result = mysqli_query($conn ,$sql);

                    while($row = mysqli_fetch_assoc($result)){

                        $candidate_id_f=$row['candidate_id_f'];
                        $candidate_name_f=$row['candidate_name_f'];
                        $candidate_usn_f=$row['candidate_usn_f'];
                        $candidate_email_f=$row['candidate_email_f'];
                        $candidate_sem_f=$row['candidate_sem_f'];
                        $candidate_gender_f=$row['candidate_gender_f'];
                        $candidate_branch_f=$row['candidate_branch_f'];
                        $candidate_about_f=$row['candidate_about_f'];
                        $candidate_vote_f=$row['candidate_vote_f'];


                        echo'

                        <div class="col-md-4 col-sm-12 col-xsm-12   ">
                        <div class="card card-box bg-light text-dark"  style="width:300px; height:400px">
                                <img class="card-img-top mt-2"  style="width:50% ;height:60px; " src="
                                https://static.thenounproject.com/png/236432-200.png" alt="Card image" style="width:100%">
                                <div class="card-body bg-light text-dark">
                                  <h4 class="card-title text-success text-center">'.$candidate_name_f.'</h4>
                                  <p class="card-text text-center text-warning"> USN:'.$candidate_usn_f.' <br>
                                  Email :'.$candidate_email_f.' <br>
                                  Semester :'.$candidate_sem_f.'<br>
                                  Genger :'.$candidate_gender_f.'<br>
                                  Branch :'.$candidate_branch_f.' <br>

                                  About :'.$candidate_about_f.'
                                  </p>
                                  

                                  <p class="text-danger text-center">Vote:'.$candidate_vote_f.'<br><p>
                                  <div class="container" style="justify-content:center; align-itmes:center; display:flex;">
                                    <a href="#" class="btn btn-dark  text-center">Delete Candidate</a>
                                  </div>
                                  
                                </div>
                        </div>
                        </div>
                        ';
                    }
                    
                    ?>


            </div>

        </div>-->
  


        <div class="container-fluid mt-4 pt-4">

<div class="container-fluid">

    

<table class="table table-responsive-sm  table-responsive-md ">
  <thead class="thead-dark">
  <h1 class="text-dark text-center">BOYS</h1>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NAME</th>
      <th scope="col">USN</th>
      <th scope="col">EMAIL</th>
      <th scope="col">GENDER</th>
      <th scope="col">SEM</th>
      <th scope="col">BRANCH</th>
      <th scope="col" >ABOUT</th>
      <th scope="col">VOTES</th>
      <th scope="col">EDIT</th>
      <th scope="col">DELETE</th>
      
    </tr>
  </thead>


  <tbody>

  <?php

$sql = "SELECT * FROM `male_candidates_db`";

$result = mysqli_query($conn ,$sql);

$count=0;

while($row = mysqli_fetch_assoc($result)){

    $candidate_id_m=$row['candidate_id_m'];
    $candidate_name_m=$row['candidate_name_m'];
    $candidate_usn_m=$row['candidate_usn_m'];
    $candidate_email_m=$row['candidate_email_m'];
    $candidate_sem_m=$row['candidate_sem_m'];
    $candidate_gender_m=$row['candidate_gender_m'];
    $candidate_branch_m=$row['candidate_branch_m'];
    $candidate_about_m=$row['candidate_about_m'];
    $candidate_vote_m=$row['candidate_votes_m'];

    $count++;

    echo'<tr>
      <th scope="row">'.$count.'</th>
      <td>'.$candidate_name_m.'</td>
      <td>'.$candidate_usn_m.'</td>
      <td>'.$candidate_email_m.'</td>
      <td>'.$candidate_gender_m.'</td>
      <td>'.$candidate_sem_m.'</td>
      <td>'.$candidate_branch_m.'</td>
      <td>'.$candidate_about_m.'</td>
      <td>'.$candidate_vote_m.'</td>
      <td><a class="btn btn-success">EDIT</a></td>
      <td><a class="btn btn-danger">DELETE</a></td>
     
    </tr>';}

    ?>
    
  </tbody>
</table>

        
    


    </div>

</div>
</div>


<div class="container-fluid mt-4 pt-4">

<div class="container-fluid">

    

<table class="table table-responsive-sm  table-responsive-md ">
  <thead class="thead-dark">
  <h1 class="text-dark text-center">GIRLS</h1>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NAME</th>
      <th scope="col">USN</th>
      <th scope="col">EMAIL</th>
      <th scope="col">GENDER</th>
      <th scope="col">SEM</th>
      <th scope="col">BRANCH</th>
      <th scope="col" >ABOUT</th>
      <th scope="col">VOTES</th>
      <th scope="col">EDIT</th>
      <th scope="col">DELETE</th>
      
    </tr>
  </thead>


  <tbody>

  <?php

$sql = "SELECT * FROM `female_candidates_db`";

$result = mysqli_query($conn ,$sql);

$count=0;

while($row = mysqli_fetch_assoc($result)){

    $candidate_id_f=$row['candidate_id_f'];
    $candidate_name_f=$row['candidate_name_f'];
    $candidate_usn_f=$row['candidate_usn_f'];
    $candidate_email_f=$row['candidate_email_f'];
    $candidate_sem_f=$row['candidate_sem_f'];
    $candidate_gender_f=$row['candidate_gender_f'];
    $candidate_branch_f=$row['candidate_branch_f'];
    $candidate_about_f=$row['candidate_about_f'];
    $candidate_vote_f=$row['candidate_vote_f'];

    $count++;

    echo'<tr>
      <th scope="row">'.$count.'</th>
      <td>'.$candidate_name_f.'</td>
      <td>'.$candidate_usn_f.'</td>
      <td>'.$candidate_email_f.'</td>
      <td>'.$candidate_gender_f.'</td>
      <td>'.$candidate_sem_f.'</td>
      <td>'.$candidate_branch_f.'</td>
      <td>'.$candidate_about_f.'</td>
      <td>'.$candidate_vote_f.'</td>
      <td><a class="btn btn-success">EDIT</a></td>
     
      <td><a class="btn btn-danger" href="_deleteCandidate.php?id='.$candidate_id_f.'">DELETE</a></td>
      
     
      
      
     

     
    </tr>';}

    ?>
    
  </tbody>
</table>

        
    

<!-- <td><a class="btn btn-danger">DELETE</a></td> -->
    </div>

</div>
</div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>




