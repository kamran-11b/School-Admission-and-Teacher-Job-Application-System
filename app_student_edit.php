

<?php
session_start();
include("database/connectdb.php");
if (isset($_SESSION["admin_email"]) || isset($_COOKIE['admin_email'])) {
         //ok

  $up_id=$_GET['admission_id'];
  $fq = "SELECT * FROM `admission_student` WHERE admission_id='$up_id' ";
  $result = $connect->query($fq);


  if(isset($_POST['update'])){
    $admission_id = $_POST['admission_id'];

    $payment_status = $_POST["payment_status"];

    $update_query=" UPDATE `admission_student` SET admission_id='$admission_id',payment_status ='$payment_status' WHERE  admission_id='$admission_id' ";

    if ($connect->query($update_query) == TRUE) 
      header("Location:app_student.php");
    else 
      die($connect->error);
  }
  ?>

  <!DOCTYPE html>
  <html>

  <head>
    <title>about</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      body {
        font-family: Verdana, sans-serif;
        margin: auto;
      }

    </style>

  </head>

  <body>

    <div class="container-fluid">
      <!--Admin Header Start-->
      <?php include("include/header_admin.php"); ?>
      <!--Admin Header End-->
      
      <div class="row">
        <div class="col-sm-offset-3 col-sm-8">
          <br><br>
          <h5 class="form-group">Update Payment Status</h5>

          <?php   $i = 1;
          while ($row = $result->fetch_assoc()){?>
            <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST" class="jumbotron" > 

              <div class="form-group row ">
                <label for="admission_id" class="col-sm-3  control-label">Admission ID</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control form-group" name="admission_id"  value="<?php echo $row['admission_id'] ?>" autofocus required>
                </div>
              </div>
              <div class="form-group row">
                <label for="payment_status" class="col-sm-3  control-label">Payment Status</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control form-group" name="payment_status"  value="<?php echo $row['payment_status'] ?>"autofocus required>
                </div>
              </div>
              <div class="col-sm-6 offset-md-4">
               <input type="submit" name="update"  class="col-sm-5 align-self-center form-control btn-primary form-group" value="Update">
             </div>
           </form>
           <?php $i++; } ?>

         </div>
       </div>
       
       <!-- Footer Start-->
       <?php include("include/footer.php"); ?><br>
       <!-- Footer End-->
     </div>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>

   </html>
   <?php
 } else {
  header("location:login.php");
}
?>
