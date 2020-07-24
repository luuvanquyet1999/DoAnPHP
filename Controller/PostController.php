<?php
require SYSTEM_PATH . "/Model/PostModel.php";
class PostController
{
    private $PostModel;
    public function __construct()
    {
        $this->PostModel = new PostModel();
    }

    function View()
    {
        $data = $this->PostModel->GetAll();
        require SYSTEM_PATH . "/View/Admin/Post/List.php";
    }
    function Add()
    {
        require SYSTEM_PATH . "/View/Admin/Post/Add.php";
    }
    function SaveAdd()
    {
        $post_id = $_POST["post_id"];
        $post_title = $_POST["post_title"];
        $post_summary = $_POST["post_summary"];
        $post_content = $_POST["post_content"];
        $file_name = $_FILES["post_image"]["name"];
        move_uploaded_file($_FILES["post_image"]["tmp_name"], "fileUpload/Post/" . $_FILES["post_image"]["name"]);
        $path = "fileUpload/Post/" . $file_name;
        $post_image = $path;
        // echo $post_id.$post_title.$post_summary. $post_content. $file_name.$path;
        // die();
        //$post_title = $_POST["post_title"];
        $result = $this->PostModel->Insert(new Post($post_id, $post_title, $post_summary, $post_content, $post_image, $post_title, '1', '1'));
        if ($result == true)
            header('location: index.php?c=Post&a=View&r=1');
        else
            header('location: index.php?c=Post&a=View&r=0');
    }
}
