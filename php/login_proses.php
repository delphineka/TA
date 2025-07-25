<?php
include("koneksi.php");

$username = mysqli_escape_string($koneksi, $_POST['username']);
$password = mysqli_escape_string($koneksi, $_POST['password']);

$login = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' and password='$password'");
$ok = mysqli_fetch_array($login);
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    $_SESSION["email"] = $ok['email'];
    echo "<script>
        alert('Login Successful. Welcome $username!');
        window.location.href = '../kost/index.php';
    </script>";
} else {
    echo "<script>
        alert('Login Failed. Invalid username or password.');
        window.location.href = '../login.php';
    </script>";
}
?>
