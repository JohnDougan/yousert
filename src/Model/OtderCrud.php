<?php


namespace Model;


use Fabric;

class OtderCrud implements CrudInterface
{
    private $db;
    public function __construct()
    {
        $this->db = Fabric::getDB();
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