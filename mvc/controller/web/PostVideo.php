<?php
class PostVideo extends Controller
{
    function View()
    {
        $data = ["Page"=>"header"];
        $this->getviewweb('video-post',$data);
    }
}