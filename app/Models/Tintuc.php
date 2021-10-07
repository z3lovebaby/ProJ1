<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tintuc extends Model
{
    use HasFactory;

    protected $fillable = [
        'TT_TieuDe',
        'TT_TacGia',
        'TT_Ngay',
        'TT_MoTa',
        'TT_NoiDung',
        'TT_Anh',
        'TT_HienThi',
        'TT_NhomTin',
        'TT_TrangThai'
    ];

    public function Nhomtins(){
        return $this->belongsTo(Nhomtin::class,'TT_NhomTin','id');
    }
}
