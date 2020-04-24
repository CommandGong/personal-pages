<?php namespace App\Controllers;

class Home extends BaseController{
    public function index(){   
        echo "heresss?"; 
        return view('welcome_message');
    }
    public function hello()
    {   
        log_message('error', "it is a hello page and logs ha");
        echo "hello!"; 
    }


}
