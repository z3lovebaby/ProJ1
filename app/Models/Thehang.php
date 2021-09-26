<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thehang extends Model
{
    use HasFactory;
    public function Chitietthehangs(){
        return $this->hasMany(Chitietthehang::class,'CTTH_TheHangId');
    }
    public function Khachhangs(){
        return $this->belongsTo(Khachhang::class,'TH_KhachHangId','id');
    }
}
