
<?php
session_start();
$linkpost='';
include_once 'DB.php';
$error = '';
$comment_name = '';
$comment_content = '';

if(empty($_POST["comment_idpost"]))
{ $error ='<p class="text-danger">'.$_POST["comment_idpost"].'</p>'; }

if (isset($_SESSION["username"])){
    $comment_name = $_SESSION["fullname"];
}else{
    if(empty($_POST["comment_name"]))
    {
        $error .= '<p class="text-danger">Vui lòng đăng nhập để bình luận</p>';
    }
    else
    {
        $comment_name = $_POST["comment_name"];
    }
}

if(empty($_POST["comment_content"]))
{
    $error .= '<p class="text-danger">Hãy nhập cái gì đó</p>';
}
else
{
    $comment_content = $_POST["comment_content"];
    $comment_idpost = $_POST["comment_idpost"];
}

if($error == '')
{
    $query = "
 INSERT INTO lph_comment
 (parent_comment_id, comment, comment_sender_name,IdPost,Active)
 VALUES (:parent_comment_id, :comment, :comment_sender_name,:comment_idpost,1)
 ";
    $statement = $connect->prepare($query);
    $statement->execute(
        array(
            ':parent_comment_id' => $_POST["comment_id"],
            ':comment'    => $comment_content,
            ':comment_sender_name' => $comment_name,
            ':comment_idpost'=>$comment_idpost
        )
    );

    $error = '<label class="text-success">Đăng thành công</label>';
    $_SESSION["idbaiviet"]=$comment_idpost;
}

$data = array(
    'error'  => $error
);
echo json_encode($data);
?>