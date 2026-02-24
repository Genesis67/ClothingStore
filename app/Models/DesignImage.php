<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DesignImage extends Model
{
    //
    // Important: Include design_id so Laravel can link it back
    protected $fillable = ['design_id', 'img_path'];

    public function design(){
        return $this->belongsTo(Design::class);
    }
}
