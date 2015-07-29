<?php

class User_model extends CI_Model
{

    public function __construct ()
    {
        parent::__construct();
    }

    public function getUserByID ($id)
    {
        $user = array(
                'id' => 11,
                "name" => "John",
                "surname" => "Doe",
                "age" => 41
        );
        return $user;
    }
    public function get_all_students() {
        return $this->db->query("SELECT * FROM Student")->result_array();
    }
    public function update_students($data) {
        foreach($data as $value) {
            $query = "UPDATE Student SET user_name='{$value['user_name']}', password='{$value['password']}'
                      WHERE id='{$value['id']}'";
            $this->db->query($query);
        }
        return true;
    }
}

?>