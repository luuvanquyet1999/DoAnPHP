<?php
session_start();
include_once 'DB.php';
$post_id = '';
$post_parent_id = '';
$output = '';
if (isset($_SESSION["idbaiviet"])) {
    $linkpost = $_SESSION["idbaiviet"];
} else {
    $output = '<p>Bạn cảm thấy bài viết này thế nào ??? </p>
            <a href="#comment_form" class="btn mag-btn mt-30" >Bình luận</a>';
}
$query = "
SELECT * FROM lph_comment 
WHERE  IdPost ='$linkpost' AND Active =1 AND parent_comment_id = '0' 
ORDER BY comment_id  DESC
";
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$output = '';
if (empty($result)) {
    $output = '';
}
foreach ($result as $row) {
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
                                                <a href="#" class="comment-date">' . SetDate($row["date"]) . '</a>
                                                <h6>' . $row["comment_sender_name"] . '</h6>
                                                <p>' . $row["comment"] . '</p>
                                                <div class="d-flex align-items-center">
                                                    <a href="#comment_form" class="reply" id=' . $row["comment_id"] . ' >Reply</a>
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
 SELECT * FROM lph_comment WHERE parent_comment_id = '" . $parent_id . " ' AND Active =1
 ";
    $output = '';
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $count = $statement->rowCount();
    if ($parent_id == 0) {
        $marginleft = 0;
    } else {
        $marginleft = $marginleft + 80;
    }
    if ($count > 0) {
        foreach ($result as $row) {
            $output .= '          
            <ol class="children" style="margin-left:' . $marginleft . 'px">
                                    <li class="single_comment_area">
                                        <!-- Comment Content -->
                                        <div class="comment-content d-flex">
                                            <!-- Comment Author -->
                                            <div class="comment-author">
                                                <img src="http://localhost/doanphp/public/img/bg-img/54.jpg" alt="author">
                                            </div>
                                            <!-- Comment Meta -->
                                            <div class="comment-meta">
                                                <a href="#" class="comment-date">' . SetDate($row["date"]) . '</a>
                                                <h6>' . $row["comment_sender_name"] . '</h6>
                                                <p>' . $row["comment"] . '</p>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" class="like">like</a>
                                                    <a href="#comment_form" class="reply" id=' . $row["comment_id"] . ' >Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
               </ol>
 ';
        }
    }
    return $output;
}

function SetDate($datetimeFromMysql)
{
    $time = strtotime($datetimeFromMysql);
    $myFormatForView = date("m-d-y H:i", $time);

    return $myFormatForView;
}

?>
