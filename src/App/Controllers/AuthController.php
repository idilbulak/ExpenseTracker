<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
//use App\Config\Paths;
use App\Services\{ValidatorService};

class AuthController {

    private TemplateEngine $view;
    private ValidatorService $validatorService;

    public function __construct(TemplateEngine $view, ValidatorService $validatorService) {
        $this->view = $view;
        $this->validatorService = $validatorService;
    }

    public function registerView() {
        echo $this->view->render("/register.php");
    }

    public function register() {
        $this->validatorService->validateRegister($_POST);
    }
}
