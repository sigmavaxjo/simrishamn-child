<?php

namespace Simrishamn\Theme;

class Template
{
    /**
     * Constructor.
     */
    public function __construct()
    {
        add_filter('theme_page_templates', array($this, 'filter'), 20, 1);
    }

    /**
     * Filters the list of available templates.
     *
     * @param array $templates The list of available templates.
     *
     * @return array A filtered list of templates.
     */
    public function filter($templates)
    {
        unset($templates['one-page.blade.php']);
        $templates['full-width.blade.php'] = 'Fullbredd';

        return $templates;
    }
}
