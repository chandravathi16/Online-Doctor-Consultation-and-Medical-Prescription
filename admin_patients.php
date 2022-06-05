<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patients List</title>
</head>
<body>
    <table align="center" border="2px" style="width:40%; float:left">
        <tr>
            <th>Date</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        <?php
            include("view_patients.php");
            error_reporting(0);
            $query="select * from patients_list";
            $data=mysqli_query($conn,$query);
            $total=mysqli_num_rows($data);
            $result=mysqli_fetch_assoc($data);
            if($total!=0){
                while($result=mysqli_fetch_assoc($data)){
                    echo "
                    <tr>
                        <td>".$result['Date']."</td>
                        <td>".$result['Email']."</td>
                        <td>".$result['Password']."</td>
                    </tr>
                    ";
                }
            }
            else{
                echo"
                    <tr>
                        <th colspan='6'>No records found</th>
                    </tr>
                ";
            }
        ?>
    </table>
</body>
</html>