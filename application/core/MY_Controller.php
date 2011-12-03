<?php

class MY_Controller extends CI_Controller {
    var $user = FALSE;
    
     function __construct()
    {
        parent::__construct();
        
        $this->load->spark('php-activerecord/0.0.2');
        
        if (isset($this->session->userdata['user_id'])) $this->user = User::find($this->session->userdata['user_id']);
        
        if (get_cookie('tle_area_id')) {
            $new_area_info = explode("|", get_cookie('tle_area_id'));
        }
    }
}

/* End of file my_controller.php */
/* Location: ./application/core/my_controller.php */
