<?php
if (isset($_GET['applicant_id'])) {
    include("database/connectdb.php");
    
    $delete_id = $_GET['applicant_id'];
    
    $deleteQuery = "DELETE FROM applicant_teacher where applicant_id=$delete_id";
    
    if ($connect->query($deleteQuery)) {
        header("Location:app_teacher.php");
       
    } else {
        die($connect->error);
    }
}
?>
