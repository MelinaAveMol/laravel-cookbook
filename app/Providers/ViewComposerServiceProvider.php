<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    
    {

        // $agent = new Agent();
        
        

        view()->composer( [
            'admin.pages.products.index'],
            'App\Http\ViewComposers\Admin\ProductCategories' 
            

        );

        // view()->composer( [
        //     'admin.pages.products.'],
        //     'App\Http\ViewComposers\Admin\ProductCategories' 
            

        // );
        // view()->composer( [
        //     'admin.pages.products.'],
        //     'App\Http\ViewComposers\Admin\ProductCategories' 
            

        // );
        // view()->composer( [
        //     'admin.pages.products.'],
        //     'App\Http\ViewComposers\Admin\ProductCategories' 
            

        // );



    }
    
}
