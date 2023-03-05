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
      if (Schema::hasTable('roles'))
        {
          
          $roles  = Role::all();
          $resources = Resource::with('roles')->get();    
            foreach($resources as $resource){
                  
                    Gate::define( $resource->resource ,function($user) use ($resource){
                      return  $user->hasResource($resource);   
                    });
        
            }
            
      
    }

  }
}
