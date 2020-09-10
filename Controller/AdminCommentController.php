<?php
require SYSTEM_PATH ."/Model/AdminCommentModel.php";
class AdminCommentController
{
    private $CommentModel;
    //private $setlink;
    public function __construct()
    {
        $this->CommentModel = new AdminCommentModel();
    }

    function View()
    {
        if (isset($_SESSION['userAdmin'])) {
            $user = $_SESSION['userAdmin'];
            $data = $this->CommentModel->GetAllComment();
            require SYSTEM_PATH . "/View/Admin/CommentPost/List.php";
        } else {
            require_once SYSTEM_PATH . "/View/Admin/Login.php";
        }
    }
    function Detail(){
        if (isset($_SESSION['userAdmin'])) {
            $user = $_SESSION['userAdmin'];
            $post_id = $_GET["ID"];
            $result = $this->CommentModel->GetDetail($post_id);
            // $result = $this->PostModel->GetCategory();
            require SYSTEM_PATH . "/View/Admin/CommentPost/Detail.php";
        } else {
            require_once SYSTEM_PATH . "/View/Admin/Login.php";
        }
    }

    function Delete()
    {
        $cmt_id = $_GET["ID"];
        $result = $this->CommentModel->Delete($cmt_id);
    }
}

