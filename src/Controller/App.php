<?php


namespace Controller;


use Fabric;

class App
{
    private \Doctrine\DBAL\Connection $db;

    // ЧПУ путь в массиве
    private array $route;

    public function __construct()
    {
        $this->db = Fabric::getDB();
        $this->route = explode("/", $_SERVER['QUERY_STRING']);
    }

    private function actionIndex()
    {

        require_once(\Config::viewsPath().'index.php');
    }

    private function actionAjax()
    {
        $route = $this->route;
        array_shift($route);

        switch($route[0]) {
            case 'otdel':
                $data = Fabric::getOtdelCrud();
                break;
            case 'user':
                $data = Fabric::getUserCrud();
                break;
        }




        // TODO
        return true;
    }































    public function run()
    {
        // Запуск приложения

        // Определяем модуль и передаем управление
        if (isset($this->route[0])  && !empty($this->route[0])) {
            $methodName = 'action'.ucfirst($this->route[0]);
            if(method_exists($this, $methodName)) $this->$methodName();
            else $this->actionIndex();
        }
        else $this->actionIndex();
    }

}