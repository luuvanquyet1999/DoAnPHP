<?php
require SYSTEM_PATH . "/Model/AdminPostModel.php";
class AdminSlideController
{
    private $SlideModel;

    public function __construct()
    {
        $this->SlideModel = new AdminPostModel();
    }
    function ViewXuHuong()
    {
        if (isset($_SESSION['userAdmin'])) {
            $user = $_SESSION['userAdmin'];
            $data = $this->SlideModel->GetXuHuong();
            require SYSTEM_PATH . "/View/Admin/Slide/List.php";
        } else {
            require_once SYSTEM_PATH . "/View/Admin/Login.php";
        }
    }
    function ViewHot()
    {
        if (isset($_SESSION['userAdmin'])) {
            $user = $_SESSION['userAdmin'];
            $data = $this->SlideModel->GetPhoBien();
            require SYSTEM_PATH . "/View/Admin/Slide/Add.php";
        } else {
            require_once SYSTEM_PATH . "/View/Admin/Login.php";
        }
    }
    // Update Xu hướng
    function UpdateXuHuong(){
        if (!empty($_POST['duyet']))
        {
            if(!empty($_POST['array'])) {
                foreach($_POST['array'] as $value){
                    $result = $this->SlideModel->UpdateXuHuong($value);
                    if ($result == true)
                    {
                        header('location:index.php?c=AdminSlide&a=ViewXuHuong&r=1');
                    }else{
                        header('location:index.php?c=AdminSlide&a=ViewXuHuong&r=0');
                    }
                }
            }
            else{
                header('location:index.php?c=AdminSlide&a=ViewXuHuong&r=2');
            }
        }else{
            $this->UpdateXuHuong2();
        }
    }
    //---xóa khỏi bài phổ biến
    function UpdateXuHuong2()
    {
        if(!empty($_POST['array'])) {
            foreach($_POST['array'] as $value){
                $result = $this->SlideModel->XoaXuHuong($value);
                if ($result == true)
                {
                    header('location:index.php?c=AdminSlide&a=ViewXuHuong&r=1');
                }else{
                    header('location:index.php?c=AdminSlide&a=ViewXuHuong&r=0');
                }
            }
        }else{
            header('location:index.php?c=AdminSlide&a=ViewXuHuong&r=2');
        }
    }
    // Update Xu hướng
    function UpdateHot(){
        if (!empty($_POST['duyet']))
        {
            if(!empty($_POST['array'])) {
                foreach($_POST['array'] as $value){
                    $result = $this->SlideModel->UpdateHot($value);
                    if ($result == true)
                    {
                        header('location:index.php?c=AdminSlide&a=ViewHot&r=1');
                    }else{
                        header('location:index.php?c=AdminSlide&a=ViewHot&r=0');
                    }
                }
            }
            else{
                header('location:index.php?c=AdminSlide&a=ViewHot&r=2');
            }
        }else{
            $this->UpdateHot2();
        }
    }
    //---xóa khỏi bài phổ biến
    function UpdateHot2()
    {
        if(!empty($_POST['array'])) {
            foreach($_POST['array'] as $value){
                $result = $this->SlideModel->XoaHot($value);
                if ($result == true)
                {
                    header('location:index.php?c=AdminSlide&a=ViewHot&r=1');
                }else{
                    header('location:index.php?c=AdminSlide&a=ViewHot&r=0');
                }
            }
        }else{
            header('location:index.php?c=AdminSlide&a=ViewHot&r=2');
        }
    }
}
