<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Config\Paths;

class AboutController {

    private TemplateEngine $view;

    public function __construct(TemplateEngine $view) {
        $this->view = $view;
    }

    public function about() {
        echo $this->view->render("/about.php", [
            'title' => 'About Page New',
            'dangerousData' => '<script>alert(123)</script>'
        ]);
    }
}
