<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nxb extends Model
{
    use HasFactory;
    protected $fillable = [
        'NXB_Ten',
        
    ];
    public function Sachs(){
        return $this->hasMany(Sach::class,'S_NXBId');
    }
}
