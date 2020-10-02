<?php namespace App\Controllers;

class Home extends BaseController{
    
 
    public function index(){     
        $data['lang']= lang('common.text');
        return view('home_page',$data);
    }
    public function hello()
    {    
    }


}
