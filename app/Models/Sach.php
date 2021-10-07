<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sach extends Model
{
    use HasFactory;

    protected $fillable = [
        'S_DanhMucId',
        'S_Ten',
        'S_Ma',
        'S_Anh',
        'S_FileUpload',
        'S_MoTa',
        'S_ChiTiet',
        'S_TuKhoa',
        'S_GiaBan',
        'S_TrangThai',
        'S_SoLanXem',
        'S_KichCo',
        'S_NXBId',
        'S_GiaNhap',
        'S_SoLuong',
        'S_ViTri',
        'S_NguyenBo',
        'S_TacGiaId',
        'S_CanNang'
    ];

    public function Nxbs(){
        return $this->belongsTo(Nxb::class,'S_NXBId','id');
    }
    public function Tacgias(){
        return $this->belongsTo(Tacgia::class,'S_TacGiaId','id');
    }
    public function Danhmucsachs(){
        return $this->belongsTo(Danhmucsach::class,'S_DanhMucId','id');
    }
    public function Chitietthehangs(){
        return $this->hasMany(Chitietthehang::class,'CTTH_SachId');
    }
}
