<?php

include "_dbconnect.php"; 

$id = $_GET['candidate_id_f']; 

$del = mysqli_query($conn,"delete from `female_candidates_db` where id = '$id'"); 

if($del)
{
    mysqli_close($conn); // Close connection
    header("location:candidatesList.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>