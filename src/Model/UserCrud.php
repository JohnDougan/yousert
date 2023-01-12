<?php


namespace Model;


use Fabric;

class UserCrud implements CrudInterface
{
    private $db;
    public function __construct()
    {
        $this->db = Fabric::getDB();
    }

    public function load($data)
    {
        if(isset($data['id'])) $out = $this->db->executeQuery("SELECT * FROM users WHERE id = :id", $data);
        elseif(isset($data['section'])) $out = $this->db->executeQuery("SELECT * FROM users WHERE section = :section", $data);

        return $out->fetchAllAssociative();
    }

    public function update($data)
    {
        // TODO: Implement update() method.
    }

    public function delete($data)
    {
        // TODO: Implement delete() method.
    }
}