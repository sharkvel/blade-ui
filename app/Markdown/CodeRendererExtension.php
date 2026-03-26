<?php

namespace App\Markdown;

use League\CommonMark\Extension\ExtensionInterface;
use League\CommonMark\Renderer\NodeRendererInterface;

class CodeRendererExtension implements ExtensionInterface, NodeRendererInterface
{
    public function register(\League\CommonMark\Environment\EnvironmentBuilderInterface $environment): void {}

    public function render(
        \League\CommonMark\Node\Node $node,
        \League\CommonMark\Renderer\ChildNodeRendererInterface $childRenderer,
    ) {}
}
