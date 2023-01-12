<?php


namespace Model;


interface CrudInterface
{
    public function load($data);
    public function update($data);
    public function delete($data);
}