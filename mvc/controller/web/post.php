<?php


class post extends Controller
{
    function View()
    {
        $post = $this->getmodel('PostModel');
        $about = $this->getmodel('AboutModel');
        $user = $this->getmodel('UserModel');
        $data1 = $post->GetCategories();
        $data2 = $post->GetPost();
        $data3 = "Mới nhất";
        $data4 = "";
        $y = '';
        foreach ($data2 as $value) {
            $data4 = $value[3];
            $y = $value[5];
        }
        $data5 = $about->GetAll();
        $data6 = $user->GetUserPost($y);
        $data7 = $post->GetBaiVietTT($data3);
        if (empty($data6)) {
            array_push($data6, ['Admin ', 'fileUpload/Member/huyentri.jpg', 'Bài này mình xạo xạo thôi']);
        }
        $this->getviewweb('singer-post', $data = [$data1, $data2, $data3, $data4, $data5, $data6,$data7]);
    }

    function BaiViet($value)
    {
        $post = $this->getmodel('PostModel');
        $about = $this->getmodel('AboutModel');
        $user = $this->getmodel('UserModel');
        $data1 = $post->GetCategories();
        $data2 = $post->GetBaiViet($value);
        $data3 = "";
        $data4 = "";
        if (empty($data2)) {
            $this->View();
        }
        $y = '';
        foreach ($data2 as $value) {
            $data4 = $value[3];
            $data3 = $value[2];
            $y = $value[5];
        }
        $data6 = $user->GetUserPost($y);
        if (empty($data6)) {
            array_push($data6, ['Admin ', 'fileUpload/Member/huyentri.jpg'
                , 'Nghề làm báo của chúng tôi như làm bánh ấy ,sản phẩm chỉ thơm ngon lúc còn nóng hổi 
                , sau 2 ngày thì lại cũ mèm và sau 1 tuần thì biến .... biến mất']);
        }
        $data5 = $about->GetAll();
        $data7 = $post->GetBaiVietTT($data3);
        $this->getviewweb('singer-post', $data = [$data1, $data2, $data3, $data4, $data5, $data6, $data7]);
    }


}