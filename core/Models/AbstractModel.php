<?php
declare(strict_types=1);

namespace RedT\Models;

use Pdo;

abstract class AbstractModel
{
    protected Pdo $pdo;

    public function __construct(Pdo $pdo)
    {
        $this->pdo = $pdo;
        $this->init();
    }

    protected function init()
    {
        return true;
    }
}
