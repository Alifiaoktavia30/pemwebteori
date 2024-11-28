<?php
require './../config/db.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = mysqli_query($db_connect, "SELECT * FROM users WHERE email = '$email'");
    if (mysqli_num_rows($user) > 0) {
        $data = mysqli_fetch_assoc($user);

        if (password_verify($password, $data['password'])) {
            echo "<script>alert('Selamat datang " . htmlspecialchars($data['name']) . "');</script>";
            // Redirect atau logika otorisasi lainnya
            die;
        } else {
            $error = "Password salah";
        }
    } else {
        $error = "Email atau password salah";
    }
}
?>

