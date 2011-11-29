<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends MY_Controller {

	public function signin()
	{
        // User submitted signin form
        if ($_POST)
        {
            // Validate they didn't break any rules
            $this->load->library('form_validation');
            $this->form_validation->set_error_delimiters('<div class="span-6 last error clear">', '</div>');
            
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
                    $data['errors'] = "<div class='span-6 last error clear'>Login Failed</div>";
					$this->load->view('auth/signin', $data);
                }
            }
        }
        
        else
            $this->load->view('auth/signin');
	}
	
	public function signout()
	{
		User::signout();
		redirect('');
	}
	
	public function signup()
	{
		if ($_POST) {
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<div class="span-6 last error clear">', '</div>');
			
			$validation_array = array(
				array(
					'field' => 'email_address',
					'label' => 'Email Address',
					'rules' => 'trim|required|valid_email|is_unique(users.email_address)|xss_clean'
				),
				array(
					'field' => 'password',
					'label' => 'Password',
					'rules' => 'trim|required|min_length[4]|max_length[16]|matches[password_confirm]'
				),
				array(
					'field' => 'password_confirm',
					'label' => 'Password Confirm',
					'rules' => 'trim|required'
				)
			);
			
			$this->form_validation->set_rules($validation_array);
			if ($this->form_validation->run() == FALSE)
			{
				// Validation failed 
				$this->load->view('auth/signup');
			}
			else {
				// Validated correctly
				
				$user = User::create(
					array(
						'email_address' => $_POST['email_address'],
						'password' => $_POST['password']
					)
				);
				
				User::signin($user->id);
				redirect('');
			}
		}
		else {
			$this->load->view('auth/signup');
		}
	}
}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */
