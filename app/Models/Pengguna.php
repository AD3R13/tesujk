<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'usertype', 'password'];
    public function level()
    {
        return $this->belongsTo(Level::class, 'id_level', 'id');
    }
}
