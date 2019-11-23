<?php
       session_start();
       include("database/connectdb.php");
       if (isset($_SESSION["admin_email"]) || isset($_COOKIE['admin_email'])) {
         //ok
?>


<!DOCTYPE html>
<html>

<head>
    <title>Admin Notice</title>
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

        <div><br>
            <div class="main-contant">
                <h4>Latest Notice</h4>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="table-responsive">
                            <table class="table table-condensed table-striped table-bordered">
                                <tr class="bg-secondary">
                                    <th><strong>Sl</strong></th>
                                    <th width="70%"><strong>Notice</strong></th>
                                    <th><strong>Publish Date</strong></th>
                                </tr>
                                <tr>
                                    <th><strong>1</strong></th>
                                    <th width="70%"><strong>Semester Final Exam Summer-2019 semester</strong></th>
                                    <th><strong>20-8-2019</strong></th>
                                </tr>
                                <tr>
                                    <th><strong>2</strong></th>
                                    <th width="70%"><strong>JMC Final Exam Schedule, Summer 2019</strong></th>
                                    <th><strong>21-8-2019</strong></th>
                                </tr>
                                <tr>
                                    <th><strong>3</strong></th>
                                    <th width="70%"><strong>Payment Date of Final Exam Fees, Summer-2019 semester</strong></th>
                                    <th><strong>18-8-2019</strong></th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
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
