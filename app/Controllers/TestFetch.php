<?php

namespace App\Controllers;

use App\Models\Contact;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;

class TestFetch extends Controller
{
    use ResponseTrait;
   public function get()
   {
       $date = date('d/m/Y H:i:s');
       //echo 'Thishv';      //This Runs, When give the text() Function Format in the Response of the in Our Script Tag.[ response.text() ]
      return $this->respond( ['data' => 'This is Fetch Data.= '.$date]);      //This Runs, When give the json() Function Format in the Response of the in Our Script Tag. [ response.json() ]
   }

   public function view()
   {
       echo view('New/testfetch');
   }
}
