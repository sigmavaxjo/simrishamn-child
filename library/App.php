<?php
namespace Simrishamn;

class App
{
    public function __construct()
    {
        new \Simrishamn\Theme\AdminBar();
        new \Simrishamn\Theme\Customizer();
        new \Simrishamn\Theme\DefaultModules();
        new \Simrishamn\Theme\Enqueue();
        new \Simrishamn\Theme\Language();
        new \Simrishamn\Theme\AcfFields\Acf();
        new \Simrishamn\Theme\Modularity();
        new \Simrishamn\Theme\Style();
        new \Simrishamn\Theme\Template();
        new \Simrishamn\Theme\TinyMCE();
        new \Simrishamn\Theme\GlobalNotice();
        new \Simrishamn\Theme\Login();
    }
}
