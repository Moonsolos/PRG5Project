<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'list',
        'category',
    ];
    public function blog(){
        return $this->belongsTo(Blog::class);
    }
}

