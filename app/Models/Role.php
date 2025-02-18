<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\Resource;
class Role extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name','role'];

    public function users(){
        return $this->hasMany(User::class);
    }

    public function resources(){

        return  $this->belongsToMany(Resource::class);
    }

    public function resourcesIds(){

        $resource = $this::resources();
        $resource_lista = $resource->pluck('id');

        return  $resource_lista;

    }
}
