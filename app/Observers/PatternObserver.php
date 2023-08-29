<?php

    namespace App\Observers;

    use App\Models\Pattern;
    use Illuminate\Support\Str;

    /**
     * @method attributes(string $string, $id)
     * @property $id
     */
    class PatternObserver
    {
        /**
         * Handle the Pattern "created" event.
         */
        public function creating(Pattern $pattern): void
        {
            $pattern->slug = Str::slug($pattern->name);
        }

        /**
         * Handle the Pattern "created" event.
         */
        public function updating(Pattern $pattern): void
        {

        }


    }
