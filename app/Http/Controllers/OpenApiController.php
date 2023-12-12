<?php

    namespace App\Http\Controllers;

    use Illuminate\Support\Facades\Http;

    class OpenApiController extends Controller
    {

        public function __invoke()
        {
            return Http::withToken(config('services.openai.key'))->post('https://api.openai.com/v1/chat/completions', [
                "model" => "gpt-3.5-turbo",
                "messages" => [
                    [
                        "role" => "system",
                        "content" => "You are a poetic assistant, skilled in explaining complex programming concepts with creative flair."
                    ],
                    [
                        "role" => "user",
                        "content" => "Compose a poem that explains the concept of recursion in programming."
                    ]
                ]

            ]);
        }

    }
