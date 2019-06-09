<?php
session_start();
$servername = "localhost";
$database = "webenglish";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database) or die('errorss');
mysqli_set_charset($conn, 'UTF8');
        $username = $_POST['tendangnhap'];
        $password = $_POST['matkhau'];
        $sql="select * from users where tendangnhap='$username' and matkhau='$password' limit 1 ";
        $row=mysqli_query($conn,$sql);
        $count=mysqli_num_rows($row);
        if ($count > 0) {
            echo '<script>alert("đăng nhập thành công.");</script>';
            header('location:index.php');
        } else {
        	echo '<script>alert("sai ten hoac mat khau");</script>';
            header('location:index.php');
        }


?>