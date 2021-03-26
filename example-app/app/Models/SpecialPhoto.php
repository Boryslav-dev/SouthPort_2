<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialPhoto extends Model
{
    use HasFactory;

    protected $fillable = ['special_name', 'filename'];

    public function specials()
    {
        return $this->belongsTo('App\Model\Special');
    }
}
