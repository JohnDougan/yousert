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
        if(isset($data['id'])) {
            $out = $this->db->executeQuery("SELECT * FROM users WHERE id = :id", $data);
            $out = $out->fetchAssociative();
            $out['section'] = Fabric::getOtdelCrud()->load(['id'=>$out['section'],'type'=>'single']);
            $out['director'] = $out['section']['director']==$out['id'] ? 1 : 0;
            $out['socials'] = $this->getSocials($out['id']);

            return $out;
        } elseif(isset($data['section'])) {
            $out = $this->db->executeQuery("SELECT * FROM users WHERE section = :section", $data);
            return $out->fetchAllAssociative();
        }
        return null;
    }

    public function update($data)
    {
        print_r($data);
        if($data['id'] == 'new') {
            $this->db->executeQuery("INSERT INTO `users` SET 
                `section` = :section,
                `fname` = :fname,
                `sname` = :sname,
                `tname` = :tname,
                `position` = :position,
                `birth` = :birth,
                `work_begin` = :work_begin,
                `email` = :email,
                `phone_work` = :phone_work,
                `phone_private` = :phone_private", $data);
            $data['id'] = $this->db->lastInsertId();
        } else {
            echo($data['birth']);
            $this->db->executeQuery("UPDATE `users` SET 
                `section` = :section,
                `fname` = :fname,
                `sname` = :sname,
                `tname` = :tname,
                `position` = :position,
                `birth` = :birth,
                `work_begin` = :work_begin,
                `email` = :email,
                `phone_work` = :phone_work,
                `phone_private` = :phone_private
                WHERE `id` = :id", $data);
        }

        if($data['director']) {
            $sections = Fabric::getOtdelCrud();
            $sections->updateDirector(['id'=>$data['section'],'director'=>$data['id']]);
        }

        if(isset($_FILES['file']['tmp_name']) && is_uploaded_file($_FILES['file']['tmp_name'])) {
            $ext = explode(".", $_FILES['file']['name']);
            $fname = sha1_file($_FILES['file']['tmp_name']).'.'.end($ext);
            move_uploaded_file($_FILES['file']['tmp_name'], \Config::publicPath().'images/upload/'.$fname);
            $this->db->executeQuery("UPDATE users SET image = :image WHERE id = :id", ['image'=>$fname,'id'=>$data['id']]);
        }

        $this->updateSocials($data['id'], $data['socials']);

        return $data['id'];
    }

    public function delete($data)
    {
        // TODO: Implement delete() method.
        // Удаление не предусмотрено в рамках данной задачи. Но структурно метод зарезервирован
    }

    private function getSocials($id)
    {
        $out = $this->db->executeQuery("SELECT value FROM user_socials WHERE user_id = :id", ['id'=>$id]);
        return $out->fetchAllAssociative();
    }

    private function updateSocials($id, $socials)
    {
        $this->db->executeQuery("DELETE FROM user_socials WHERE user_id = :id", ['id'=>$id]);
        if(is_array($socials) && count($socials)>0) {
            foreach($socials as $item) {
                if($item) $this->db->executeQuery("INSERT INTO `user_socials` SET `value` = :value, user_id = :id", ['id'=>$id, 'value'=>$item]);
            }
        }
    }
}