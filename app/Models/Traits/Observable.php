<?php

    namespace App\Models\Traits;

    use Illuminate\Support\Facades\Log;

    trait Observable
    {
        public static function bootObservable()
        {
            $observer = '\\App\\Observers\\' . class_basename(get_called_class()) . 'Observer';
            try {
                // @phpstan-ignore-next-line
                (new static)->registerObserver($observer);
            } catch (ObserverException $e) {
                Log::alert($e->getMessage());
            }
        }


    }
