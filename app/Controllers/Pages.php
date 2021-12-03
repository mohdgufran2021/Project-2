<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller
{
    public function index()
    {
        echo view('welcome_message');
    }

    public function view($page = 'home')
    {
        $data['title'] = $page;   //Capitalize the first Letter.

    echo view('templates/header',$data);
    echo view('pages/'.$page ,$data);
    echo view('templates/footer',$data);
}
}
