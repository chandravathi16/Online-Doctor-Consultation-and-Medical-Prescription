
<?php
    
    $message_sent=false;
    if(isset($_POST['emailid']) && $_POST['emailid']!=''){
        if(filter_var($_POST['emailid'],FILTER_VALIDATE_EMAIL)){
            $email=$_POST['emailid'];
            $mobile=$_POST['mobileno'];
            $prescription=$_POST['prescription'];

            $to="doctorconsultation12@gmail.com";
            $subj="Prescription";
            $body="";

            $body.="Email : ".$email. "\r\n";
            $body.="Mobile Number: ".$mobile. "\r\n";
            $body.="Prescription : ".$prescription. "\r\n";

            mail($to,$subj,$body);
            $message_sent=true;
        }

    }
    /*
    $email=$_POST['emailid'];
    $mobile=$_POST['mobileno'];
    $image=$_POST['image'];
    $receiver="chandravathi1375@gmail.com";
    $subj="Prescription";
    $body="Prescription";
    $body.="Email : ".$email. "\r\n";
    $body.=" Mobile Number: ".$mobile. "\r\n";
    $body.="Prescription : ".$image. "\r\n";
    $sender="chandravathi1375@gmail.com";

    if(mail($receiver,$subj,$body,$sender)){
        echo "check the prescription through mail..";
    }
    else{
        echo "Email sending failed..";
    }
    */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="main.css"> 
    <link rel="stylesheet" href="style.css" />
    <script type="text/javascript" src="prescription.js"></script>
    <title>Prescription</title>
    <!--
    <script src= "https://smtpjs.com/v3/smtp.js"> </script> 
    <script type="text/javascript"> 
        function sendEmail() { 
            Email.send({ 
                Host: "smtp.gmail.com", 
                Username: "", 
                Password: "", 
                To: '', 
                From: "", 
                Subject: "Sending Prescription", 
                //Body: "Well that was easy!!", 
            }).then(function (message) { 
                alert("mail sent successfully") 
            }); 
        } 
    </script> 
    -->
</head>
<body>
    <!-- Nav bar-->
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="main.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About us</a>
                </li>
            </ul> &nbsp;&nbsp;
            <span class="loginlogoutlink">
                <a class="loginlogoutlink-logout btn btn-primary" href="DoctorLogin.html"
                    onclick="confirm('Logout')">Logout</a>
            </span>
        </div>
    </nav>
    <!-- Doctor Login form -->
    <section class="container-fluid">
        <br /><br /><br>
        <!-- row and justify-content-center class is used to place the form in center -->
        <section class="row justify-content-center">
            <img src="images/img3.jpg" class="rounded" alt="image1" width="350" height="340" />
            <section class="col-12 col-sm-6 col-md-4">
                <form class="form-container" name="prescription" method="post" onsubmit="return validate()">
                    <div class="form-group">
                        <h4 class="text-center font-weight-bold">Prescription</h4>
                        <div class="mb-3">
                            <label for="InputEmail1">Email Address<span style="color: red;"> *</span></label>
                            <input type="email" class="form-control" id="InputEmail1" aria-describeby="emailHelp" name="emailid" placeholder="Enter your email" required />
                        </div>
                        <div class="mb-3">
                            <label for="mobileno">Mobile Number<span style="color: red;"> *</span></label>
                            <input type="number" class="form-control" id="mobileno" placeholder="+91" name="mobileno" maxlength="10" required />
                        </div>
                        <div class="mb-3">
                            <label for="choose_img">Choose a file <span style="color: red;"> *</span></label> <br>
                            <input type="file" id="prescription" accept="pdf" name="prescription">
                        </div>
                        <a href="prescription.html"><button type="submit" class="btn btn-primary">Login</button></a> &nbsp;&nbsp;
                        <button type="reset" class="btn btn-primary">Reset</button>
                    </div>
                </form>
            </section>
        </section>
    </section>

</body>
</html>





