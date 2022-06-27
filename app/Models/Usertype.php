<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Usertype extends Model
{
    use HasFactory;

    public function Users(){
        return $this->hasMany(User::class);
    }
}
