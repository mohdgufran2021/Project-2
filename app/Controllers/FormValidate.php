<?php
namespace App\Controllers;
use App\Models\TestModel;
use CodeIgniter\Controller;

class FormValidate extends BaseController
{
   public function validation()
   {
       $data = [];
       echo view('News/contact',$data);
   }
}
