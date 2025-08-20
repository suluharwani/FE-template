<?php

namespace App\Models;

use CodeIgniter\Model;

class PageModel extends Model
{
    protected $table = 'pages';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'slug', 'content', 'meta_description', 'meta_keywords', 'is_published'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    
    public function getPageBySlug($slug)
    {
        return $this->where('slug', $slug)->where('is_published', 1)->first();
    }
}