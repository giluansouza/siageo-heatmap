<?php

namespace DevBoot\Controller;

use League\Plates\Engine;

class HomeController implements Controller
{
    public function processRequest(): void
    {
        //Create new Plates instance
        $templates = new Engine(__DIR__.'/../../views');
        // Render a template
        echo $templates->render('home', ['name' => 'Jonathan']);
    }
}
