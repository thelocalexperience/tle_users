<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function signin()
	{
        // User submitted signin form
        if ($_POST)
        {
            // Validate they didn't break any rules
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<div class="span-6 last error">', '</div>');
            
            $validation_array = array(
                array(
                    'field' => 'email_address',
                    'label' => 'Email Address',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'password',
                    'label' => 'Password',
                    'rules' => 'required'
                )
            );
            
            $this->form_validation->set_rules($validation_array);
           
            if ($this->form_validation->run() == FALSE)
            {
                // Validation failed 
                $this->load->view('auth/signin');
            }
            else {
                // Validated correctly
                $this->load->spark('php-activerecord/0.0.2');
                
                // Attempt to sign user in
                $user = User::validate_signin($_POST['email_address'], $_POST['password']);
                
                if ($user)
                {
                    // User signed in successfully
                    redirect('');
                }
                else
                {
                    // User failed to sign in
                    $this->load->library('session');
                    $this->session->set_flashdata('message','Invalid Email Address and/or Password');
                }
            }
        }
        
        else
            $this->load->view('auth/signin');
	}
    
    public function signup()
    {
        $this->load->view('auth/signup');
    }
}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */
