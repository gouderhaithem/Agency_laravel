<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class announce extends Model
{
    use HasFactory;
    protected $table = "announces";
    protected $fillable = ['Category_id','title','roomnumber','surface','price','place','description',];
    function category(){
        return $this->belongsTo(category::class,'category_id','id');

    }
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
