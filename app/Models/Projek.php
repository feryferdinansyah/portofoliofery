<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;
class Projek extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    protected $table='projek';
    public function siswa(){
        return $this->belongsTo(Siswa::class,'id_siswa' ,'id');
    }
}
