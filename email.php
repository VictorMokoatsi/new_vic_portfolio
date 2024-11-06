<?php
    // include ("db-connect.php");

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $msg = $_POST['msg'];
    $subject = $_POST['subject'];
    // $receiver_email = $_POST['$receiver_email']

    echo "Full Names : $full_name <br>";
    echo "Email address : $email <br>";
    echo "Phone Number : $phone_number <br>";
    echo "Subject: $subject <br>";
    echo "Topic : $msg <br>";

    
    // Function to generate a random OTP
    // function generateOTP($length = 4)
    // {
    //     $characters = '0123456789';
    //     $otp = '';
    //     for ($i = 0; $i < $length; $i++) {
    //         $otp .= $characters[rand(0, strlen($characters) - 1)];
    //     }
    //     return $otp;
    // }
    
    // Generate OTP
    // $otp = generateOTP();
    
    //It display the sender's name and email address into the receiver email.
    // $mail_header = "From: " . $email . "\r\n";
    $receiver = "To : mokoatsivictor@gmail.com";
    
    // $subject = "Your OTP is";

    //Enter your email adderss to receive the messages sent to you from $mail_header
    // $receiver = "lerato@abtworld.co.za";
    $mail_header ="From: " . $email . "\r\n";
    
    // $message = "Do not share this code with anyone. To finish logging into your zarfin account, enter this code: $otp";
    

    mail($receiver, $mail_header, $subject)
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
                        <p class="back">Go back to the <a href="index.php">Contact page</a>.</p>

                        </div>
                    </div>
                    
                </body>
            </html>
         ';
    

?>
