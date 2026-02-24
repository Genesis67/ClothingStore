<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Design extends Model
{
    
    use HasFactory;

    // These are the only fields Laravel will allow to be saved via Design::create()
    protected $fillable = [
        'design_Name', 
        'description', 
        'category', 
        'price',
        'fabric',
        'size',    ];

    /**
     * Relationship: One Design has many Images.
     */
    public function images(){
     return $this->hasMany(DesignImage::class);
    }
}
