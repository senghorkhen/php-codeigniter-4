<?php namespace App\Controllers;
class Demo extends BaseController
{
    public function index()
    {
        $data['title'] = "PNC Codelgniter 4";
        return view('demo/index', $data);
    }
    public function show(){
        $data = [
            "title" => "Show Page View Codelgniter 4",
            "class" => "WEP 2020 B"
        ];
        return view('demo/show', $data);
    }
    //--------------------------------------------------------
}

?>