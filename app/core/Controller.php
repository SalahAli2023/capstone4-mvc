<?php

class Controller {
    protected function view($view, $data = []) {
        extract($data);
                
        $viewFile = __DIR__ . "/../views/{$view}.php";

        if (file_exists($viewFile)) {
            require_once $viewFile;
        } else {
            throw new Exception("View file not found: {$view}");
        }
    }
}