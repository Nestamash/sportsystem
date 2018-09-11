<?php

namespace App\Providers;

use App\Comments;
use App\Http\Controllers\Post_commentController;
use App\Reply;
use Illuminate\Support\ServiceProvider;
use View;
use Auth;


use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
