<?php

namespace App\Controller;


abstract class Controller  {

    protected function render($variables, $classTemplate) {
        $tempTemplate = explode( '\\', $classTemplate);
        $template = $tempTemplate[0].substr(null, -10);
        ob_start();
        extract($variables);
        ob_get_clean();
        if ($template == 'App') {
            $template = substr($tempTemplate[2],0, -10);
            Require_once ROOT.'/App/Views/'.$template.'.php';
        }       
        Require_once ROOT.'/App/Views/'.$template.'.php';
    }
}