<?php
include "PHPMailer/src/PHPMailer.php";
include "PHPMailer/src/Exception.php";
include "PHPMailer/src/OAuth.php";
include "PHPMailer/src/POP3.php";
include "PHPMailer/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
// print_r($mail);
// Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'nguyenduong708204@gmail.com';                 // SMTP username
    $mail->Password = 'lvmsbxywxcytxdzm';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('nguyenduong708204@gmail.com', '𝐅𝐚𝐬𝐭 𝐚𝐢𝐫 𝐭𝐢𝐜𝐤𝐞𝐭𝐬');
    $mail->addAddress('nguyenduong807204@gmail.com', 'Vân');     // Add a recipient
    $mail->addAddress('nguyenduong0782004@gmail.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Test Message';
    $mail->Body    = '<h3>Dear: Nguyễn Ngọc Dương </h3>';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

?>
<!--Start Account-->
<section class="account-section bg--gray ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 text-center">
                <div class="section-header">
                    <!-- <span class="sub-title"><span>Sign In</span></span> -->
                    <h2 class="section-title">Quên Mật Khẩu</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6">
                <div class="account-form-area">
                    <form class="account-form" action="index.php?action=forgot" method="post">
                        <div class="row mb-10-none">
                            <div class="col-xl-12 form-group">
                                <label class="icon"><i class="las la-envelope"></i></label>
                                <input type="email" class="form--control" name="email" placeholder="Email" required>
                            </div>
                            <div class="col-lg-12 form-group text-center">
                                <input type="submit" class="btn--base w-100" name="forgot" value="     Gửi mật khẩu" style="color:black">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Account-->