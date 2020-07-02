<?php
declare(strict_types=1);

namespace RedT\Models;

class TasksModel extends AbstractModel
{
    protected Log $log;

    protected function init()
    {
        $this->log = new Log($this->pdo);
    }
    public function getTasksList() {

    }

    public function addNewTask(string $name) :bool
    {
        $sql = "INSERT INTO `tasks` (`name`) VALUES (:name)";

        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(':name', $name);
        $inserted = $statement->execute();

        if($inserted) {
            $this->log->addLog($this->pdo->lastInsertId(),'addTask');
        }
        return $inserted;
    }

    public function deleteTask($id) {
        $sql = "DELETE FROM `tasks` WHERE `id` = :id";

        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(':id', $id);
        $deleted = $statement->execute();

        if($deleted) {
            $this->log->addLog($id,'deleteTask');
        }
        return $deleted;
    }

    public function getAllTasks() {
        $sql = "SELECT * FROM `tasks`";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();

        return $statement->fetchAll();
    }
}
