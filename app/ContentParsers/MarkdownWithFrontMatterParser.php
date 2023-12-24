<?php

    namespace App\ContentParsers;

    use Embed\Embed;
    use Illuminate\Support\HtmlString;
    use League\CommonMark\Environment\Environment;
    use League\CommonMark\Extension\Attributes\AttributesExtension;
    use League\CommonMark\Extension\Autolink\AutolinkExtension;
    use League\CommonMark\Extension\CommonMark\CommonMarkCoreExtension;
    use League\CommonMark\Extension\DescriptionList\DescriptionListExtension;
    use League\CommonMark\Extension\DisallowedRawHtml\DisallowedRawHtmlExtension;
    use League\CommonMark\Extension\Embed\Bridge\OscaroteroEmbedAdapter;
    use League\CommonMark\Extension\Footnote\FootnoteExtension;
    use League\CommonMark\Extension\HeadingPermalink\HeadingPermalinkExtension;
    use League\CommonMark\Extension\Mention\MentionExtension;
    use League\CommonMark\Extension\Strikethrough\StrikethroughExtension;
    use League\CommonMark\Extension\Table\TableExtension;
    use League\CommonMark\Extension\TaskList\TaskListExtension;
    use League\CommonMark\MarkdownConverter;
    use Spatie\Sheets\ContentParser;
    use Spatie\YamlFrontMatter\YamlFrontMatter;

    class MarkdownWithFrontMatterParser implements ContentParser
    {

        public Environment $environment;
        private MarkdownConverter $commonMarkConverter;

        public function __construct()
        {
            $config = [
                'embed' => [
                    'adapter' => new OscaroteroEmbedAdapter(), // See the "Adapter" documentation below
                    'allowed_domains' => ['youtube.com', 'twitter.com', 'github.com'],
                    'fallback' => 'link',
                ],
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
                'table_of_contents' => [
                    'html_class' => 'table-of-contents',
                    'position' => 'top',
                    'style' => 'bullet',
                    'min_heading_level' => 1,
                    'max_heading_level' => 3,
                    'normalize' => 'relative',
                    'placeholder' => null,
                ],
                'footnote' => [
                    'backref_class' => 'footnote-backref',
                    'backref_symbol' => '↩',
                    'container_add_hr' => true,
                    'container_class' => 'footnotes',
                    'ref_class' => 'footnote-ref',
                    'ref_id_prefix' => 'fnref:',
                    'footnote_class' => 'footnote',
                    'footnote_id_prefix' => 'fn:',
                ],
                'mentions' => [
                    'github_handle' => [
                        'prefix' => '@',
                        'pattern' => '[a-z\d](?:[a-z\d]|-(?=[a-z\d])){0,38}(?!\w)',
                        'generator' => 'https://github.com/%s',
                    ],
                    'twitter_handle' => [
                        'prefix' => '@',
                        'pattern' => '[A-Za-z0-9_]{1,15}(?!\w)',
                        'generator' => 'https://twitter.com/%s',
                    ],
                ]
            ];

            $embedLibrary = new Embed();
            $embedLibrary->setSettings([
                'oembed:query_parameters' => [
                    'maxwidth' => 800,
                    'maxheight' => 600,
                ]
            ]);


            $this->environment = new Environment($config);
            $this->environment->addExtension(new CommonMarkCoreExtension());

            $this->environment->addExtension(new AttributesExtension());
            $this->environment->addExtension(new AutolinkExtension());
            $this->environment->addExtension(new DescriptionListExtension());
            $this->environment->addExtension(new DisallowedRawHtmlExtension());
            $this->environment->addExtension(new FootnoteExtension());
            $this->environment->addExtension(new HeadingPermalinkExtension());
            $this->environment->addExtension(new StrikethroughExtension());
            $this->environment->addExtension(new TableExtension());
//            $this->environment->addExtension(new TableOfContentsExtension());
            $this->environment->addExtension(new TaskListExtension());
            $this->environment->addExtension(new MentionExtension());
            $this->commonMarkConverter = new MarkdownConverter($this->environment);
        }

        public function parse(string $contents): array
        {
            $document = YamlFrontMatter::parse($contents);

            $htmlContents = $this->commonMarkConverter->convert($document->body())->getContent();

            return array_merge(
                $document->matter(),
                ['contents' => new HtmlString($htmlContents)]
            );
        }


    }
