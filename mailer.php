<?php 

    if(isset($_POST['submit']))
    {
       $Fname = $_POST['Fname'];
       $Lname = $_POST['Lname'];
       $number=$_POST['number'];
       $Email = $_POST['email'];
       $message = $_POST['message'];

       $msg = "First Name: ". $Fname .
               "<br> Last Name: " . $Lname . 
               "<br> Number: " . $number . 
               "<br> Email : " . $Email .
               "<br> Message : " . $message;

        
        $subject = "Sent from contact form";

       if(empty($Fname) ||empty($Lname)|| empty($number) || empty($Email) || empty($message))
       {
        header("location:index.html?error");
       }
       else
       {
           $subject="This is from Gym page..";
           $to = "amanchaudhary199910@gmail.com";
        //    $to = "@gmail.com";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8";

           if(mail($to,$Subject,$msg,$headers))
           {
               header("location:index.html?success");
           }
       }
    }
    else
    {
        header("location:index.html");
    }
?>