<?php


class CatelogyModel extends DB
{
        function GetCatelogyName(){
            $query ="SELECT CategoryName FROM lph_category WHERE Active =1";
            $result = $this->mysql->query($query);
            $data=[];
            while ($row = mysqli_fetch_array($result)) {
                array_push($data, [$row[0]]);
            }
            return $data;

        }
}