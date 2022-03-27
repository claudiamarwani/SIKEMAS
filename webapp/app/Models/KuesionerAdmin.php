<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class KuesionerAdmin extends Model
{
    
    protected $guarded =['id'];
    protected $with =['opd','author'];
    public function category()
    {
    return$this->belongsTo(Category::class);
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
        return 'category';
    }
   
}
