<?php


namespace Model;


use Fabric;

class OtderCrud implements CrudInterface
{
    private $db;
    private $route;
    public function __construct($route)
    {
        $this->db = Fabric::getDB();
        $this->route = $route;
    }

    public function load($id = null)
    {
        // TODO: Implement load() method.
    }

    public function create($data)
    {
        // TODO: Implement create() method.
    }

    public function update($id, $data)
    {
        // TODO: Implement update() method.
    }

    public function delete($ud)
    {
        // TODO: Implement delete() method.
    }
}