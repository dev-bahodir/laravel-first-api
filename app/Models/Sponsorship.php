<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsorship extends Model
{
    use HasFactory;
    protected $table = 'sponsorship';
    public function splash(){
        return $this->belongsTo(Splash::class);
    }
    public function sponsor() {
        return $this->hasMany(Sponsor::class,'sponsorship_id','id');
    }
}
