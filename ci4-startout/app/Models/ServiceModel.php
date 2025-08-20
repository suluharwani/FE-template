<?php

namespace App\Models;

use CodeIgniter\Model;

class ServiceModel extends Model
{
    protected $table = 'services';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'slug', 'description', 'icon', 'content', 'is_featured', 'is_active'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    
    public function getFeaturedServices()
    {
        return $this->where('is_featured', 1)->where('is_active', 1)->findAll();
    }
    
    public function getServiceBySlug($slug)
    {
        return $this->where('slug', $slug)->where('is_active', 1)->first();
    }
}