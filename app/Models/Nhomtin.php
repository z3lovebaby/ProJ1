<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nhomtin extends Model
{
    use HasFactory;

    protected $fillable = [
        'NT_Ten',
        'NT_MoTa',
        'NT_ViTri',
        'NT_TrangThai'
    ];

    public function Tintucs(){
        return $this->hasMany(Tintuc::class,'TT_NhomTin');
    }
}
