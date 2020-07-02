<?php
declare(strict_types=1);

namespace RedT\Models;

class Log extends AbstractModel
{
    public function addLog(string $taskId,string $action)
    {
        $sql = "INSERT INTO `log` (`createdon`, `ip`, `task_id`, `action`) VALUES (:createdon, :ip, :task_id, :action)";

        $createdon = time();
        $ip = ip2long($_SERVER['REMOTE_ADDR']);
        $statement = $this->pdo->prepare($sql);
        $statement->bindValue(':createdon', $createdon);
        $statement->bindValue(':ip', $ip);
        $statement->bindValue(':task_id', $taskId);
        $statement->bindValue(':action', $action);
        $inserted = $statement->execute();

        return $inserted;
    }
}
