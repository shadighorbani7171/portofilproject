<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserExperience extends Model
{
    use HasFactory;
    protected $gaurded =['id'];
  

    public function users() {
        return $this->belongsTo(User::class);
    }
}
