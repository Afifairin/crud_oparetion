<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    function create($formArray){
        $this->db->insert('user_info', $formArray);//insert into user_info
    }
	function allInfo(){
        return $users = $this->db->get('user_info')->result_array();//select * from user_info
    }
    function getUser($userId){
        $this->db->where('user_id',$userId);
        return $user = $this->db->get('user_info')->row_array();// select * from user_info where user_id=..
    }
    function updateUser($userId,$formArray){
        $this->db->where('user_id',$userId);
        $this->db->update('user_info', $formArray);//update user_info set name=.., email=.., ....where user_id=..
    }
    function deleteUser($userId){
        $this->db->where('user_id',$userId);
        $this->db->delete('user_info');//delete user_info where user_id=..
    }
}
?>