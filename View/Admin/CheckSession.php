<?php
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
?>
<?php
  if(!isset($_SESSION["username"])){
      echo "<script type='text/javascript'>alert('Vui lòng bạn đăng nhập tài khoản Admin');</script>";
      header('Location: index.php?c=Login&a=View');
    }
?>