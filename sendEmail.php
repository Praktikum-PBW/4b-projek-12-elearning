<?php
    use PHPMailer\PHPMailer\PHPMailer;

    require_once 'assets/vendor/phpmailer/Exception.php';
    require_once 'assets/vendor/phpmailer/PHPMailer.php';
    require_once 'assets/vendor/phpmailer/SMTP.php';

    $mail = new PHPMailer(true);
    $alert = '';

    if(isset($_POST['kirim'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $pesan = $_POST['pesan'];

        try{
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'YourEmail@gmail.com';
            $mail->Password = 'YourEmailPassword';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = '587';

            $mail->setFrom('YourEmail@gmail.com');
            $mail->addAddress('YourEmail@gmail.com');

            $mail->isHTML(true);
            $mail->Subject = 'Pesan diterima';
            $mail->Body = "<h3>Nama: $nama<br>Email: $email<br>Pesan: $pesan</h3>";

            $mail->send();
            $alert = '<div class="alert-success ps-2 pb-2 pt-2 mb-3 rounded">Pesan terkirim! Terima kasih telah menghubungi kami</div>';

        } catch(Exception $e){
            $alert = '<div class="alert-error">'.$e->getMessage().'</div>';

        }
    }
?>
