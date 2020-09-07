<?php

class Post1
{
    public $post_id;
    public $post_title;
    public $post_summary;
    public $post_content;
    public $post_image;
    public $post_link;
    public $post_date;
    public $category_name;
    public $username;
    public $post_info;

    function __construct($post_id, $post_title, $post_summary, $post_content, $post_image, $post_date, $category_name, $username, $post_link, $post_info)
    {
        $this->post_id = $post_id;
        $this->post_title = $post_title;
        $this->post_summary = $post_summary;
        $this->post_content = $post_content;
        $this->post_image = $post_image;
        $this->post_date = $post_date;
        $this->category_name = $category_name;
        $this->username = $username;
        $this->post_link = $post_link;
        $this->post_info = $post_info;
    }
}


class PostModel extends DB
{

    //website home
    function GetCategories()
    {
        $query = "SELECT CategoryName, COUNT(*) c FROM lph_post 
WHERE Active = 1
GROUP BY CategoryName  HAVING c > 0 order by c desc";
        $result = $this->mysql->query($query);
        $data = [];
        while ($row = mysqli_fetch_array($result)) {
            array_push($data, [$row[0], $row[1]]);
        }
        return $data;
    }

    function XuHuong()
    {
        $query = "SELECT PostTitle , CategoryName ,PostImage ,PostLink
                FROM lph_post WHERE PostInfo = 'Xu hướng' AND Active = 1";
        $result = $this->mysql->query($query);
        $data = [];
        while ($row = mysqli_fetch_array($result)) {
            array_push($data, [$row[0], $row[1], $row[2],$row[3]]);
        }
        return $data;
    }

    function GetPhoBien()
    {
        $query = "SELECT PostTitle ,PostImage ,PostLink
                        FROM lph_post
                        WHERE
                    PostInfo = 'Hot' AND Active = 1";
        $result = $this->mysql->query($query);
        $data = [];
        while ($row = mysqli_fetch_array($result)) {
            array_push($data, [$row[0], $row[1],$row[2]]);
        }
        return $data;
    }
    function GetTinMoi()
    {
        $query = "SELECT CategoryName ,PostImage ,PostCreateDate, PostTitle ,PostSummary ,PostLink  FROM lph_post 
WHERE Active = 1 ORDER BY PostId DESC LIMIT 5 ";
        $result = $this->mysql->query($query);
        $data = [];
        while ($row = mysqli_fetch_array($result)) {
            array_push($data, [$row[0], $row[1], $row[2], $row[3], $row[4],$row[5]]);
        }
        return $data;
    }
    function GetDanhChoBan()
    {
        $query = "SELECT CategoryName ,PostImage ,PostCreateDate, PostTitle ,PostSummary 
FROM lph_post 
WHERE Active =1
ORDER BY PostId DESC LIMIT 1";
        $result = $this->mysql->query($query);
        $data = [];
        while ($row = mysqli_fetch_array($result)) {
            array_push($data, [$row[0], $row[1], $row[2], $row[3], $row[4]]);
        }
        return $data;
    }
    function GetDanhChoBan2()
    {
        $query = "SELECT CategoryName ,PostImage ,PostCreateDate, PostTitle ,PostSummary ,PostLink  FROM lph_post 
WHERE Active = 1
GROUP BY CategoryName  ORDER BY PostId DESC LIMIT 10";
        $result = $this->mysql->query($query);
        $data = [];
        while ($row = mysqli_fetch_array($result)) {
            array_push($data, [$row[0], $row[1], $row[2], $row[3], $row[4]]);
        }
        return $data;
    }
    function GetThoiTrang()
    {
        $query = "SELECT CategoryName ,PostImage ,PostCreateDate, PostTitle ,PostSummary,PostLink FROM lph_post  WHERE
                    CategoryName = 'Thời Trang' AND Active =1 ORDER BY PostId DESC";
        $result = $this->mysql->query($query);
        $data = [];
        while ($row = mysqli_fetch_array($result)) {
            array_push($data, [$row[0], $row[1], $row[2], $row[3], $row[4],$row[5]]);
        }
        return $data;
    }

    function GetTheThao()
    {
        $query = "SELECT CategoryName ,PostImage ,PostCreateDate, PostTitle ,PostSummary ,PostLink FROM lph_post  WHERE
                    CategoryName = 'Thể Thao' AND Active =1  ORDER BY PostId DESC";
        $result = $this->mysql->query($query);
        $data = [];
        while ($row = mysqli_fetch_array($result)) {
            array_push($data, [$row[0], $row[1], $row[2], $row[3], $row[4],$row[5]]);
        }
        return $data;
    }

    //end website home


    function GetMoiNhat()
    {
        $query = "SELECT CategoryName ,PostImage ,PostCreateDate, PostTitle ,PostSummary ,PostLink
                FROM lph_post WHERE Active =1
                    ORDER BY PostId DESC ";
        $result = $this->mysql->query($query);
        $data = [];
        while ($row = mysqli_fetch_array($result)) {
            array_push($data, [$row[0], $row[1], $row[2], $row[3], $row[4],$row[5]]);
        }
        return $data;
    }



    // get/archive/
    function GetArchive($value)
    {
        $query = "SELECT CategoryName ,PostImage ,PostCreateDate, PostTitle ,PostSummary ,PostLink FROM lph_post  WHERE
                    CategoryName = '$value' AND Active =1 ORDER BY PostId DESC";
        $result = $this->mysql->query($query);
        $data = [];
        while ($row = mysqli_fetch_array($result)) {
            array_push($data, [$row[0], $row[1], $row[2], $row[3], $row[4],$row[5]]);
        }
        return $data;
    }

    //get /post
    function GetPost()
    {
        $query = "SELECT  PostImage,PostCreateDate,CategoryName,PostTitle,PostContent,Username,PostLink FROM lph_post 
                    WHERE Active =1
                    ORDER BY PostId DESC LIMIT 1";
        $result = $this->mysql->query($query);
        $data = [];
        while ($row = mysqli_fetch_array($result)) {
            array_push($data, [$row[0], $row[1], $row[2], $row[3], $row[4], $row[5],$row[6]]);
        }
        return $data;
    }

    // get/post/baiviet
    function GetBaiViet($value)
    {
        $query = "SELECT PostImage,PostCreateDate,CategoryName,PostTitle,PostContent ,Username , PostLink FROM lph_post 
                    WHERE PostLink='$value' ORDER BY PostId DESC LIMIT 1 ";
        $result = $this->mysql->query($query);
        $data = [];
        while ($row = mysqli_fetch_array($result)) {
            array_push($data, [$row[0], $row[1], $row[2], $row[3], $row[4], $row[5],$row[6]]);
        }
        return $data;
    }

    function InserPost($posttitle, $postsummary, $postconcent, $postimg, $postcatelogy, $username,$postlink)
    {
        $query = "INSERT INTO lph_post (PostTitle, PostSummary, PostContent, PostImage, PostCreateDate, CategoryName, Username,
                            PostStatus, Active,PostLink) 
        VALUES ('$posttitle','$postsummary','$postconcent'
        ,'$postimg',NOW(),'$postcatelogy','$username',0,1,'$postlink')";
        $result = $this->mysql->query($query);
        return $result;
    }
    function GetBaiVietTT($value){
            $query = "SELECT PostImage , PostTitle,PostLink FROM lph_post  WHERE
                    CategoryName = '$value' AND Active =1 ORDER BY PostId DESC LIMIT 3";
        $result = $this->mysql->query($query);
        $data = [];
        while ($row = mysqli_fetch_array($result)) {
            array_push($data, [$row[0], $row[1], $row[2]]);
        }
        return $data;
    }
    // get/post/baiviet
    function GetTitLe($value)
    {
        $query = "SELECT PostTitle FROM lph_post WHERE PostTitle='$value' AND Active =1";
        $result = $this->mysql->query($query);
        $data = '';
        if ($result->num_rows == 0) {
            $data = 0;
        } else {
            $data = 1;
        }
        return $data;
    }
}

