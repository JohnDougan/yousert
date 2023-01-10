<?php


namespace Model;


interface CrudInterface
{
    public function load($id = null);
    public function create($data);
    public function update($id, $data);
    public function delete($ud);
}