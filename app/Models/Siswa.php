<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kontak;
use App\Models\Projek;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',        
        'jk',
        'alamat',
        'email',
        'foto',
        'about'
    ];
    protected $table = "siswa";
    public function kontak (){
        return $this->hasMany(Kontak::class,'id_siswa','id');
    }

    public function projek(){
        return $this->hasMany(Projek::class,'id_siswa','id');
        
    }
}
