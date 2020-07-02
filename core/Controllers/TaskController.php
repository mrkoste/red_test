<?php

namespace RedT\Controllers;

use RedT\Models\TasksModel;

class TaskController extends AbstractController
{

    protected TasksModel $tasks;

    public function init() {
        $this->tasks = new TasksModel($this->core->pdo);
    }

    public function run()
    {
        if (isset($_POST['action']) && $_POST['action'] === 'addTask') {

            $this->addTask();
        } else if (isset($_POST['action']) && $_POST['action'] === 'removeTask') {
            $this->removeTask();
        } else {
            $this->core->ajaxResponse(false, 'Action not found');
        }

    }

    private function addTask()
    {
        $this->tasks->addNewTask($_POST['name']);
        $this->sendTaskList();
    }

    private function removeTask()
    {
        $this->tasks->deleteTask($_POST['id']);
        $this->sendTaskList();
    }

    private function sendTaskList()
    {
        $tasks = $this->tasks->getAllTasks();
        $template = "";
        foreach ($tasks as $task) {
            $template .= $this->template('_task', $task);
        }


        $this->core->ajaxResponse(true, '', ['content' => $template]);
    }
}
