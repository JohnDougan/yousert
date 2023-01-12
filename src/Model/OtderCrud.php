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

    public function load($data)
    {
        $tree = [];
        if($data['type'] == 'tree') {
            $query = $this->db->executeQuery("SELECT * FROM sections WHERE parent IS NULL");
            while($row = $query->fetchAssociative()) {
                $tree[$row['id']] = $this->getSectionArray($row);
            }
            return $tree;
        } elseif ($data['type'] == 'childs') {
            $query = $this->db->executeQuery("SELECT * FROM sections WHERE parent = :id", $data);
            while($row = $query->fetchAssociative()) {
                $tree[$row['id']] = $this->getSectionArray($row);
            }
            return $tree;
        } elseif ($data['type'] == 'single') {
            $query = $this->db->executeQuery("SELECT * FROM sections WHERE id = :id", $data);
            return $query->fetchAssociative();
        }

    }

    public function update($data)
    {
        if(!$data['id']) return false;

        if($data['id'] == 'new') {
            $this->db->executeQuery("INSERT INTO sections SET title = :title", $data);
            $data['id'] = $this->db->lastInsertId();
        } else {
            $this->db->executeQuery("UPDATE sections SET title = :title WHERE id = :id", $data);
        }
        if($data['sub']) $this->db->executeQuery("UPDATE sections SET parent = :parent WHERE id = :id", $data);
        return $data['id'];
    }

    public function delete($data)
    {
        // TODO: Implement delete() method.
    }

    private function getSectionArray($row)
    {
        $users = Fabric::getUserCrud();
        return [
            'id' => $row['id'],
            'title' => $row['title'],
            'director' => $row['director']?$users->load(['id'=>$row['director']]):null,
            'users' => $users->load(['section'=>$row['id']]),
            'subsections' => $this->load(['type'=>'childs','id'=>$row['id']])
        ];
    }

}