<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
 protected $table = 'news';
 protected $allowedFields = ['title', 'slug', 'body','user_id','status','image'];
 protected $useTimestamps = true;
}
