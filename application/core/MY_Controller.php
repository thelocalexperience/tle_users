<?php

class MY_Controller extends CI_Controller {
    var $user = FALSE;
    
     function __construct()
    {
        parent::__construct();
        
        $this->load->spark('php-activerecord/0.0.2');
        
        if (isset($this->session->userdata['user_id'])) $this->user = User::find($this->session->userdata['user_id']);
        
        if (get_cookie('tle_area_id')) {
            $cookie_exp = explode('|', get_cookie('tle_area_id'));
            $this->session->set_userdata('area_id', $cookie_exp[0]);
            $this->session->set_userdata('area_title', $cookie_exp[1]);
        } else {
            $this->session->set_userdata('area_id', DEFAULT_AREA_ID);
            $this->session->set_userdata('area_title', DEFAULT_AREA_NAME);
        }
    }
}

/* End of file my_controller.php */
/* Location: ./application/core/my_controller.php */
