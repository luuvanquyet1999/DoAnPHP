<?php
include_once './Model/DB.php';
class Post
{
    public $post_id;
    public $post_title;
    public $post_summary;
    public $post_content;
    public $post_image;
    public $post_createdate;
    public $category_name;
    public $username;
    public $post_link;
    public $post_hot;


    function __construct($post_id, $post_title, $post_summary, $post_content, $post_image, $post_createdate, $category_name, $username, $post_link,$post_hot)
    {
        $this->post_id = $post_id;
        $this->post_title = $post_title;
        $this->post_summary = $post_summary;
        $this->post_content = $post_content;
        $this->post_image = $post_image;
        $this->post_createdate = $post_createdate;
        $this->category_name = $category_name;
        $this->username = $username;
        $this->post_link = $post_link;
        $this->post_hot = $post_hot;
    }
}
class AdminPostModel extends DB
{
    // private $mysql;
    // public function __construct()
    // {
    //     $this->mysql = new mysqli('112.78.2.94', 'super_tranducbo', 'abc123#!', 'superfr_tranducbo');
    //     $this->mysql->query("SET NAMES 'UTF8'");
    // }
    function GetAll()
    {
        $query = "SELECT * FROM lph_post WHERE Active = 1 ORDER BY PostId DESC";
        $result = $this->mysql->query($query);
        $data = [];
        foreach ($result->fetch_all() as $value) {
            array_push($data, new Post($value[0], $value[1], $value[2], $value[3], $value[4], $value[5], $value[6], $value[7], $value[10], $value[12]));
        }
        return $data;
    }
    function Insert(Post $post)
    {
        $query = "INSERT INTO lph_post (PostTitle, PostSummary, PostContent, PostImage, PostCreateDate, CategoryName, Username, PostStatus, Active, PostLink, PostHot) 
        VALUES ('$post->post_title','$post->post_summary','$post->post_content','$post->post_image','$post->post_createdate','$post->category_name','$post->username','0','1','$post->post_link',0)";
        $result = $this->mysql->query($query);
        // print_r($result);
        // die();
        return $result;
    }
    function GetRecordById($post_id)
    {
        $query = "SELECT * FROM lph_post WHERE Active = 1 AND PostId ='$post_id' LIMIT 1";
        $result = $this->mysql->query($query);
        $data = $result->fetch_all();
        // print_r($data);
        // die();
        if (count($data)) {
            return new Post($data[0][0], $data[0][1], $data[0][2], $data[0][3], $data[0][4], $data[0][5], $data[0][6], $data[0][7], $data[0][8], $data[0][9]);
        }
        return null;
    }
    function Update(Post $post)
    {
        $query = "UPDATE lph_post 
        SET PostTitle='$post->post_title',
            PostSummary='$post->post_summary', 
            PostContent='$post->post_content',
            PostImage = '$post->post_image', 
            PostCreateDate='$post->post_createdate',
            CategoryName='$post->category_name',
            Username='$post->username', 
            PostLink='$post->post_link' 
        WHERE PostId='$post->post_id'";
        $result = $this->mysql->query($query);
        return $result;
    }
    function Delete($post_id)
    {
        $query = "UPDATE lph_post SET Active = 0
        WHERE PostId = '$post_id'";
        $result = $this->mysql->query($query);
        return $result;
    }
    function GetCategory()
    {
        $query = "SELECT * FROM lph_category WHERE Active =1";
        $result = $this->mysql->query($query);
        return $result;
    }
    function makeLink($strTitle)
    {
        $strTitle = strtolower($strTitle);
        //Code loại bỏ ký hiệu đặc biệt
        $strTitle = trim($strTitle); //Loại bỏ các dấu cách(khoảng trắng) ở đầu và cuối 1 chuỗi
        $strTitle = str_replace('-', '--', $strTitle);
        $strTitle = str_replace(' ', '-', $strTitle);
        $strTitle = preg_replace("/(ò|ó|ọ|ỏ|õ|ơ|ờ|ớ|ợ|ở|ỡ|ô|ồ|ố|ộ|ổ|ỗ)/", 'o', $strTitle);
        $strTitle = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ|Ô|Ố|Ổ|Ộ|Ồ|Ỗ)/", 'o', $strTitle);
        $strTitle = preg_replace("/(à|á|ạ|ả|ã|ă|ằ|ắ|ặ|ẳ|ẵ|â|ầ|ấ|ậ|ẩ|ẫ)/", 'a', $strTitle);
        $strTitle = preg_replace("/(À|Á|Ạ|Ả|Ã|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ|Â|Ấ|Ầ|Ậ|Ẩ|Ẫ)/", 'a', $strTitle);
        $strTitle = preg_replace("/(ề|ế|ệ|ể|ê|ễ|é|è|ẻ|ẽ|ẹ)/", 'e', $strTitle);
        $strTitle = preg_replace("/(Ể|Ế|Ệ|Ể|Ê|Ễ|É|È|Ẻ|Ẽ|Ẹ)/", 'e', $strTitle);
        $strTitle = preg_replace("/(ừ|ứ|ự|ử|ư|ữ|ù|ú|ụ|ủ|ũ)/", 'u', $strTitle);
        $strTitle = preg_replace("/(Ừ|Ứ|Ự|Ử|Ư|Ữ|Ù|Ú|Ụ|Ủ|Ũ)/", 'u', $strTitle);
        $strTitle = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $strTitle);
        $strTitle = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'i', $strTitle);
        $strTitle = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $strTitle);
        $strTitle = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'y', $strTitle);
        $strTitle = str_replace('đ', 'd', $strTitle);
        $strTitle = str_replace('Đ', 'd', $strTitle);
        $strTitle = preg_replace("/[^-a-zA-Z0-9]/", '', $strTitle);
        return $strTitle;
    }
    //Update bài  viết hot
    function UpdateHot($id)
    {
        $result = $this->mysql->query("update lph_post set PostHot = 1 where PostId = $id");
        return $result;
    }
    function XoaHot($id)
    {
        $result = $this->mysql->query("update lph_post set PostHot = 0 where PostId = $id");
        return $result;
    }
}
