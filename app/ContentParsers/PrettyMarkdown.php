<?php

    namespace App\ContentParsers;

    class PrettyMarkdown extends MarkdownWithFrontMatterParser
    {
        public function __construct()
        {
            parent::__construct();
//            $this->environment->addExtension(new TableOfContentsExtension());
//            $this->environment->addExtension(new BladeComponentsExtension());
        }

    }
