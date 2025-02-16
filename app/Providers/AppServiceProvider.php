<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use Illuminate\Contracts\Events\Dispatcher;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(Dispatcher $events): void
    {
        Paginator::useBootstrapFour();

        //menu do template adminlte

        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {


            $event->menu->add([
                'header' => 'Menu ',
                ]);

            $event->menu->add([
                'text'      =>      'Dashboard',
                'url'     =>      '/dashboard',
                'icon'          => ' fa fa-home',
            ]);
            $event->menu->add([
                'text'      =>      'Cadastros',
                'route'     =>      'users.index',
                'icon'          => ' fa fa-clipboard',


                'submenu'   =>  [
                    // [
                    //     'text'      =>      'Perfis',
                    //     'route' => ['users.show', ['user' => 100]],
                    //     'can'     =>      'users.show',
                    //     'icon'          => ' fa fa-user',

                    // ],
                    [
                        'text'      =>      'Usuários',
                        'route'     =>      'users.index',
                        'can'     =>      'users.index',
                        'icon'          => ' fa fa-users',
                        'active'        => ['users/create','users/*/edit' ],

                    ],
                    [
                        'text'      =>      'Funções',
                        'route'     =>      'roles.index',
                        'can'     =>      'roles.index',
                        'icon'          => ' fa fa-cogs',
                        'active'        => ['roles/create','roles/*/edit' ],

                    ]
                ]

            ]);


        });

    }
}
