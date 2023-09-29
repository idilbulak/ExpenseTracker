<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Config\Paths;

class AuthController {

    private TemplateEngine $view;

    public function __construct(TemplateEngine $view) {
        $this->view = $view;
    }

    public function registerView() {
        echo $this->view->render("/register.php");
    }
}
