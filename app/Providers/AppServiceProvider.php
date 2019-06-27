<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Libs as Libs;
use DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        DB::connection()->setQueryGrammar(new Libs\GrammarCorrect());
        // DB::connection()->setQueryBuilder(new Libs\BuilderCorrect());
    }
}
