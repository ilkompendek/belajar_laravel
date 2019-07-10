<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Request;

class mhsAppServiceProvider extends ServiceProvider
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
        $halaman ='';
        if(Request::segment(1) == 'mahasiswa'){
            $halaman = 'mahasiswa';
        }

        if(Request::segment(1) == 'about'){
            $halaman = 'about';
        } 

        if(Request::segment(1) == 'prodi'){
            $halaman = 'prodi';
        } 

        if(Request::segment(1) == 'user'){
            $halaman = 'user';
        }

        view()->share('halaman', $halaman);

    }
    
}
