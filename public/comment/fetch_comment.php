<?php
session_start();
$connect = new PDO('mysql:host=112.78.2.94;dbname=superfr_tranducbo', 'super_tranducbo', 'abc123#!');
array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'") ;
$post_id='';
$post_parent_id='';
$output = '';
if (isset($_SESSION["baiviet"])) {
    $linkpost = $_SESSION["baiviet"];
}else{
    $output ='<p>Bạn cảm thấy bài viết này thế nào ??? </p>
            <a href="#comment_form" class="btn mag-btn mt-30" >Bình luận</a>'
    ;
}
$query = "
SELECT * FROM lph_comment 
WHERE  PostLink ='$linkpost' AND parent_comment_id = '0' 
ORDER BY comment_id  DESC
";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$output = '';
if (empty($result)){
    $output='<p>Bạn cảm thấy bài viết này thế nào ??? </p>
            <a href="#comment_form" class="btn mag-btn mt-30" >Bình luận</a>';
}
foreach($result as $row)
{
    $output .= '
    <ol class="children">
                                    <li class="single_comment_area">
                                        <!-- Comment Content -->
                                        <div class="comment-content d-flex">
                                            <!-- Comment Author -->
                                            <div class="comment-author">
                                                <img src="http://localhost/doanphp/public/img/bg-img/54.jpg" alt="author">
                                            </div>
                                            <!-- Comment Meta -->
                                            <div class="comment-meta">
                                                <a href="#" class="comment-date">'.SetDate($row["date"]).'</a>
                                                <h6>'.$row["comment_sender_name"].'</h6>
                                                <p>'.$row["comment"].'</p>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" class="like">like</a>
                                                    <a href="#comment_form" class="reply" id='.$row["comment_id"].' >Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
    </ol>
 ';
    $output .= get_reply_comment($connect, $row["comment_id"]);
}
echo $output;
function get_reply_comment($connect, $parent_id = 0, $marginleft = 0)
{
    $query = "
 SELECT * FROM lph_comment WHERE parent_comment_id = '".$parent_id."'
 ";
    $output = '';
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $count = $statement->rowCount();
    if($parent_id == 0)
    {
        $marginleft = 0;
    }
    else
    {
        $marginleft = $marginleft + 80;
    }
    if($count > 0)
    {
        foreach($result as $row)
        {
            $output .= '          
            <ol class="children" style="margin-left:'.$marginleft.'px">
                                    <li class="single_comment_area">
                                        <!-- Comment Content -->
                                        <div class="comment-content d-flex">
                                            <!-- Comment Author -->
                                            <div class="comment-author">
                                                <img src="http://localhost/doanphp/public/img/bg-img/54.jpg" alt="author">
                                            </div>
                                            <!-- Comment Meta -->
                                            <div class="comment-meta">
                                                <a href="#" class="comment-date">'.SetDate($row["date"]).'</a>
                                                <h6>'.$row["comment_sender_name"].'</h6>
                                                <p>'.$row["comment"].'</p>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" class="like">like</a>
                                                    <a href="#comment_form" class="reply" id='.$row["comment_id"].' >Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
               </ol>
 ';}}
    return $output;
}

function SetDate($datetimeFromMysql){
    $time = strtotime($datetimeFromMysql);
    $myFormatForView = date("m-d-y H:i", $time);

    return $myFormatForView;
}
?>
