<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

use Laravel\Passport\HasApiTokens;
class Kuesioner extends Model
{

    use HasApiTokens, HasFactory, Notifiable;
    protected $table ='kuesioner';
  

    
    

    protected $fillable = [
        'opd_id',
        'category_id',
        'A1',
        'A2',
        'A3',
        'A4',
        'A5',
        'name',
    
        
    
   
    ];

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
        return 'opd_id';
    }
   
}
