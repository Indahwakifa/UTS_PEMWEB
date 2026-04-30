<?php
$conn = mysqli_connect("localhost", "root", "", "db_test");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$username = $_POST['username'];

$query = "SELECT * FROM users WHERE username='$username'";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
    echo "<h2>Login Berhasil</h2>";
} else {
    echo "<h2>Login Gagal</h2>";
}
?>