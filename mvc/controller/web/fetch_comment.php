<?php


$connect =  mysqli_connect('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
$query = "
 SELECT * FROM lph_comment
 WHERE parent_comment_id = '0'
 ORDER BY comment_id DESC
 ";
if ($statement = $connect->prepare($query)) {
    echo "oke";
}else{
    echo "not";
    die();
}


$statement->execute();

$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{
    $output .= '

 <ol>
 <!-- Single Comment Area -->
 <li class="single_comment_area">
     <!-- Comment Content -->
     <div class="comment-content d-flex">
         <div class="comment-meta">
             <a href="#" class="comment-date">'.$row["date"].'</a>
             <h6>'.$row["comment_sender_name"].'</h6>
             <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius</p>
             <div class="d-flex align-items-center">
                 <a href="#" class="reply" id="'.$row["comment_id"].'" >Reply</a>
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
        $marginleft = $marginleft + 48;
    }
    if($count > 0)
    {
        foreach($result as $row)
        {
            $output .= '
     <ol class="children">
     <li class="single_comment_area">
       <!-- Comment Content -->
       <div class="comment-content d-flex">
           <div class="comment-meta">
               <a href="#" class="comment-date">'.$row["date"].'</a>
               <h6>'.$row["comment_sender_name"].'</h6>
               <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius</p>
               <div class="d-flex align-items-center">
                   <a href="#" class="reply" id="'.$row["comment_id"].'">Reply</a>
               </div>
           </div>
       </div>
   </li>
</ol>
   ';
            $output .= get_reply_comment($connect, $row["comment_id"], $marginleft);
        }
    }
    return $output;
}

?>
