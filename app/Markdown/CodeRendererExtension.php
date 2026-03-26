<?php

namespace App\Markdown;

use League\CommonMark\Environment\EnvironmentBuilderInterface;
use League\CommonMark\Node\Node;
use League\CommonMark\Renderer\ChildNodeRendererInterface;
use League\CommonMark\Extension\ExtensionInterface;
use League\CommonMark\Renderer\NodeRendererInterface;

class CodeRendererExtension implements ExtensionInterface, NodeRendererInterface
{
    public function register(EnvironmentBuilderInterface $environment): void {}

    public function render(
        Node $node,
        ChildNodeRendererInterface $childRenderer,
    ) {}
}
