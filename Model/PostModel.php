<?php
class Post
{
    public $post_id;
    public $post_title;
    public $post_summary;
    public $post_content;
    public $post_image;
    public $post_createdate;
    public $category_id;
    public $post_link;


    function __construct($post_id, $post_title, $post_summary, $post_content, $post_image, $post_createdate, $category_id, $post_link)
    {
        $this->post_id = $post_id;
        $this->post_title = $post_title;
        $this->post_summary = $post_summary;
        $this->post_content = $post_content;
        $this->post_image = $post_image;
        $this->post_createdate = $post_createdate;
        $this->category_id = $category_id;
        $this->post_link = $post_link;
    }
}
class PostModel
{
    private $mysql;
    public function __construct()
    {
        $this->mysql = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
    }
    function GetAll()
    {
        $query = "SELECT * FROM lph_post WHERE Active = 1";
        $result = $this->mysql->query($query);
        $data = [];
        foreach ($result->fetch_all() as $value) {
            array_push($data, new Post($value[0], $value[1], $value[2], $value[3], $value[4], $value[5], $value[6], $value[7]));
        }
        return $data;
    }
    function Insert(Post $post)
    {
        $query = "INSERT INTO lph_post (PostTitle, PostSummary, PostContent, PostImage, PostCreateDate, PostLink, Active, CategoryId) 
        VALUES ('$post->post_title','$post->post_summary','$post->post_content','$post->post_image','$post->createdate','$post->post_link','1','$post->category_id')";
        $result = $this->mysql->query($query);

        return ($result);
    }
    // function GetAllCategory(){
    //     $query = "SELECT * FROM lph_category";
    //     $result= $this->mysql->query($query);
    //     $data = $result->fetch_all();
    //     print_r($data);
    // }
}
