<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class landing_page extends Controller
{
    //landing page
    function sendEmail(Request $request){
        // return $request;
        $name = $request->input("name");
        $email = $request->input("email");
        $phone_number = $request->input("phone_number");
        $message = $request->input("message");
        $message_subject = $request->input("message_subject");

        // send the email
        // email settings
        $sender_name = "Customer Inquiries!";
        $email_host_addr = "mail.privateemail.com";
        $email_username = "mail@ladybirdsmis.com";
        $email_password = "2000Hilary";
        $tester_mail = "ladybirdsmis@gmail.com";
        try {
            $mail = new PHPMailer(true);
    
            $mail->isSMTP();
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            // $mail->Host = 'smtp.gmail.com';
            $mail->Host = $email_host_addr;
            $mail->SMTPAuth = true;
            // $mail->Username = "hilaryme45@gmail.com";
            // $mail->Password = "cmksnyxqmcgtncxw";
            $mail->Username = $email_username;
            $mail->Password = $email_password;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
            $mail->Port = 587;
            
            
            $mail->setFrom($email_username,$sender_name);
            $mail->addAddress($tester_mail);
            $mail->isHTML(true);
            $mail->Subject = $message_subject;
            $mail->Body = "<b>Name: </b>".$name."<br><b>Phone number : </b>".$phone_number."<br><b>Email: </b>".$email."<br>".$message;
    
            $mail->send();
            $_SESSION['success'] = "<p class='text-success'>We have recieved your request we will review it and get back to you in a ASAP!</p>";
            return "Email sent successfully!";
            
        } catch (Exception $th) {
            // echo "<p class='text-danger p-1 border border-danger'>Error : ". $mail->ErrorInfo."</p>";
            $_SESSION['error'] = "<p class='text-success'>Error : ". $mail->ErrorInfo."!</p>";
        }
    }
}
