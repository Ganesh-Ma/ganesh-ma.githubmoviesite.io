<?php
    
    if(isset($_POST['submit']))
    {
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $phonenum = $_POST['phonenum'];
        $movie = $_POST{'movie'};
    }

    $host = "localhost";
    $username = "root";
    $password = "nothing";
    $dbname = "registrationdb";

    $con = mysqli_connect($host, $username, $password, $dbname);

    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    $sql = "INSERT INTO movies ( fname, email, phonenum,moviename) VALUES ( '$fname', '$email', '$phonenum', '$moviename')";
    
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Signup Successfull :) ";
        echo " <br><a href='index.html'> Click to Home page</a> ";
    }
   
    mysqli_close($con);

?>