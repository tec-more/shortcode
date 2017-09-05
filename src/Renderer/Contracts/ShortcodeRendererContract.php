<?php namespace Tukecx\Base\Shortcode\Renderer\Contracts;

interface ShortcodeRendererContract
{
    /**
     * @var \Tukecx\Base\Shortcode\Compilers\Shortcode $shortcode
     * @var string $content
     * @var \Tukecx\Base\Shortcode\Compilers\ShortcodeCompiler $compiler
     * @var string $name
     */
    public function handle($shortcode, $content, $compiler, $name);
}
