<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Casts\Attribute;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Support\Str;
    use Spatie\Sluggable\HasSlug;
    use Spatie\Sluggable\SlugOptions;

    class Post extends Model
    {
        use HasSlug;

        protected $fillable = [
            "title",
            "slug",
            "excerpt",
            "body",
            "hero",
            "live",
            "user_id"
        ];


        /**
         * Get the options for generating the slug.
         */
        public function getSlugOptions(): SlugOptions
        {
            return SlugOptions::create()
                ->generateSlugsFrom('title')
                ->saveSlugsTo('slug')
                ->slugsShouldBeNoLongerThan(70);
        }

        /**
         * @return BelongsTo
         */
        public function user(): BelongsTo
        {
            return $this->belongsTo(User::class);
        }


        /**
         * @return Attribute
         */
        protected function html(): Attribute
        {
            return Attribute::get(fn($value, $attribute) => Str::of($attribute['body'])->markdown());
        }

    }
