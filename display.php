
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
        mysqli_query($link,"insert into service values('$_POST[emailid]','$_POST[problem]','$_POST[mobileno]')");
    }
    if(isset($_POST["submit"])){
        $res=mysqli_query($link,"select * from service");
        echo"<table border=2px align=center style=width:40%; float:left>";
            echo"<tr>";
                echo"<th> "; echo"Email Id"; echo" </th>"; 
                echo"<th> "; echo"Problem"; echo" </th>";
                echo"<th> "; echo"Mobile Number"; echo" </th>";
            echo"</tr>";
            while($row=mysqli_fetch_array($res)){
                echo"<tr>";
                    echo"<td> "; echo $row["Email Id"]; echo"  </td>";
                    echo"<td> "; echo $row["Problem"]; echo" </td>";
                    echo"<td> "; echo $row["Mobile Number"]; echo" </td>";
            }
        echo"</table>";
    }
?>