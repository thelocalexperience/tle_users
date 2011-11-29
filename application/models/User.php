<?php

class User extends ActiveRecord\Model {
    static $table_name = 'users';
    
    function set_password($plaintext)
    {
        $this->hashed_password = $this->hashed_password($plaintext);
    }
    
    private function hashed_password($password)
    {
        $salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
        $hash = hash('sha256', $salt . $password);
        
        return $salt . $hash;
    }
    
    private function validate_password($password)
    {
        $salt = substr($this->hashed_password, 0, 64);
        $hash = substr($this->hashed_password, 64, 64);
        
        $password_hash = hash('sha256', $salt . $password);
        
        return $password_hash == $hash;
    }
    
    public static function validate_signin($email_address, $password)
    {
        $user = User::find_by_email_address($email_address);
        
        if ($user && $user->validate_password($password))
        {
            
            User::signin($user->id);
            return $user;
        }
        else
        {
            return FALSE;
        }
    }
    
    public static function signin($user_id)
    {
        $CI =& get_instance();
        $CI->load->library('session');
        $CI->session->set_userdata('user_id', $user_id);
    }
    
    public static function signout()
    {
        $CI =& get_instance();
        $CI->load->library('session');
        $CI->session->unset_userdata('user_id');
    }
    
}