<!DOCTYPE html>
<html>

<head>
    <title>Index</title>
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
        <div>
            <img class="img-responsive" src="image/map.png" height="350px" width="100%">
        </div>

        <section class="contact py-5 bg-light" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4><b>Contact Us</b></h4>
                        <hr>
                    </div>
                    <div class="col-md-6"><br>
                        <div class="address">

                            <h5>Address:</h5>

                            <ul class="list-unstyled">
                                <li> Sofir Uddin High School</li>
                                <li> Jangail,Sylhet,Bangladesh</li>
                            </ul>
                        </div><br>
                        <div class="email">
                            <h5>Email:</h5>
                            <ul class="list-unstyled">
                                <li>suhs.edu.bd@email.com</li>
                            </ul>
                        </div><br>
                        <div class="phone">
                            <h5>Phone:</h5>
                            <ul class="list-unstyled">
                                <li>Phone:+8801785477814</li>
                                <li>Phone:+8801717929270</li>
                            </ul>
                        </div>
                        <hr>

                        <div class="social">
                            <ul class="list-inline list-unstyled">
                                <li class="list-inline-item">
                                    <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#"><i class="fa fa-youtube-play fa-2x"></i></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <input id="Full Name" name="Full Name" placeholder="Full Name" class="form-control" type="text">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <input id="Mobile No." name="Mobile No." placeholder="Mobile No." class="form-control" required="required" type="text">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <textarea id="comment" name="comment" cols="40" rows="5" placeholder="Your Message" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <button type="button" class="btn btn-danger">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer Start-->
        <?php include("include/footer.php"); ?><br>
        <!-- Footer End-->

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>
