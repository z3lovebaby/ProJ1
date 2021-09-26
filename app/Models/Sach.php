<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sach extends Model
{
    use HasFactory;
    public function Nxbs(){
        return $this->belongsTo(Nxb::class,'S_NXBId','id');
    }
    public function Tacgias(){
        return $this->belongsTo(Tacgia::class,'S_TacGiaId','id');
    }
    public function Danhmucsachs(){
        return $this->belongsTo(Danhmucsach::class,'S_DanhmucId','id');
    }
    public function Chitietthehangs(){
        return $this->hasMany(Chitietthehang::class,'CTTH_SachId');
    }
}
