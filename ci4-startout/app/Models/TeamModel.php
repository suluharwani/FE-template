<?php

namespace App\Models;

use CodeIgniter\Model;

class TeamModel extends Model
{
    protected $table = 'team_members';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'position', 'bio', 'photo', 'social_linkedin', 'social_twitter', 'display_order', 'is_active'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    
    public function getActiveTeam()
    {
        return $this->where('is_active', 1)->orderBy('display_order', 'ASC')->findAll();
    }
}