<?php

declare(strict_types=1);

namespace App\Controller;

class CategoryController {
    public function listAction(): void
    {
        include dirname(__DIR__).'View/product/list.php';
    }
}