<?php
include("database/connectdb.php");

if (isset($_POST["submit"])) {

    //Personal Information
    $applicant_id = $_POST["applicant_id"];
    $applicant_name = $_POST["applicant_name"];
    $father_name = $_POST["father_name"];
    $mother_name = $_POST["mother_name"];
    $gender = $_POST["gender"];
    $relegion = $_POST["relegion"];
    $nationality = $_POST["nationality"];
    $nid_no = $_POST["nid_no"];
    $date_of_birth = $_POST["date_of_birth"];
    $applicant_email = $_POST["applicant_email"];
    $phone_number = $_POST["phone_number"];
    
    //Address
    $division = $_POST["division"];
    $district = $_POST["district"];
    $thana = $_POST["thana"];
    $post_code = $_POST["post_code"];
    $address = $_POST["address"];
    
    //Education
    $ssc = $_POST["ssc"];
    $hsc = $_POST["hsc"];
    $graduation = $_POST["graduation"];
    $payment_status = $_POST["payment_status"];

    
    
    $applicant_teacher = "INSERT INTO `applicant_teacher` (`applicant_id`, `applicant_name`, `father_name`, `mother_name`, `gender`, `relegion, 
    `nationality`, `nid_no`, `date_of_birth`, `applicant_email`, `phone_number`, `division`, `district`, `thana`, `post_code`, `address`, `ssc`, `hsc`, `graduation`, `payment_status`)VALUES(NULL,'$applicant_name', '$father_name', '$mother_name', '$gender', '$relegion', 
    '$nationality', '$nid_no','$date_of_birth', '$applicant_email', '$phone_number','$division','$district','$thana','$post_code', '$address', '$ssc', '$hsc', '$graduation', '$payment_status')";


    if ($connect->query($applicant_teacher) == TRUE) {
        echo '<script> alert("Submitted Succesfuly");</script>';
        header("Location:application_teacher_form.php");
    } else {
        die($connect->error);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Teacher Application Formr</title>
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
        <?php include("include/header.php"); ?><br>
        <!-- Application Form Start-->
        <section>
            <form class="form-horizontal" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" role="form">
                <fieldset class="border p-3 border-success bg-dark text-white">
                    <center>
                        <h5><b>Teacher Application Form</b></h5>
                    </center>
                </fieldset><br>

                <h6>Personal Information:</h6>

                <fieldset class="border p-3 border-success bg-secondary">
                    <div class="form-group row">
                        <label for="applicant_name" class="col-sm-2 control-label">Applicant Name</label>
                        <div class="col-sm-10">
                            <input type=" text" name="applicant_name" placeholder="Enter your name" class="form-control" autofocus required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="father_name" class="col-sm-2 control-label">Father Name</label>
                        <div class="col-sm-4">
                            <input type=" text" name="father_name" placeholder="Enter your father name" class="form-control" autofocus required>
                        </div>
                        <label for="mother_name" class="col-sm-2 control-label">Mother Name</label>
                        <div class="col-sm-4">
                            <input type=" text" name="mother_name" placeholder="Enter your mother name" class="form-control" autofocus required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gender" class="col-sm-2 control-label">Gender</label>
                        <div class="col-sm-4">
                            <select name="gender" class="custom-select">
                                <option selected>Choose</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <label for="relegion" class="col-sm-2 control-label">Relegion</label>
                        <div class="col-sm-4">
                            <input type=" text" name="relegion" placeholder="Enter your relegion" class="form-control" autofocus required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nationality" class="col-sm-2 control-label">Nationality</label>
                        <div class="col-sm-4">
                            <input type="text" name="nationality" placeholder="Enter your nationality" class="form-control" autofocus required>
                        </div>
                        <label for="nid_no" class="col-sm-2 control-label">National ID</label>
                        <div class="col-sm-4">
                            <input type=" text" name="nid_no" placeholder="Enter your NID" class="form-control" autofocus required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date_of_birth" class="col-sm-2 control-label">Date of Birth</label>
                        <div class="col-sm-4">
                            <input type="date" name="date_of_birth" placeholder="Date of Birth" class="form-control" autofocus required>
                        </div>
                        <label for="applicant_email" class="col-sm-2 control-label">E-Mail</label>
                        <div class="col-sm-4">
                            <input type="email" name="applicant_email" placeholder="neub@gmail.com" class="form-control" autofocus required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="phone_number" class="col-sm-2 control-label">Phone Number</label>
                        <div class="col-sm-4">
                            <input type="text" name="phone_number" placeholder="Enter your phone number" class="form-control" autofocus required>
                        </div>
                    </div>

                </fieldset><br>

                <h6>Address:</h6>

                <fieldset class="border p-3 border-success  bg-secondary">
                    <div class="form-group row">
                        <label for="division" class="col-sm-2 control-label">Division</label>
                        <div class="col-sm-4">
                            <input type="text" name="division" placeholder="Enter your division" class="form-control" autofocus required>
                        </div>
                        <label for="district" class="col-sm-2 control-label">District</label>
                        <div class="col-sm-4">
                            <input type="text" name="district" placeholder="Enter your district" class="form-control" autofocus required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="thana" class="col-sm-2 control-label">Thana</label>
                        <div class="col-sm-4">
                            <input type="text" name="thana" placeholder="Enter your thana" class="form-control" autofocus required>
                        </div>
                        <label for="post_code" class="col-sm-2 control-label">Post Code</label>
                        <div class="col-sm-4">
                            <input type="text" name="post_code" placeholder="3100" class="form-control" autofocus required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10">
                            <input type="text" name="address" placeholder="Amborkhana,Sylhet" class="form-control" autofocus required>
                        </div>
                    </div>
                </fieldset><br>


                <h6>Education:</h6>
                <fieldset class="border p-3 border-warning bg-secondary">
                    <div class="form-group row">
                        <label for="ssc" class="col-sm-2 control-label">SSC Level</label>
                        <div class="col-sm-10">
                            <input type="text" name="ssc" placeholder="Example: School Name,Result,Subject,Passing Year" class="form-control" autofocus required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="hsc" class="col-sm-2 control-label">HSC Level</label>
                        <div class="col-sm-10">
                            <input type="text" name="hsc" placeholder="Example: College Name,Result,Subject,Passing Year" class="form-control" autofocus required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="graduation" class="col-sm-2 control-label">Graduation Level</label>
                        <div class="col-sm-10">
                            <input type="text" name="graduation" placeholder="Example: University Name,Result,Subject,Passing Year" class="form-control" autofocus required>
                        </div>
                    </div>
                </fieldset>

                <button type="submit" name="submit" class="btn btn-info btn-md btn-block btn-round">Submit Form</button>
                <br>

            </form>
        </section>
        <!-- Application Form End-->

        <!-- Footer Start-->
        <?php include("include/footer.php"); ?><br>
        <!-- Footer End-->
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
