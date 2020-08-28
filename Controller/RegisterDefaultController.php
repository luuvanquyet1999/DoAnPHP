<?php
require SYSTEM_PATH . "/Model/RegisterDefaultModel.php";
class RegisterDefaultController
{
    private $reigsterDefaultModel;
    public function __construct()
    {
        $this->reigsterDefaultModel = new RegisterDefaultModel();
    }
    function View(){
        require SYSTEM_PATH."/View/Website/registerdefault.php";
    }
    function Register(){
        if (isset($_POST["register"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $confirmpassword = $_POST["confirmpassword"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        if ($username == "" || $password == "" || $confirmpassword == "" || $email == "") {
            echo "bạn vui lòng nhập đầy đủ thông tin";
       }else{
               // Kiểm tra tài khoản đã tồn tại chưa
               $result = $this->reigsterDefaultModel->Check(new RegisterDefault($username, $password,$phone, $email));
             if(mysqli_num_rows($result)  > 0){
                echo "<script type='text/javascript'>alert('Tài khoản hoặc Email đã tồn tại');
                window.location='index.php?c=registerdefault&a=View&s=error';
                </script>";
                //  echo "<script type='text/javascript'>alert('Tài khoản hoặc Email đã tồn tại');</script>";
                //  header('Location: index.php?c=registerdefault&a=View&s=error');
             }else{
                 if($password != $confirmpassword){
                    echo "<script type='text/javascript'>alert('Mật khẩu không trùng nhau!!!');
                    window.location='index.php?c=registerdefault&a=View&s=error';
                    </script>";
                 }
                 else{
                     //thực hiện việc lưu trữ dữ liệu vào db
                     $result1 = $this->reigsterDefaultModel->Insert(new RegisterDefault($username, $password,$phone, $email));
                     echo "<script type='text/javascript'>alert('chúc mừng bạn đã đăng ký thành công');
                     window.location='index.php?c=LoginDefault&a=View&s=susscess';
                     </script>";
                    //  echo "chúc mừng bạn đã đăng ký thành công";
                    //  header('Location: index.php?c=LoginDefault&a=View&s=susscess');
                     }
                 }
            }
         }
    }
}