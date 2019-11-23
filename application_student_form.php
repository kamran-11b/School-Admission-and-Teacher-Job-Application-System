<?php
include("database/connectdb.php");

if (isset($_POST["submit"])) {
    
    //Personal Information
        
    $applicant_id = $_POST["applicant_id"];
    $admission_class = $_POST["admission_class"];
    $medium = $_POST["medium"];
    $previous_school = $_POST["previous_school"];
    $previous_result = $_POST["previous_result"];
    $student_name = $_POST["student_name"];
    $father_name = $_POST["father_name"];
    $mother_name = $_POST["mother_name"];
    $gender = $_POST["gender"];
    $relegion = $_POST["relegion"];
    $nationality = $_POST["nationality"];
    $nid_no = $_POST["nid_no"];
    $date_of_birth = $_POST["date_of_birth"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
  
    //address
    
    $division = $_POST["division"];
    $district = $_POST["district"];
    $thana = $_POST["thana"];
    $post_code = $_POST["post_code"];
    $address = $_POST["address"];
    
    $payment_status = $_POST["payment_status"]; 
    
    //Insert Query
     $applicant_student = "INSERT INTO `admission_student`(`admission_id`, `admission_class`, `medium`, `previous_school`, 
            `previous_result`, `student_name`, `father_name`, `mother_name`, `gender`, `relegion`, `nationality`, `nid_no`, 
           `date_of_birth`, `email`, `phone_number`, `division`, `district`, `thana`, `post_code`, `address`, `payment_status`)
            VALUES(NULL,'$admission_class', '$medium','$previous_school', '$previous_result', '$student_name', '$father_name',
            '$mother_name','$gender', '$relegion', '$nationality', '$nid_no','$date_of_birth', '$email', '$phone_number',
            '$division', '$district', '$thana', '$post_code', '$address', '$payment_status')";
    
   

    if ($connect->query($applicant_student) == TRUE) {
        echo '<script> alert("Submitted Succesfuly");</script>';
        header("Location:application_student_form.php");
    } else {
        die($connect->error);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Student Application Formr</title>
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
                        <h5><b>Student Admission Form</b></h5>
                    </center>
                </fieldset><br>
                <h6>Personal Information:</h6>
                <fieldset class="border p-3 border-success bg-secondary">

                    <div class="form-group row">
                        <label for="admission_class" class="col-sm-2 control-label">Admission Class</label>
                        <div class="col-sm-4">
                            <select name="admission_class" class="custom-select">
                                <option selected>Choose</option>
                                <option value="Six">Six</option>
                                <option value="Seven">Seven</option>
                                <option value="Eight">Eight</option>
                                <option value="Nine">Nine</option>
                                <option value="Ten">Ten</option>
                            </select>
                        </div>
                        <label for="medium" class="col-sm-2 control-label">Medium</label>
                        <div class="col-sm-4">
                            <select name="medium" class="custom-select">
                                <option selected>Choose</option>
                                <option value="Bangla">Bangla</option>
                                <option value="English">English</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="previous_school" class="col-sm-2 control-label">School</label>
                        <div class="col-sm-4">
                            <input type="text" name="previous_school" placeholder="Enter Previous School Name" class="form-control" autofocus required>
                        </div>
                        <label for="previous_result" class="col-sm-2 control-label">Result</label>
                        <div class="col-sm-4">
                            <input type="text" name="previous_result" placeholder="Enter Previous Class Result" class="form-control" autofocus required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="student_name" class="col-sm-2 control-label">Student Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="student_name" placeholder="Enter your name" class="form-control" autofocus required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="father_name" class="col-sm-2 control-label">Father Name</label>
                        <div class="col-sm-4">
                            <input type="text" name="father_name" placeholder="Enter your father name" class="form-control" autofocus required>
                        </div>
                        <label for="mother_name" class="col-sm-2 control-label">Mother Name</label>
                        <div class="col-sm-4">
                            <input type="text" name="mother_name" placeholder="Enter your mother name" class="form-control" autofocus required>
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
                            <input type="text" name="relegion" placeholder="Enter your relegion" class="form-control" autofocus required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nationality" class="col-sm-2 control-label">Nationality</label>
                        <div class="col-sm-4">
                            <input type="text" name="nationality" placeholder="Enter your nationality" class="form-control" autofocus required>
                        </div>
                        <label for="nid_no" class="col-sm-2 control-label">National ID</label>
                        <div class="col-sm-4">
                            <input type="text" name="nid_no" placeholder="Enter your NID" class="form-control" autofocus required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date_of_birth" class="col-sm-2 control-label">Date of Birth</label>
                        <div class="col-sm-4">
                            <input type="date" name="date_of_birth" placeholder="Date of Birth" class="form-control" autofocus required>
                        </div>
                        <label for="email" class="col-sm-2 control-label">E-Mail</label>
                        <div class="col-sm-4">
                            <input type="email" name="email" placeholder="neub@gmail.com" class="form-control" autofocus required>
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
                </fieldset>

                <button type="submit" name="submit"  class="btn btn-info btn-md btn-block btn-round">Submit Form</button>
                <br>

            </form>
        </section>
        <!-- Application Form End-->
        <script type="text/javascript">
            function JSalert() {
                swal("Congrats!", ", Your account is created!", "success");
            }
        </script>

        <!-- Footer Start-->
        <?php include("include/footer.php"); ?><br>
        <!-- Footer End-->
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
