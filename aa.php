<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta http-equiv="Refresh" content="10;Home.html">
</head>
<body>
    <?php
    $name=filter_input(INPUT_POST,'name');
    $username=filter_input(INPUT_POST,'username');
    $email=filter_input(INPUT_POST,'email');
    $course=filter_input(INPUT_POST,'course');
    $phone=filter_input(INPUT_POST,'phone');
    $dob=filter_input(INPUT_POST,'dob');
    $password=filter_input(INPUT_POST,'password');
    $confpassword=filter_input(INPUT_POST,'confpassword');
    $gender=filter_input(INPUT_POST,'gender');
    
            $host="localhost";
            $dbusername="root";
            $dbpassword="";
            $dbname="register";
        
            $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
                if(mysqli_connect_error())
                {
                    die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
                }
            else{
                $sql="INSERT INTO people(name, username, email, course, phone, dob, password, confpassword, gender) 
                values('$name','$username','$email','$course','$phone','$dob','$password','$confpassword','$gender')";
                if($conn->query($sql)){
                    echo "Your record is inserted succesfully <br> Please Wait";
                }
                else{
                    echo "error :".$sql."<br>".$conn->error;
                }
                $conn->close();
            }
    ?>
    <p>Wait, while we are Redirecting<a href="Home.html"></a></p>
</body>
</html>