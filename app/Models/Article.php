<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    /**
     * Mass assingment
     */
    protected $duarded = ['id'];

    /**
     * Invarse Relatioship to get the auther from article
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
