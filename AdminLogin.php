<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <script type="text/javascript" src="adminlogin.js"></script>
    <link rel="stylesheet" href="main.css"> 
</head>

<body>
    <!--Navigation bar-->
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <!-- 
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/phpmyadmin/index.php?route=/sql&server=1&db=sr+project&table=doctors_list&pos=0">View
                        Doctors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/phpmyadmin/index.php?route=/sql&server=1&db=sr+project&table=patients_list&pos=0">View
                        Patients</a>
                </li>
                -->
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="main.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="Visual1.pdf">Patients report</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Visual2.pdf">Daily patients_list</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Admin Account -->
    <section class="container-fluid">
        <!-- row and justify-content-center class is used to place the form in center -->
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-4">
                <form class="form-container" name="adminform" method="post" action="" onsubmit="return validate()">
                    <div class="form-group">
                        <h4 class="text-center font-weight-bold">Admin account</h4>
                        <div class="form-group">
                            <label for="InputDoctorId"> Doctor ID</label>
                            <input type="text" class="form-control" id="InputDoctorId" name="did" placeholder="Id" />
                        </div>
                        <div class="form-group">
                            <label for="InputDoctorName"> Doctor Name</label>
                            <input type="text" class="form-control" id="InputDoctorName" name="dname" placeholder="Name" />
                        </div>
                        <div class="form-group">
                            <label for="DoctorQualification"> Doctor Qualification</label>
                            <input type="text" class="form-control" id="DoctorQualification" name="dqualification" placeholder="Qualification" />
                        </div>
                        <div class="form-group">
                            <label for="DoctorMobilenumber">Mobile Number</label>
                            <input type="number" class="form-control" id="DoctorMobilenumber" name="mobileno" placeholder="+91" maxlength="10" />
                        </div>
                        <div>
                            <label for="InputEmail1">Email Address</label>
                            <input type="email" class="form-control" id="InputEmail1" name="emailid" aria-describeby="emailHelp" placeholder="Enter email"/>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Add doctor</button> &nbsp;
                    <button type="reset" class="btn btn-primary">Reset</button>
                </form>
            </section>
        </section>
    </section>
</body>

</html>

<br><br>
<?php
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $dbname = "sr project";
    $link = new mysqli($servername,$username,$password,$dbname);
    $con = mysqli_select_db($link,$dbname);
    /*
    if($con){
        echo("connection ok");
    }
    else{
        die("connection failed because".mysqli_connect_error());
    }
    */
?>
<?php
    if(isset($_POST["submit"])){
        mysqli_query($link,"insert into doctors_list values('$_POST[emailid]','$_POST[problem]','$_POST[mobileno]')");
    }
    if(isset($_POST["submit"])){
        $res=mysqli_query($link,"SELECT * FROM `doctors_list`");
        echo"<table border=2px align=center style=width:40%; float:left>";
            echo"<tr>";
                echo"<th> "; echo"did"; echo" </th>"; 
                echo"<th> "; echo"dname"; echo" </th>";
                echo"<th> "; echo"dqualification"; echo" </th>"; 
                echo"<th> "; echo"mobileno"; echo" </th>";
                echo"<th> "; echo"emailid"; echo" </th>";   
            echo"</tr>";
            while($row=mysqli_fetch_array($res)){
                echo"<tr>";
                    echo"<td> "; echo $row["Doctor_ID"]; echo"  </td>";
                    echo"<td> "; echo $row["Name"]; echo" </td>";
                    echo"<td> "; echo $row["Qualification"]; echo" </td>";
                    echo"<td> "; echo $row["Mobile Number"]; echo" </td>";
                    echo"<td> "; echo $row["Email"]; echo" </td>";
            }
        echo"</table>";
    }
?>
