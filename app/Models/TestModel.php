<?php

namespace App\Models;
use CodeIgniter\Model;

class TestModel extends Model
{
protected $table = 'testusers';
protected $allowedFields = ['name','image'];
protected $useTimestamps = true;
}
