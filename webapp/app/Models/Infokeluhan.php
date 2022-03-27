<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use Laravel\Passport\HasApiTokens;
class Infokeluhan extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $guarded =['id'];
    protected $with =['category','opd','author'];
    public function category()
    {
    return$this->belongsTo(Category::class);
    }
    public function opd()
    {
    return$this->belongsTo(Opd::class);
    }



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
   
}
