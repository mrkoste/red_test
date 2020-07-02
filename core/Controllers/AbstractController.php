<?php

namespace RedT\Controllers;

use Brevis\Controller;
use Exception;
use RedT\Core;

abstract class AbstractController
{
    protected Core $core;

    public function __construct(Core $core)
    {
        $this->core = $core;

        $this->init();
    }

    public function init() {
        return true;
    }
    /**
     * Шаблонизация
     *
     * @param string $tpl Имя шаблона
     * @param array $data Массив данных для подстановки
     *
     * @return mixed|string
     */
    public function template($tpl, array $data = array())
    {
        $output = '';
        if (!preg_match('#\.tpl$#', $tpl)) {
            $tpl .= '.tpl';
        }
        if ($fenom = $this->core->getFenom()) {
            try {
                $output = $fenom->fetch($tpl, $data);
            } catch (Exception $e) {
                exit($e->getMessage());
            }
        }

        return $output;
    }

    abstract public function run();
}
