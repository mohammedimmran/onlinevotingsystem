<!-- db connection -->
<?php     session_start();
  include 'includes/_db.php';       ?>

<?php

    
if(!$_SESSION['user_email']){

    header("location:login.php");
}

?>

  
  <?php

   
    $id = $_GET['candidate_id_m'];
    $sql = "SELECT * FROM `male_candidates_db` WHERE candidate_id_m=$id"; 
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $candidate_votes_m = $row['candidate_votes_m'];
        $candidate_id_m = $row['candidate_id_m'];
        
    }

    $candidate_votes_m=$candidate_votes_m + 1;

  

    $sql2 = "UPDATE `male_candidates_db` SET `candidate_votes_m` = '$candidate_votes_m' WHERE `male_candidates_db`.`candidate_id_m` = '$candidate_id_m';"; 
    $result2 = mysqli_query($conn, $sql2);

    

    $user_id=$_SESSION['user_id'];
    $user_email=$_SESSION['user_email'];
    
    // $sql3="UPDATE `user_db` SET `m_vote` = '1' WHERE `user_db`.`user_id` = '$user_id'";
    $sql3="UPDATE `user_db` SET `m_vote` = '1' WHERE `user_db`.`user_email` = '$user_email'";
    $result3 = mysqli_query($conn, $sql3);

    header("Location:vote.php");

    


?>