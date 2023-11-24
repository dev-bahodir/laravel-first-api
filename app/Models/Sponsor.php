<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    use HasFactory;
    protected $table = 'sponsor';
    public function social(){
        return $this->hasMany(Social::class,'sponsor_id','id');
    }
    public function sponsorship() {
        return $this->belongsTo(Sponsorship::class);
    }
}
