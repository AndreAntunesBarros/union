<?php

namespace App\Providers;
use Illuminate\Support\Facades\Gate;
use App\Models\Role;

use App\Models\Resource;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
      /* if(!Schema::hasTable('resources')) {
        
            return false;

       }; */ // evitar erro ao usar migrate:refresh
       
        $roles  = Role::all();
        $resources = Resource::with('roles')->get();
        
     
       // dd($resources);
            foreach($resources as $resource){
                  
                    Gate::define( $resource->resource ,function($user) use ($resource){
                      return  $user->hasResource($resource);   
                    });
        
            }
            
            //dd(Gate::abilities());
       
 
       
     //  dd(Gate::abilities());
    }
}
