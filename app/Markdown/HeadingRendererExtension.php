<?php

namespace App\Markdown;

use Illuminate\Support\Facades\Blade;
use League\CommonMark\Environment\EnvironmentBuilderInterface;
use League\CommonMark\Extension\CommonMark\Node\Block\Heading;
use League\CommonMark\Extension\CommonMark\Node\Block\IndentedCode;
use League\CommonMark\Extension\ExtensionInterface;
use League\CommonMark\Node\Node;
use League\CommonMark\Renderer\ChildNodeRendererInterface;
use League\CommonMark\Renderer\NodeRendererInterface;

class HeadingRendererExtension implements ExtensionInterface, NodeRendererInterface
{
    public function register(EnvironmentBuilderInterface $environment): void
    {
        $environment->addRenderer(Heading::class, $this, 100);
        // $environment->addRenderer(IndentedCode::class, $this, 100);

    }

    public function render(Node $node, ChildNodeRendererInterface $childRenderer)
    {
        /** @var Heading $node */
        $level = $node->getLevel();
        $content = $childRenderer->renderNodes($node->children());

        return Blade::render("<x-ui.h{$level}>{$content}</x-ui.h{$level}>");
    }
}
