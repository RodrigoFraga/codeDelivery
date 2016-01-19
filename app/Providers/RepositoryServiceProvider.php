<?php

namespace CodeDelivery\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'CodeDelivery\Repositories\CategoriaRepository',
            'CodeDelivery\Repositories\CategoriaRepositoryEloquent'
        );

        $this->app->bind(
            'CodeDelivery\Repositories\ClienteRepository',
            'CodeDelivery\Repositories\ClienteRepositoryEloquent'
        );

        $this->app->bind(
            'CodeDelivery\Repositories\OrderRepository',
            'CodeDelivery\Repositories\OrderRepositoryEloquent'
        );

        $this->app->bind(
            'CodeDelivery\Repositories\OrderItemRepository',
            'CodeDelivery\Repositories\OrderItemRepositoryEloquent'
        );

        $this->app->bind(
            'CodeDelivery\Repositories\ProdutoRepository',
            'CodeDelivery\Repositories\ProdutoRepositoryEloquent'
        );

        $this->app->bind(
            'CodeDelivery\Repositories\UserRepository',
            'CodeDelivery\Repositories\UserRepositoryEloquent'
        );
    }
}
