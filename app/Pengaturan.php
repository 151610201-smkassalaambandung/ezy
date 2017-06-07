<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaturan extends Model
{
    //
    protected $table='pengaturan';
    protected $fillable =['nama_situs','alamat_situs','email'];
    protected $visible =['nama_situs','alamat_situs','email'];
    public $timestamps= true;

}
