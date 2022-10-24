<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kontak;
class Jeniskontak extends Model
{
    use HasFactory;
    protected $guarded = [
        'id'
    ];
    protected $table='jenis_kontak';
    public function kontak (){
        return $this->hasMany(Kontak::class, 'id_jenis','id');

    }
}
