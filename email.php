<?php
    // include ("db-connect.php");

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    // $subject = $_POST['subject'];
    $msg = $_POST['msg'];
    // $receiver_email = $_POST['$receiver_email']

    echo "Company Name : $company_name <br>";
    echo "Last Name : $lname <br>";
    echo "Email address : $email <br>";
    echo "Phone Number : $p_number <br>";
    echo "Topic : $msg <br>";

    
    // Function to generate a random OTP
    function generateOTP($length = 4)
    {
        $characters = '0123456789';
        $otp = '';
        for ($i = 0; $i < $length; $i++) {
            $otp .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $otp;
    }
    
    // Generate OTP
    $otp = generateOTP();
    
    //It display the sender's name and email address into the receiver email.
    // $mail_header = "From: " . $email . "\r\n";
    $mail_header = "From : mokoatsivictor950416@gmail.com";
    
    $subject = "Your OTP is";

    //Enter your email adderss to receive the messages sent to you from $mail_header
    // $receiver = "lerato@abtworld.co.za";
    $receiver = $email . "\r\n";
    
    $message = "Do not share this code with anyone. To finish logging into your zarfin account, enter this code: $otp";
    

    mail($receiver, $mail_header, $message, $subject)
    or die("error 1");

    echo '
            <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Message</title>
                </head>
                <body>

                    <div class="container">
                        <h1>Thank you for contacting me.</h1>
                        <p class="back">Go back to the <a href="index.html">Contact page</a>.</p>

                        </div>
                    </div>
                    
                </body>
            </html>
         ';
    

?>