<?php

    namespace App\ContentParsers\Extension;

    use League\CommonMark\Environment\EnvironmentBuilderInterface;
    use League\CommonMark\Extension\CommonMark\Node\Block\FencedCode;
    use League\CommonMark\Extension\CommonMark\Node\Block\IndentedCode;
    use League\CommonMark\Extension\ExtensionInterface;
    use League\CommonMark\Node\Node;
    use League\CommonMark\Renderer\ChildNodeRendererInterface;
    use League\CommonMark\Renderer\NodeRendererInterface;

    final class BladeComponentsExtension implements ExtensionInterface, NodeRendererInterface
    {

        public function register(EnvironmentBuilderInterface $environment): void
        {

            $environment->addRenderer(FencedCode::class, $this, 100);
            $environment->addRenderer(IndentedCode::class, $this, 100);

        }

        public function render(Node $node, ChildNodeRendererInterface $childRenderer): void
        {
            /** @var $node IndentedCode | FencedCode */

        }
    }
