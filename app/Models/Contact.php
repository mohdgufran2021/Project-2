<?php

namespace App\Models;
use CodeIgniter\Model;

class Contact extends Model
{

    protected $table = 'contacts';
    protected $allowedFields = ['fname','lname','country','contact','subject','created_at','updated_at'];
    protected $useTimestamps = true;
}
