<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staf extends Model
{
    protected $table = 'staf';
    protected $fillable = ['nama', 'alamat', 'no_hp', 'jenis_kelamin', 'hobi'];
}
