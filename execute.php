<?php 
  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'member';
  $koneksi = mysqli_connect($servername,$username,$password,$database);

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
       mysqli_query($koneksi,'INSERT into member (email,password) VALUES ("'.$email.'","'.$password.'")');
  }
?>
