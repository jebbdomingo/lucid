<?php
namespace Directory\Foundation\Providers;

use Caffeinated\Modules\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;

class RouteServiceProvider extends ServiceProvider
{
	/**
     * This is the service folder name.
     *
     * @var string
     */
    protected $serviceName = '';
    /**
     * Define the routes for the module.
     *
     * @param \Illuminate\Routing\Router $router
     */
    public function map(Router $router)
    {
        $namespace = config('modules.namespace').$this->serviceName.'\Http\Controllers';
        $router->group(['namespace' => $namespace], function ($router) {
            $routesFile = config('modules.path').'/'.$this->serviceName.'/Http/routes.php';
            if (file_exists($routesFile)) {
                require $routesFile;
            }
        });
    }
}
