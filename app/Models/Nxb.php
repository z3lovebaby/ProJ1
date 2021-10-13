<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nxb extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'NXB_Ten',
        'NXB_Mota'
    ];
    public function Sachs(){
        return $this->hasMany(Sach::class,'S_NXBId');
    }
    
}
