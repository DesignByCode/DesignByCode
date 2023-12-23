<?php

    namespace App\Models;

    use App\Models\Traits\Observable;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Spatie\Sluggable\HasSlug;
    use Spatie\Sluggable\SlugOptions;

    class Post extends Model
    {
        use HasFactory, Observable, HasSlug;

        protected $fillable = ['title', 'excerpt', 'body'];

        public function user(): BelongsTo
        {
            return $this->belongsTo(User::class);
        }

        /**
         * Get the options for generating the slug.
         */
        public function getSlugOptions(): SlugOptions
        {
            return SlugOptions::create()
                ->generateSlugsFrom('title')
                ->saveSlugsTo('slug')
                ->slugsShouldBeNoLongerThan(50);
        }


    }
