<?php

class WebsiteHome extends Controller
{
    function View()
    {
        //get team
        $about = $this->getmodel('AboutModel');
        $data10 = $about->GetAll();
        $slide = $this->getmodel('PostModel');
        $about = $this->getmodel('AboutModel');
        // catelogy
        $data1 = $slide->GetCategories();
        // xuhuong
        $data2 = $slide->ThinhHanh();
        // tin moi
        $data3 = $slide->GetTinMoi();
        //danh cho ban
        $data4 = $slide->GetDanhChoBan();
        // danh cho ban 10
        $getdcb = $slide->GetDanhChoBan2();
        $data5 = [];
        $data6 = [];
        for ($x = 0; $x < 10; $x++) {
            if ($x < 5) {
                array_push($data5, $getdcb[$x]);
            }
            if ($x >= 5)
                array_push($data6, $getdcb[$x]);
        }
        // get thoi trang , thể thao
        $data7 = $slide->GetThoiTrang();
        $data8 = $slide->GetTheThao();
        //get pho bien
        $data9 = $slide->GetPhoBien();
        $this->getviewweb('index', $data = [$data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8, $data9, $data10]);


    }
//    function Show(){
//        $slidemodel = $this->getmodel('SlideModel');
//        $data=$slidemodel->GetAll();
//        $this->getview('aodep',$data);
//    }
}