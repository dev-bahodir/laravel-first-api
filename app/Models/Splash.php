<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Splash extends Model
{
    use HasFactory;
    protected $table = 'splash';
    public function urls(){
        return $this->hasMany(Urls::class,'splash_id','id');
    }
    public function sponsorship() {
        return $this->hasMany(Sponsorship::class,'splash_id','id');
    }
}
