<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include('PHPMailer/src/Exception.php');
include('PHPMailer/src/PHPMailer.php');
include('PHPMailer/src/SMTP.php');


$email_penerima = $_POST['email'];
$keperluan = $_POST['keperluan'];
// $pesan = 'Pesan coba';
$pesan = '<h3>Data di bawah ini adalah data yang bisa dikatakan rahasia bagi sistem saya.
          Demi keamanan sistem akan merekam email pengunjung yang telah mengisi form yang telah di submit. <br>
          Terima kasih atas kunjungannya.</h3><br>

          Sistem Login : https://dnfebri.000webhostapp.com/sistem-login/<br><br>

          admin. <br>
          email : admin@admin.com<br>
          psswd : admin<br><br>

          user.<br>
          email : febrykentung@gmail.com<br>
          passwd : kentungtok<br>

          <hr><br>

          Donasi : https://dnfebri.000webhostapp.com/donasi/<br><br>

          admin.<br>
          url : https://dnfebri.000webhostapp.com/donasi/admin<br>
          username : admin<br>
          password : admin<br>
        ';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

//Server settings
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
$mail->Username   = 'dnfebri.site@gmail.com';                     //SMTP username
$mail->Password   = 'kentungtok';                               //SMTP password
$mail->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->SMTPSecure = 'ssl';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
$mail->SMTPDebug = 2;                      //Enable verbose debug output

//Recipients
$mail->setFrom('dnfebri.site@gmail.com', 'dnfebri.site');
$mail->addAddress($email_penerima);               //Name is optional

//Content
$mail->isHTML(true);                                  //Set email format to HTML
$mail->Subject = $keperluan;
$mail->Body    = $pesan;
// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$send = $mail->send();

// var_dump($_POST);
?>

<?php if ($send) : ?>
  <div style="position: absolute; top: 0; bottom: 0; left: 0; right: 0; background-color: black;"></div>
  <script>
    alert("Email Berhasil dikirim");
    // Swal.fire(
    //   'Email Berhasil dikirim',
    //   '',
    //   'success'
    // )
    document.location = 'index.html';
  </script>
<?php else : ?>
  <div style="position: absolute; top: 0; bottom: 0; left: 0; right: 0; background-color: black;"></div>
  <script>
    alert("Email Gagal dikirim.");
    document.location = 'index.html';
  </script>
<?php endif; ?>