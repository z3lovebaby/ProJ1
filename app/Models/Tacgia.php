<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tacgia extends Model
{
    use HasFactory;
    protected $fillable = [
        'TG_HoTen',
    ];
    public function sachs(){
        return $this->hasMany(Sach::class,'S_TacGiaId');
    }
}
