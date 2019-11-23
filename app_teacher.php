<?php
session_start();
include("database/connectdb.php");
if (isset($_SESSION["admin_email"]) || isset($_COOKIE['admin_email'])) {
         //ok

    //database to data Fetch
    $fq = "SELECT * FROM `applicant_teacher`";
    $result = $connect->query($fq);
    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Application View Teacher</title>
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
            <?php include("include/header_admin.php"); ?>

            <div class="container-fluid pt-50 pb-100">
                <div class="row">
                    <div class="text-center"><br>
                        <h4> All Teacher Informatin</h4>
                    </div>
                    <div class="table-responsive">
                        <?php
                        if ($result->num_rows > 0) {?>
                            <table class="table table-condensed table-striped table-bordered">
                                <tr class="bg-secondary">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>E-mail</th>
                                    <th>National ID</th>
                                    <th>Date of Birth</th>
                                    <th>SSC Level</th>
                                    <th>HSC Level</th>
                                    <th>Graduation Level</th>
                                    <th>P.Status</th>
                                    <th>Action</th>
                                </tr>
                                <?php   $i = 1;
                                while ($row = $result->fetch_assoc()){?>
                                    <tr>
                                        <td> <?php echo $row['applicant_id'] ?> </td>
                                        <td> <?php echo $row['applicant_name'] ?> </td>
                                        <td> <?php echo $row['phone_number'] ?> </td>
                                        <td> <?php echo $row['applicant_email'] ?> </td>
                                        <td> <?php echo $row['nid_no'] ?> </td>
                                        <td> <?php echo $row['date_of_birth'] ?> </td>
                                        <td> <?php echo $row['ssc'] ?> </td>
                                        <td> <?php echo $row['hsc'] ?> </td>
                                        <td> <?php echo $row['graduation'] ?> </td>
                                        <td> 
                                            <?php 
                                            if($row['payment_status'])
                                                echo '<button type="button" class="btn btn-success">Accepted</button>';
                                            else
                                                echo  '<button type="button" class="btn btn-danger">Pending..</button>';
                                            ?> 
                                        </td>
                                    </td>
                                    <td><a href="app_teacher_edit.php?applicant_id=<?php echo $row['applicant_id']; ?>" class="btn btn-info">Action</a> <a href="delete_app_tr.php?applicant_id=<?php echo $row['applicant_id']; ?>" class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php $i++; } ?>
                            </table>
                        <?php } ?>

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
