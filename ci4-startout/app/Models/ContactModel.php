<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contact_submissions';
    protected $primaryKey = 'id';
    protected $allowedFields = ['first_name', 'last_name', 'email', 'company', 'phone', 'service', 'message', 'is_read'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    
    public function getUnreadCount()
    {
        return $this->where('is_read', 0)->countAllResults();
    }
}