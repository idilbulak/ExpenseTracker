<?php

declare(strict_types=1);

namespace Framework;

class Router {
    private array $routes = [];

    public function add(string $method, string $path) {
        $this->routes[] = [
            'path' => $this->normalizePath($path),
            'method' => strtoupper($method)
        ];
    }

    private function normalizePath(string $path) : string {
        $path = trim($path, '/');
        return preg_replace('#[/]{2,}#', '/', "/{$path}/");
    }
}