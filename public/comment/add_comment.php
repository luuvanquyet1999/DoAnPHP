
<?php
session_start();
$linkpost='';
    $connect = new PDO('mysql:host=112.78.2.94;dbname=superfr_tranducbo', 'super_tranducbo', 'abc123#!');
array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'") ;
//$comment_post='';
$error = '';
$comment_name = '';
$comment_content = '';

if(empty($_POST["comment_post"]))
{ $error ='<p class="text-danger">'.$_POST["comment_post"].'</p>'; }
if(empty($_POST["comment_name"]))
{
    $error .= '<p class="text-danger">Vui lòng nhập tên</p>';
}
else
{
    $comment_name = $_POST["comment_name"];
}

if(empty($_POST["comment_content"]))
{
    $error .= '<p class="text-danger">Hãy nhập cái gì đó</p>';
}
else
{
    $comment_content = $_POST["comment_content"];
    $comment_post = $_POST["comment_post"];
}

if($error == '')
{
    $query = "
 INSERT INTO lph_comment
 (parent_comment_id, comment, comment_sender_name,PostLink)
 VALUES (:parent_comment_id, :comment, :comment_sender_name,:linkpost)
 ";
    $statement = $connect->prepare($query);
    $statement->execute(
        array(
            ':parent_comment_id' => $_POST["comment_id"],
            ':comment'    => $comment_content,
            ':comment_sender_name' => $comment_name,
            ':linkpost'=>$comment_post
        )
    );

    $error = '<label class="text-success">Đăng thành công</label>';
    $_SESSION["baiviet"]=$comment_post;
}

$data = array(
    'error'  => $error
);
echo json_encode($data);
?>