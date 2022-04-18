<?php
    $Fname=$_POST['Fname'];
    $Lname=$_POST['Lname'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $phone=$_POST['phone'];
    $gender=$_POST['Gender'];
    $package=$_POST['Package'];
    $gymaddress=$_POST['Address'];
    $shift=$_POST['shift'];

    $servername='localhost';
    $username='root';
    $password='';
    

    $conn =new mysqli('localhost','root','','gym');

    if($conn->connect_error){
        die("Connection failed: " .$conn->connect_error);
    }

    else{
        $insert = "INSERT INTO booking( Fname, Lname, address, email, phone, age, gender, gymaddress, shift, package) VALUES ('$Fname','$Lname','$address','$email','$phone','$age','$gender','$gymaddress','$shift','$package')";

        $query= $conn->query($insert);
              
        if($query)
        {
            echo'thank you for booking';
        }
        else{
            echo'error';
        }
    }
   
?>