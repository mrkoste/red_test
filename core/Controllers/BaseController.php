<?php

namespace RedT\Controllers;

use RedT\Models\TasksModel;

class BaseController extends AbstractController
{

    public function run() :string
    {
        $tasks = new TasksModel($this->core->pdo);
        $tasks = $tasks->getAllTasks();

        $data = [
            'tasks' => $tasks
        ];

        return $this->template('index', $data);
    }
}
