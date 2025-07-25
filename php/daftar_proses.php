<?php
include("koneksi.php");
require '../vendor/autoload.php'; // Make sure this path is correct

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST)) {

    $nama_lengkap = $_POST["nama_lengkap"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $no_hp = $_POST["no_hp"];
    $pekerjaan = $_POST["pekerjaan"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $roles = $_POST["roles"];
    $foto_ktp = $_FILES["foto_ktp"]['name'];
    $foto_profil = $_FILES["foto_profil"]['name'];
    $sumber1 = $_FILES["foto_ktp"]['tmp_name'];
    $sumber2 = $_FILES["foto_profil"]['tmp_name'];

    move_uploaded_file($sumber1, '../img/ktp/' . $foto_ktp);
    move_uploaded_file($sumber2, '../img/profil/' . $foto_profil);

    // Check if email already exists
    $email_check_query = "SELECT * FROM user WHERE email='$email' LIMIT 1";
    $result = mysqli_query($koneksi, $email_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if email exists
        echo "<script>
            alert('Registration Failed. Email already exists. Please use a different email.');
            window.location.href = '../daftar.php';
        </script>";
    } else {
        $query = "INSERT INTO user VALUES ('','$nama_lengkap','$email','$username','$password','$no_hp','$pekerjaan','$jenis_kelamin','$foto_ktp','$foto_profil','$roles','')";
        $masuk = mysqli_query($koneksi, $query);

        if ($masuk) {
            $mail = new PHPMailer(true);
            try {
                //Server settings
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'delphinekabosu@gmail.com'; // Replace with your Gmail address
                $mail->Password = 'uuwl zwsu ugfb tqpr'; // Replace with your Gmail password or app-specific password
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                //Recipients
                $mail->setFrom('no-reply@yourdomain.com', 'SI KOSKOSAN');
                $mail->addAddress($email, $nama_lengkap);

                //Content
                $mail->isHTML(true);
                $mail->Subject = 'Registration Successful';
                $mail->Body    = "Hello $nama_lengkap,<br><br>Your registration was successful. Here are your login details:<br>Username: $username<br>Password: $password<br><br><a href='http://yourdomain.com/login.php'>Click here to login</a><br><br>Thank you!";
                $mail->AltBody = "Hello $nama_lengkap,\n\nYour registration was successful. Here are your login details:\nUsername: $username\nPassword: $password\n\nVisit the following link to login: http://yourdomain.com/login.php\n\nThank you!";

                $mail->send();
                echo "<script>
                    alert('Registration successful. An email has been sent to $email with your login details.');
                    window.location.href = '../login.php';
                </script>";
            } catch (Exception $e) {
                echo "<script>
                    alert('Registration successful, but failed to send email. Mailer Error: {$mail->ErrorInfo}');
                    window.location.href = '../index.php';
                </script>";
            }
        } else {
            echo "<script>
                alert('Registration failed.');
                window.location.href = '../index.php';
            </script>";
        }
    }
}
?>