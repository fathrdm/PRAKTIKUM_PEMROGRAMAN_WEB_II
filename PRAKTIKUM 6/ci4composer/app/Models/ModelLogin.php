<?php
namespace App\Models;
use CodeIgniter\Model;
class ModelLogin extends Model
{
    public function get_data($username, $email, $password)
    {
        return $this->db->table('user')
        ->where(array('username' => $username, 'email' => $email, 'password' => $password))
        ->get()->getRowArray();
    }
}