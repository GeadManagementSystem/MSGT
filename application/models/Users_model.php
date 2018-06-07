<?php
defined('BASEPATH') OR exit('');

class Users_model extends CI_Model{

    function login_as ($username, $password){
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query = $this->db->get('users');
        $row = $query -> row();
        if($query->num_rows() > 0){

            // get the role of the user 
            if($row->role === 'mgr'){
                
                return 'manager';

            }
            else if($row->role === 'sper'){
                return 'salesperson';

            }
            else if($row->role === 'smgr'){

                return 'stockmanager';

            }
        }
        else{
            // entered invalid username and password 
            return false;
        }
    }
}
    