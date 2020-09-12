<?php
include_once './Model/DB.php';
class Comment
{
    public $post_id;
    public $post_title;
    public $count;
    function __construct($post_id, $post_title, $count)
    {
        $this->post_id = $post_id;
        $this->post_title = $post_title;
        $this->count = $count;
    }
}
class Detail
{
   public $post_id;
    //public $post_title;
    public $content;
    public $name;
    public $date;
    public $cmt_id;
    function __construct($post_id, $content, $name, $date,$cmt_id)
    {
        $this->post_id = $post_id;
        //$this->post_title = $post_title;
        $this->content = $content;
        $this->name = $name;
        $this->date = $date;
        $this->cmt_id = $cmt_id;
    }
}
class AdminCommentModel extends DB
{
    function GetAllComment()
    {
        $query = "SELECT IdPost, PostTitle, COUNT(*)
        FROM lph_comment,lph_post
        where lph_comment.IdPost = lph_post.PostId AND lph_comment.Active = 1
        GROUP BY IdPost";
        $result = $this->mysql->query($query);
        $data = [];
        foreach ($result->fetch_all() as $value) {
            array_push($data, new Comment($value[0], $value[1], $value[2]));
        }
        return $data;
    }
    function GetDetail($post_id)
    {
        $query = "SELECT IdPost, comment, comment_sender_name, date, comment_id FROM lph_comment,lph_post 
        where lph_comment.IdPost = lph_post.PostId and lph_post.PostId = '$post_id' AND lph_comment.Active = 1 ORDER BY comment_id DESC";
        $result = $this->mysql->query($query);
        $data = [];
        foreach ($result->fetch_all() as $value) {
            array_push($data, new Detail($value[0], $value[1], $value[2],$value[3],$value[4]));
        }
        return $data;
       
    }
    function Delete($cmt_id)
    {
        $query = "UPDATE lph_comment SET Active = 0
        WHERE comment_id = '$cmt_id'";
        $result = $this->mysql->query($query);
        return $result;
    }
}
