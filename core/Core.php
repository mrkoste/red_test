<?php
declare(strict_types=1);

namespace RedT;

use Exception;
use Fenom;
use PDO;
use RedT\Controllers\AbstractController;
use RedT\Controllers\TaskController;
use RedT\Controllers\BaseController;

class Core
{
    public Pdo $pdo;
    private $fenom;

    public bool $isAjax = false;

    /**
     * Конструктор класса
     *
     */
    function __construct()
    {
        $config = dirname(__FILE__) . "/config/config.php";
        if (file_exists($config)) {
            require $config;

            try {
                $dsn = "mysql:host=$database_host;dbname=$database_name;charset=$database_charset";
                $opt = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ];
                $this->pdo = new PDO($dsn, $database_user, $database_password, $opt);
            } catch (Exception $e) {
                exit($e->getMessage());
            }
        } else {
            exit('Не могу загрузить файл конфигурации');
        }
    }

    public function handle()
    {
        $this->isAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest';

        $controllerName = $this->isAjax ? 'Task' : 'Base';
        $controllerName = 'RedT\Controllers\\' . $controllerName . 'Controller';

        /** @var BaseController|TaskController $controller */
        $controller = new $controllerName($this);

        $response = $controller->run();

        echo $response;
    }

    /**
     * Получение шаблонизатора
     *
     * @return bool|Fenom
     */
    public function getFenom() :Fenom
    {
        if (!$this->fenom) {
            try {
                if (!file_exists(PROJECT_CACHE_PATH)) {
                    mkdir(PROJECT_CACHE_PATH);
                }
                $this->fenom = Fenom::factory(PROJECT_TEMPLATES_PATH, PROJECT_CACHE_PATH, PROJECT_FENOM_OPTIONS);
            }
            catch (Exception $e) {
                exit($e->getMessage());
            }
        }

        return $this->fenom;
    }

    /**
     * Вывод ответа в установленном формате для всех Ajax запросов
     *
     * @param bool|true $success
     * @param string $message
     * @param array $data
     */
    public function ajaxResponse($success = true, $message = '', array $data = array()) {
        $response = array(
            'success' => $success,
            'message' => $message,
            'data' => $data,
        );

        exit(json_encode($response));
    }
}
