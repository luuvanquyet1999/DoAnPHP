<?php
require SYSTEM_PATH . "/Model/AdminPostModel.php";
//require SYSTEM_PATH."Model/setlink.php";
class AdminPostController
{
    private $PostModel;
    //private $setlink;
    public function __construct()
    {
        $this->PostModel = new AdminPostModel();
        //$this->setlink = new setlink();
    }

    function View()
    {
        if (isset($_SESSION['userAdmin'])) {
            $user = $_SESSION['userAdmin'];
            $data = $this->PostModel->GetAll();
            require SYSTEM_PATH . "/View/Admin/Post/List.php";
        } else {
            require_once SYSTEM_PATH . "/View/Admin/Login.php";
        }
    }
    function Add()
    {
        //session_start();
        if (isset($_SESSION['userAdmin'])) {
            $user = $_SESSION['userAdmin'];
            $result = $this->PostModel->GetCategory();
            require SYSTEM_PATH . "/View/Admin/Post/Add.php";
        } else {
            require_once SYSTEM_PATH . "/View/Admin/Login.php";
        }
    }
    function SaveAdd()
    {
        $maxID = $this->PostModel->GetMaxID();
        $numArray = implode("",$maxID[0])+1;
        //echo implode("",$maxID[0]) ;
        // echo $numArray;
        // die();
        $username = $_SESSION['userAdmin'];
        // $username = "quyết";
        $post_id = $_POST["post_id"];
        $post_title = $_POST["post_title"];
        $post_summary = $_POST["post_summary"];
        $post_content = $_POST["content"];
        $file_name = $_FILES["post_image"]["name"];
        move_uploaded_file($_FILES["post_image"]["tmp_name"], "fileUpload/Post/" . $_FILES["post_image"]["name"]);
        $path = "fileUpload/Post/" . $file_name;
        $post_image = $path;
        $category_name = $_POST["category"];
        $post_createdate =  $_POST["createday"];
        $post_link = $this->PostModel->makeLink($post_title) . "-" . $numArray;
        // echo $post_link;
        // die();
        // echo $post_id . "</br>" . $post_title . "</br>" . $post_summary . "</br>" . $post_content . "</br>" . $post_image . "</br>" . $category_name . "</br>" . $post_createdate . "</br>" . $username;
        // die();
        $result = $this->PostModel->Insert(new Post($post_id, $post_title, $post_summary, $post_content, $post_image, $post_createdate, $category_name, $username, $post_link, 0));
        if ($result == true)

            header('location: index.php?c=AdminPost&a=View&r=1');
        else
            header('location: index.php?c=AdminPost&a=View&r=0');
    }
    function Update()
    {
        //session_start();
        if (isset($_SESSION['userAdmin'])) {
            $user = $_SESSION['userAdmin'];
            $post_id = $_GET["PostID"];
            $post = $this->PostModel->GetRecordById($post_id);
            $result = $this->PostModel->GetCategory();
            require SYSTEM_PATH . "/View/Admin/Post/Update.php";
        } else {
            require_once SYSTEM_PATH . "/View/Admin/Login.php";
        }
    }
    function SaveUpdate()
    {
        //session_start();
        $username = $_SESSION['userAdmin'];
        //$username = "quyết";
        $post_id = $_POST["post_id"];
        $post_title = $_POST["post_title"];
        $post_summary = $_POST["post_summary"];
        $post_content = $_POST["content"];
        $file_name = $_FILES["post_image"]["name"];
        move_uploaded_file($_FILES["post_image"]["tmp_name"], "fileUpload/Post/" . $_FILES["post_image"]["name"]);
        $path = "fileUpload/Post/" . $file_name;
        $post_image = $path;
        $category_name = $_POST["category"];
        $post_createdate =  $_POST["createday"];
        $post_link = $this->PostModel->makeLink($post_title) . "-" . $post_id;
        // echo $post_id."</br>".$post_title."</br>".$post_summary."</br>".$post_content."</br>".$post_image."</br>".$category_name."</br>".$post_createdate."</br>".$username;
        // die();

        $result = $this->PostModel->Update(new Post($post_id, $post_title, $post_summary, $post_content, $post_image, $post_createdate, $category_name, $username, $post_link, 0));
        if ($result == true)
            header('location: index.php?c=AdminPost&a=View&r=1');
        else
            header('location: index.php?c=AdminPost&a=View&r=0');
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
    //Func cập nhật tình trạng
    //---thêm vào bài phổ biến
    function UpdateHot()
    {
        if (!empty($_POST['duyet'])) {
            if (!empty($_POST['array'])) {
                foreach ($_POST['array'] as $value) {
                    $result = $this->PostModel->UpdateHot($value);
                    if ($result == true) {
                        header('location:index.php?c=AdminPost&a=View&r=1');
                    } else {
                        header('location:index.php?c=AdminPost&a=View&r=0');
                    }
                }
            } else {
                header('location:index.php?c=AdminPost&a=View&r=2');
            }
        } else {
            $this->UpdateHot2();
        }
    }
    //---xóa khỏi bài phổ biến
    function UpdateHot2()
    {
        if (!empty($_POST['array'])) {
            foreach ($_POST['array'] as $value) {
                $result = $this->PostModel->XoaHot($value);
                if ($result == true) {
                    header('location:index.php?c=AdminPost&a=View&r=1');
                } else {
                    header('location:index.php?c=AdminPost&a=View&r=0');
                }
            }
        } else {
            header('location:index.php?c=AdminPost&a=View&r=2');
        }
    }
}
