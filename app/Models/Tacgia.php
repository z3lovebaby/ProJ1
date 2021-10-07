<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tacgia extends Model
{
    use HasFactory;
    protected $fillable = [
        'TG_HoTen',
        'TG_MoTa'
    ];
    public function Sachs(){
        return $this->hasMany(Sach::class,'S_TacGiaId');
    }
    
}
