<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Danhmucsach extends Model
{
    use HasFactory,SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'DMS_TieuDe',
        'DMS_ParentId',
        'DMS_MoTa',
        'DMS_ViTri',
        'DMS_TrangThai'
    ];
    public function Sachs(){
        return $this->hasMany(Sach::class,'S_DanhMucId');
    }

}
