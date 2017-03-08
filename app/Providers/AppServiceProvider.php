<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\User;
use App\Setting;
use App\Post;
use View;
use Session;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(){
        $post_hoiphucs = Post::whereIn('term_id',[28,29,30,31])->limit(6)->get();
        View::share('post_hoiphucs',$post_hoiphucs);
        View::share('setting',Setting::first());
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(){
        //
    }
}
