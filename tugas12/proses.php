<?php
session_start();
include 'koneksi.php';
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            if($row['level'] == "admin"){
                $_SESSION['User'] = $row['email'];
                $_SESSION['level'] = $row['level'];
                header('Location: home.php');
            }
            else{
                $_SESSION['User'] = $row['email'];
                $_SESSION['level'] = $row['level'];
                header('Location: home2.php');
            }
        }
    }
    else{
        echo"<script>alert('Username atau password salah');document.location.href='index.php'</script>";
    }
    
}
else{
    echo"<script>alert('Belum isi form');document.location.href='index.php'</script>";
}
?>