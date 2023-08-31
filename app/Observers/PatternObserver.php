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
            $randomString = Str::uuid();
            $pattern->slug = Str::slug($pattern->name);
            $pattern->snippet = str_replace("[random]", $randomString, $pattern->snippet);
        }

        /**
         * Handle the Pattern "created" event.
         */
        public function updating(Pattern $pattern): void
        {

        }


    }
