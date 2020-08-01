<?php
require SYSTEM_PATH . "/Model/AdminPostModel.php";
class AdminPostController
{
    private $PostModel;
    public function __construct()
    {
        $this->PostModel = new AdminPostModel();
    }

    function View()
    {
        $data = $this->PostModel->GetAll();
        require SYSTEM_PATH . "/View/Admin/Post/List.php";
    }
    function Add()
    {
        //$data = $this->PostModel->GetAllCategory();
        require SYSTEM_PATH . "/View/Admin/Post/Add.php";
    }
    function SaveAdd()
    {
        session_start();
        $username = $_SESSION['username'];
        $post_id = $_POST["post_id"];
        $post_title = $_POST["post_title"];
        $post_summary = $_POST["post_summary"];
        $post_content = $_POST["post_content"];
        $file_name = $_FILES["post_image"]["name"];
        move_uploaded_file($_FILES["post_image"]["tmp_name"], "fileUpload/Post/" . $_FILES["post_image"]["name"]);
        $path = "fileUpload/Post/" . $file_name;
        $post_image = $path;
        $category_name = $_POST["category"];
        $post_createdate =  $_POST["createday"];
        // echo $post_createdate.$category_id;
        // die();
        //$a = strtolower($post_title);
        $post_link = $post_title;
        // echo $username.$post_title.$post_summary. $post_content. $post_image.$category_name.$post_createdate;
        // die();
        $result = $this->PostModel->Insert(new Post($post_id, $post_title, $post_summary, $post_content, $post_image, $post_createdate, $category_name, $username, $post_link));
        if ($result == true)
            header('location: index.php?c=AdminPost&a=View&r=1');
        else
            header('location: index.php?c=AdminPost&a=View&r=0');
    }
    function Update()
    {
        $post_id = $_GET["PostID"];
        $post = $this->PostModel->GetRecordById($post_id);
        require SYSTEM_PATH . "/View/Admin/Post/Update.php";
    }
    function SaveUpdate()
    {
        session_start();
        $username = $_SESSION['username'];
        $post_id = $_POST["post_id"];
        $post_title = $_POST["post_title"];
        $post_summary = $_POST["post_summary"];
        $post_content = $_POST["post_content"];
        $file_name = $_FILES["post_image"]["name"];
        // if (empty($file_name)) {
        //     $file_name = "img.jpg";
        // }
        // $target_file = "fileUpload/Post/" . basename($_FILES["post_image"]["name"]);
        // $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        // if (
        //     $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        //     && $imageFileType != "gif"
        // ) {
        //     echo "<script type='text/javascript'>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
        //     </script>";
        //     header('location: index.php?c=AdminPost&a=View');
        // } else {
        move_uploaded_file($_FILES["post_image"]["tmp_name"], "fileUpload/Post/" . $_FILES["post_image"]["name"]);
        $path = "fileUpload/Post/" . $file_name;
        $post_image = $path;
        $category_name = $_POST["category"];
        $post_createdate =  $_POST["createday"];
        $post_link = $_POST["post_title"];

        $result = $this->PostModel->Update(new Post($post_id, $post_title, $post_summary, $post_content, $post_image, $post_createdate, $category_name, $username, $post_link));
        
        if ($result == true)
            header('location: index.php?c=AdminPost&a=View&r=1');
        else
            header('location: index.php?c=AdminPost&a=View&r=0');
        //}
    }
    function Delete()
    {
        $post_id = $_GET["PostID"];

        $result = $this->PostModel->Delete($post_id);
        if ($result == true)
            header('location: index.php?c=AdminPost&a=View&r=1');
        else
            header('location: index.php?c=AdminPost&a=View&r=0');
    }
}
