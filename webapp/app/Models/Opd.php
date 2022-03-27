<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opd extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function infokeluhans()
    {
        return $this->hasMany(Opd::class);
    }
    public function kuesioners()
    {
        return $this->hasMany(Post::class);
    }
    public function kuesioner()
    {
        return $this->hasMany(Kuesioner::class);
    }
}


