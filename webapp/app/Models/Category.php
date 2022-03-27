<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Category extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

   
    protected $guarded = ['id'];
    protected $fillable = [
        'opd_id',
        'name',
        'slug',
        'created_at',
        'updated_at',    
    ];

    public function infokeluhans()
    {
        return $this->hasMany(Post::class);
    }
    public function kuesioner()
    {
        return $this->hasMany(Post::class);
    }
    public function kuesioners()
    {
        return $this->hasMany(Post::class);
    }
}




