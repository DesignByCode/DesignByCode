<?php

    namespace App\Providers;

    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Pagination\Paginator;
    use Illuminate\Support\Collection;
    use Illuminate\Support\Facades\Schema;
    use Illuminate\Support\ServiceProvider;
    use Illuminate\Support\Str;
    use MallardDuck\HtmlFormatter\Formatter;

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
        public function boot(): void
        {
            Schema::defaultStringLength(191);

            Collection::macro('paginate', function (int $perPage = 10, $page = null, array $options = []) {
                $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
                $paginator = new LengthAwarePaginator(
                    $this->forPage($page, $perPage),
                    $this->count(),
                    $perPage,
                    $page,
                    $options
                );
                return $paginator->setPath(request()->url);
            });


            Str::macro('beautify', function (string $input) {
                $formatter = new Formatter();
                $formatter->setConfig([
                    'tab' => "  "
                ]);
                return $formatter->beautify($input);
            });

            Str::macro('minify', function (string $input) {
                $formatter = new Formatter();
                return $formatter->minify($input);
            });


        }
    }
