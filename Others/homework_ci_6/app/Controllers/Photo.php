<?php namespace App\Controllers;

class Photo extends BaseController
{
	public function index()
	{
		return view('upload/index');
    }
   
    public function upload()
	{
        $file = $this->request->getFile('photo');
        if($file->getSize() > 0 ){
            $file->move('images',$file->getRandomName());
        }else{
            echo "Please upload file first";
        }
		return view('upload/index');
    }



}