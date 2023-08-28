<?php

    namespace App\ContentParsers;

    use Illuminate\Support\HtmlString;
    use League\CommonMark\Environment\Environment;
    use League\CommonMark\Extension\Autolink\AutolinkExtension;
    use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
    use League\CommonMark\Extension\DisallowedRawHtml\DisallowedRawHtmlExtension;
    use League\CommonMark\Extension\HeadingPermalink\HeadingPermalinkExtension;
    use League\CommonMark\Extension\Strikethrough\StrikethroughExtension;
    use League\CommonMark\Extension\Table\TableExtension;
    use League\CommonMark\Extension\TaskList\TaskListExtension;
    use League\CommonMark\MarkdownConverter;
    use Spatie\Sheets\ContentParser;
    use Spatie\YamlFrontMatter\YamlFrontMatter;

    class MarkdownWithFrontMatterParser implements ContentParser
    {

        private MarkdownConverter $commonMarkConverter;

        public function __construct()
        {
            $config = [
//                'embed' => [
//                    'adapter' => new OscaroteroEmbedAdapter(), // See the "Adapter" documentation below
//                    'allowed_domains' => ['youtube.com', 'twitter.com', 'github.com'],
//                    'fallback' => 'link',
//                ],
                'table' => [
                    'wrap' => [
                        'enabled' => true,
                        'tag' => 'div',
                        'attributes' => [],
                    ],
                    'alignment_attributes' => [
                        'left' => ['align' => 'left'],
                        'center' => ['align' => 'center'],
                        'right' => ['align' => 'right'],
                    ],
                ],
                'heading_permalink' => [
                    'html_class' => 'heading-permalink',
                    'id_prefix' => 'content',
                    'apply_id_to_heading' => true,
                    'heading_class' => '',
                    'fragment_prefix' => 'content',
                    'insert' => 'before',
                    'min_heading_level' => 1,
                    'max_heading_level' => 6,
                    'title' => 'Permalink',
                    'symbol' => "#",
                    'aria_hidden' => true,
                ],
            ];

            $environment = new Environment($config);
            $environment->addExtension(new CommonMarkCoreExtension());

            $environment->addExtension(new HeadingPermalinkExtension());
            $environment->addExtension(new AutolinkExtension());
            $environment->addExtension(new DisallowedRawHtmlExtension());
            $environment->addExtension(new StrikethroughExtension());
            $environment->addExtension(new TableExtension());
            $environment->addExtension(new TaskListExtension());

//            $environment->addExtension(new EmbedExtension());

            $this->commonMarkConverter = new MarkdownConverter($environment);
        }

        public function parse(string $contents): array
        {
            $document = YamlFrontMatter::parse($contents);

            $htmlContents = $this->commonMarkConverter->convertToHtml($document->body());

            return array_merge(
                $document->matter(),
                ['contents' => new HtmlString($htmlContents)]
            );
        }
    }
