<?php

    namespace App\Providers;

    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\ServiceProvider;
    use Spatie\Sheets\Sheets;

    class SheetPackagistServiceProvider extends ServiceProvider
    {
        /**
         * Register services.
         */
        public function register(): void
        {
            //
        }

        /**
         * Bootstrap services.
         */
        public function boot(): void
        {
            Route::bind('packagist', function ($slug) {
                return $this->app->make(Sheets::class)
                    ->collection('packagist')
                    ->all()
                    ->where('slug', $slug)
                    ->first() ?? abort(404);
            });
        }
    }
