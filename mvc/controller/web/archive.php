<?php

class  Archive extends  Controller{
    function View()
    {
        $slide= $this->getmodel('PostModel');
        $about= $this->getmodel('AboutModel');
        $data1 = "Tổng hợp";
        $data3= $slide-> GetCategories();
        $data2= $slide-> GetMoiNhat();
        $data4=$about->GetAll();
        $this->getviewweb('archive',$data=[$data1,$data2,$data3,$data4]);
    }
    function BaiViet($value)
    {
        $x= $this->Repaid($value);
        $slide= $this->getmodel('PostModel');
        $about= $this->getmodel('AboutModel');
        $data1 = "";
        $data3= $slide-> GetCategories();
        $data2= $slide-> GetArchive($x);
        if (empty($data2)){
            $this->View();
        }
        foreach ($data2 as $value ){
            $data1= $value[0];
        }
        $data4=$about->GetAll();
        $this->getviewweb('archive',$data=[$data1,$data2,$data3,$data4]);
    }

}