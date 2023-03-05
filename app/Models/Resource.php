<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
class Resource extends Model
{
    use HasFactory;
    protected $fillable = ['name','is_menu','resource','ativo','tabela_id'];

    public function roles(){

        return  $this->belongsToMany(Role::class);
    }

    public function selectResources(){
        
        $resource = $this::all()->where('ativo', '=', '1');
        $resource_lista = $resource->pluck('name','id');
      
     
        return  $resource_lista;
        
       

    }
    
    
}
