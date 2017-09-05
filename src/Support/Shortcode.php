<?php namespace Tukecx\Base\Shortcode\Support;

use Tukecx\Base\Shortcode\Compilers\ShortcodeCompiler;

/**
 * @author Webwizo - <https://github.com/webwizo/laravel-shortcodes>
 */
class Shortcode
{
    /**
     * Shortcode compiler
     *
     * @var ShortcodeCompiler
     */
    protected $compiler;

    /**
     * Constructor
     *
     * @param ShortcodeCompiler $compiler
     */
    public function __construct(ShortcodeCompiler $compiler)
    {
        $this->compiler = $compiler;
    }

    /**
     * Register a new shortcode
     *
     * @param  string          $name
     * @param  callable|string $callback
     *
     * @return \Tukecx\Base\Shortcode\Support\Shortcode
     */
    public function register($name, $callback)
    {
        $this->compiler->add($name, $callback);

        return $this;
    }

    /**
     * Compile the given string
     *
     * @param  string $value
     *
     * @return string
     */
    public function compile($value)
    {
        // return compiled contents
        return $this->compiler->compile($value);
    }

    public function strip($value)
    {
        return $this->compiler->strip($value);
    }
}
