<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "user";
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'password', 'email', 'name', 'id_role'];
}
