<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'danhmucsaches';
    public function categoryChildren(){
        return $this->hasMany(related: Category::class, foreignKey: DMS_parentId);
    }
}
