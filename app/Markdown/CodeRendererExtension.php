<?php

namespace App\Markdown;

use Blade;
use League\CommonMark\Environment\EnvironmentBuilderInterface;
use League\CommonMark\Event\DocumentRenderedEvent;
use League\CommonMark\Extension\CommonMark\Node\Block\FencedCode;
use League\CommonMark\Node\Node;
use League\CommonMark\Renderer\ChildNodeRendererInterface;
use League\CommonMark\Extension\ExtensionInterface;
use League\CommonMark\Renderer\NodeRendererInterface;

class CodeRendererExtension implements ExtensionInterface, NodeRendererInterface
{
    public static $allowBladeForNextDocument = false;

    public function register(EnvironmentBuilderInterface $environment): void
    {
        $environment->addRenderer(FencedCode::class, $this, 100);

        $environment->addEventListener(DocumentRenderedEvent::class, [$this, 'onDocumentRenderedEvent']);
    }

    public function render(Node $node, ChildNodeRendererInterface $childRenderer)
    {
        if (!static::$allowBladeForNextDocument) {
            return;
        }

        /** @var $node FencedCode */

        $info = $node->getInfoWords();

        if (in_array('+parse', $info)) {
            return Blade::render($node->getLiteral());
        }
    }

    public function onDocumentRenderedEvent()
    {
        static::$allowBladeForNextDocument = false;
    }
}
