<?php
namespace app\index\controller;

class Install
{
    public function index()
    {
        if(file_exists("../install")) return json_encode(["error"=>0,"message"=>"true"]);
        else return json_encode(["error"=>0,"message"=>"false"]);
    }
}
