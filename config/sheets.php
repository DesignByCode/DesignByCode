<?php

return [
    'default_collection' => null,

    'collections' => [

        'packages' => [
            'disk' => 'packages',
            'sheet_class' => App\Sheets\Package::class,
            'path_parser' => Spatie\Sheets\PathParsers\SlugWithDateParser::class,
            'content_parser' => Spatie\Sheets\ContentParsers\MarkdownWithFrontMatterParser::class,
            'extension' => 'md',
        ],


        /* An example collection. All keys are optional.

        'posts' => [
            'disk' => 'posts',
            'sheet_class' => App\Post::class,
            'path_parser' => Spatie\Sheets\PathParsers\SlugWithDateParser::class,
            'content_parser' => Spatie\Sheets\ContentParsers\MarkdownParser::class,
            'extension' => 'txt',
        ], */
    ],
];
