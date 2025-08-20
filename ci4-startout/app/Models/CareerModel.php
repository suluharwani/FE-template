<?php

namespace App\Models;

use CodeIgniter\Model;

class CareerModel extends Model
{
    protected $table = 'career_applications';
    protected $primaryKey = 'id';
    protected $allowedFields = ['first_name', 'last_name', 'email', 'phone', 'position', 'message', 'resume_path', 'status'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
}