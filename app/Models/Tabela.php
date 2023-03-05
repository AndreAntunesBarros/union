<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Resource;


class Tabela extends Model
{
    use HasFactory;
    public function resources(){
        return $this->hasMany(Resource::class);
    }
}
