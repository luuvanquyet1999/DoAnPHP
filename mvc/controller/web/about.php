<?php
class About extends Controller
{
    function View()
    {
        $post= $this->getmodel('PostModel');
        $slide= $this->getmodel('AboutModel');
        $data1= $post-> GetCategories();
        $data2=$slide->GetAll();
        $this->getviewweb('about',$data=[$data1,$data2]);
    }
}