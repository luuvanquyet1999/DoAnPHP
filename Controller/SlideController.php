<?php
require SYSTEM_PATH . "/Model/SlideModel.php";
class SlideController
{
    private $SlideModel;

    public function __construct()
    {
        $this->SlideModel = new SlideModel();
    }
    function View()
    {
        $data = $this->SlideModel->GetAll();
        require SYSTEM_PATH . "/View/Admin/Slide/List.php";
    }
    function Add()
    {
        require SYSTEM_PATH . "/View/Admin/Slide/Add.php";
    }
    function SaveAdd()
    {
        if ($_FILES['slide_image']['error']>0){
            echo 'Vui lòng chọn file';
        }else {
            $file_name = $_FILES['slide_image']['name'];
            $size = $_FILES['slide_image']['size'];
            $slide_id = $_POST["slide_id"];
            $Active = $_POST["Active"];
            //lấy đường dẫn tạm lưu nội dung file:
            $file_tmp =$_FILES['slide_image']['tmp_name'];
            //tạo đường dẫn lưu file trên host:
            $path ="fileUpload/Slide/".$file_name;
            $slide_image = $path;
            //upload nội dung file từ đường dẫn tạm vào đường dẫn vừa tạo:
            move_uploaded_file($file_tmp,$path);
            $result = $this->SlideModel->Insert(new Slide($slide_id, $slide_image, $Active));
        }
        if ($result == true)
            header('location: index.php?c=Slide&a=View&r=1');
        else
            header('location: index.php?c=Slide&a=View&r=0');

        require SYSTEM_PATH . "/View/Admin/Slide/Add.php";
    }
    function Delete()
    {
        $slide_id = $_GET["slide_id"];

        $result = $this->SlideModel->Delete($slide_id);
        if ($result == true)
            header('location: index.php?c=Slide&a=View&r=1');
        else
            header('location: index.php?c=Slide&a=View&r=0');
    }
    function Update()
    {
        $slide_id = $_GET['slide_id'];
        $slide = $this->SlideModel->GetById($slide_id);
        require SYSTEM_PATH . "/View/Admin/Slide/Update.php";
    }
    function SaveUpdate()
    {
        if ($_FILES['slide_image']['error']>0){
            echo 'Vui lòng chọn file';
        }else {
            $file_name = $_FILES['slide_image']['name'];
            $size = $_FILES['slide_image']['size'];
            $slide_id = $_POST["slide_id"];
            $Active = $_POST["Active"];
            //lấy đường dẫn tạm lưu nội dung file:
            $file_tmp =$_FILES['slide_image']['tmp_name'];
            //tạo đường dẫn lưu file trên host:
            $path ="fileUpload/Slide/".$file_name;
            $slide_image = $path;
            //upload nội dung file từ đường dẫn tạm vào đường dẫn vừa tạo:
            move_uploaded_file($file_tmp,$path);
            $result = $this->SlideModel->Update(new Slide($slide_id, $slide_image, $Active));
        }
        if ($result == true)
            header('location: index.php?c=Slide&a=View&r=1');
        else
            header('location: index.php?c=Slide&a=View&r=0');
    }
}

