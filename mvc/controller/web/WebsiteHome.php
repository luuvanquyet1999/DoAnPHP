<?php

class WebsiteHome extends Controller
{
    function View()
    {

        $slide= $this->getmodel('PostModel');
        $about= $this->getmodel('AboutModel');
        $data1 = $slide->GetCategories();
        $data2 = $slide->GetTrending();
        $most=$slide->GetMostPopular();
        $data3=[];
        $data4= $slide->GetDanhChoBan();
        $getmoinhat=$slide->GetMoiNhat();
        $data5 =[];
        // danh sach pho bien
        for ($x = 0; $x <= 4; $x++) {
            array_push($data3,$most[$x]);
            array_push($data5,$getmoinhat[$x]);
        }
        $data6=[];
        for ($x = 5; $x <= 9; $x++) {
            array_push($data6,$getmoinhat[$x]);
        }
        $data8= $slide->GetThoiTrang();
        $data9= $slide->GetTheThao();
        $data7=$about->GetAll();
        $this->getviewweb('index',$data=[$data1,$data2,$data3,$data4,$data5,$data6,$data7,$data8,$data9]);


    }
//    function Show(){
//        $slidemodel = $this->getmodel('SlideModel');
//        $data=$slidemodel->GetAll();
//        $this->getview('aodep',$data);
//    }
}