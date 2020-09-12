<?php

class  Archive extends Controller
{
    function View()
    {
        $slide = $this->getmodel('PostModel');
        $about = $this->getmodel('AboutModel');
        $data1 = "Tổng hợp";
        $data3 = $slide->GetCategories();
        $data2 = $slide->GetMoiNhat();
        $data4 = $about->GetAll();
        $this->getviewweb('archive', $data = [$data1, $data2, $data3, $data4]);
    }

    function BaiViet($value)
    {
        $slide = $this->getmodel('PostModel');
        $about = $this->getmodel('AboutModel');
        $catelogy = $this->getmodel('CatelogyModel');
        $cate = $catelogy->GetCatelogyName();
        $data1 = "";
        $data3 = $slide->GetCategories();
        $data2 = $slide->GetArchive($value);
        if (!empty($cate)){
            foreach ($cate as $key) {
                if (strlen(strstr($this->make($key[0]),$this->make($value) )) > 0) {
                        $value=$key[0];
                }
            }
        }
        $data2= $slide-> GetArchive($value);
        if (!empty($data2)){
            foreach ($data2 as $value){
                $data1=$value[0];
            }
        }
        $data4 = $about->GetAll();
        $this->getviewweb('archive', $data = [$data1, $data2, $data3, $data4]);
    }

    function search()
    {
        if (isset($_POST['topsearch'])) {
            $search = $_POST['topsearch'];
            $slide = $this->getmodel('PostModel');
            $about = $this->getmodel('AboutModel');
            $data1 = '';
            $seachfullpost = $slide->Search1();
            if (!empty($seachfullpost)) {
                foreach ($seachfullpost as $value) {
                    if (strlen(strstr($this->make($value[0]), $this->make($search))) > 0) {
                        $search = $value[0];
                        $data1 = $value[0];
                        $data2= $slide-> GetArchive($search);
                        } elseif (strlen(strstr($this->make($value[3]), $this->make($search))) > 0) {
                            $search = $value[3];
                            echo $value[3];
                            $data1 = $value[0];
                            $data2= $slide-> GetArchiveSearch($search);
                    }

                }
                if (empty($data2)) {
                    $data1 = "Không tìm thấy kết quả theo yêu cầu của bạn";
                    $data2 = $slide->GetMoiNhat();
                }
            }
            $data3 = $slide->GetCategories();
            $data4 = $about->GetAll();
            $this->getviewweb('archive', $data = [$data1, $data2, $data3, $data4]);
        }
    }

}