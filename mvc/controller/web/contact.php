<?php

class contact extends Controller
{
    function View()
    {
        $post= $this->getmodel('PostModel');
        $data1= $post-> GetCategories();

        $slide= $this->getmodel('ContactModel');
        $data2=$slide->GetAll();
        $this->getviewweb('contact',$data=[$data1,$data2]);
    }
}