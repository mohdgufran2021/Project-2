<?php

namespace App\Controllers;

use App\Models\Contact;
use CodeIgniter\Controller;

class Practice extends Controller
{
    public function view()
    {
        echo view('New/practice');
    }


    public function about()
    {
        echo view('New/practice');
        echo view('New/about');
    }


    public function home()
    {
        echo view('New/practice');
        echo view('New/home');
    }


    public function user()
    {
        echo view('New/practice');
        echo view('New/user');
    }

    public function contact()
    {
        $data = ['title'=>'Contact Form','success'=>false];

        if ($this->request->getMethod()=='post'  && $this->validate([

            ]))
        {
            $insert = [
                'fname'=>$this->request->getPost('fname'),
                'lname'=>$this->request->getPost('lname'),
                'country'=>$this->request->getPost('country'),
                'contact'=>$this->request->getPost('contact'),
                'subject'=>$this->request->getPost('subject')
            ];

            $obj = new Contact();
           if ( $obj->insert($insert))
           {
            echo $data['success']='Success';
           }
}
echo view('templates/header', $data);
echo view('News/contact', $data);
echo view('templates/footer', $data);
}
}
