<?php namespace Tukecx\Base\Shortcode\Renderer;

use Tukecx\Base\Shortcode\Renderer\Contracts\ShortcodeRendererContract;

abstract class AbstractShortcodeRenderer
{
    /**
     * @var array|null
     */
    protected $currentTheme;

    /**
     * @var mixed
     */
    protected $themeRenderer;

    /**
     * @param $type
     * @return mixed
     */
    public function getThemeRenderer($type)
    {
        if (!$this->currentTheme) {
            return null;
        }
        $controller = str_replace('\\\\', '\\', array_get($this->currentTheme, 'namespace') . '\Shortcode\\' . $type . 'Renderer');

        try {
            return app($controller);
        } catch (\Exception $exception) {
            return null;
        }
    }
}
