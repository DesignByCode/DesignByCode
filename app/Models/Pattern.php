<?php

    namespace App\Models;

    use App\Models\Traits\Observable;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Pattern extends Model
    {
        use HasFactory, Observable;

        protected $fillable = [
            "name",
            "slug",
            "snippet",
            "keywords"
        ];


    }
