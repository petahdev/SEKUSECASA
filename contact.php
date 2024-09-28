<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Ensure PHPMailer is loaded

// Validate form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['emailContact']));
    $message = htmlspecialchars(trim($_POST['message']));
    
    // Check if all fields are filled
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Send the email
        $admin_email = "mutitupeter76@gmail.com";
        $subject = "New Contact Form Submission";
        
        $mail = new PHPMailer(true);
        
        try {
            // PHPMailer server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = $admin_email; // Your email address
            $mail->Password = 'fbwj edrn alpz alur'; // App-specific password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Recipients
            $mail->setFrom($admin_email, 'SECASA');
            $mail->addAddress($admin_email); // Send email to your own address

            // Content of the email (styled as a card)
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = '
                <div style="max-width: 600px; margin: auto; padding: 20px; background-color: #ffffff; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); font-family: Arial, sans-serif;">
                    <div style="background-color: #22C55E; padding: 20px; border-radius: 10px 10px 0 0; color: white; text-align: center;">
                        <h2 style="margin: 0;">New Contact Form Submission</h2>
                    </div>
                    <div style="padding: 20px; color: #333;">
                        <p style="font-size: 16px; line-height: 1.5;">Hello, you have received a new message from the contact form on your website.</p>
                        <div style="margin-bottom: 15px;">
                            <h4 style="margin-bottom: 5px; color: #22C55E;">Name:</h4>
                            <p style="font-size: 15px; margin: 0; background-color: #f9f9f9; padding: 10px; border-radius: 5px;">' . $name . '</p>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <h4 style="margin-bottom: 5px; color: #22C55E;">Email:</h4>
                            <p style="font-size: 15px; margin: 0; background-color: #f9f9f9; padding: 10px; border-radius: 5px;">' . $email . '</p>
                        </div>
                        <div style="margin-bottom: 15px;">
                            <h4 style="margin-bottom: 5px; color: #22C55E;">Message:</h4>
                            <p style="font-size: 15px; margin: 0; background-color: #f9f9f9; padding: 10px; border-radius: 5px;">' . nl2br($message) . '</p>
                        </div>
                        <p style="font-size: 14px; color: #555;">Best regards,<br>Your SECASA Contact Form</p>
                    </div>
                    <div style="background-color: #f1f1f1; padding: 10px; text-align: center; border-radius: 0 0 10px 10px;">
                        <p style="font-size: 12px; color: #999;">This is an automated message. Please do not reply.</p>
                    </div>
                </div>';

            // Send the email
            $mail->send();

            // Success message
            $_SESSION['message'] = '<div style="color: #22C55E; padding: 10px; border-radius: 5px; background-color: #e7f8ed; font-size: 16px;">Your message has been sent successfully.</div>';

        } catch (Exception $e) {
            $_SESSION['message'] = '<div style="color: #dc3545; padding: 10px; border-radius: 5px; background-color: #f8d7da; font-size: 16px;">There was an error sending your message: ' . $mail->ErrorInfo . '</div>';
        }

    } else {
        // Error message if fields are empty
        $_SESSION['message'] = '<div style="color: #dc3545; padding: 10px; border-radius: 5px; background-color: #f8d7da; font-size: 16px;">Please fill in all the required fields.</div>';
    }
} else {
    // If the form wasn't submitted via POST
    $_SESSION['message'] = '<div style="color: #dc3545; padding: 10px; border-radius: 5px; background-color: #f8d7da; font-size: 16px;">Invalid request. Please use the form to submit your message.</div>';
}

// Redirect back to index.html to display the message
header('Location: index.html');
exit;
